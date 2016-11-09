<?php
    session_start();
    include_once("Connection.php");
    
    class BD{

        private $con;
        
        public function __construct(){
            $this->con = Connection::getCon("localhost","gmastersupreme","","TalakaPA",3306);
        }
        //Insert para todos
        public function inserir($table,$obj){
            //Prepara o sql
            $type = "";
            $param = "";
            $vls = array();
            $query = "INSERT INTO ".$table."(";
            $var = (array)$obj;
            foreach ($var as $colum => $value) {
                $query .= $colum.",";
                $param .= "?,";
                $type  .= gettype($value)[0];
                $vls[] = &$var[$colum];
            }
            $param = substr($param, 0, -1);
            $query = substr($query, 0, -1) . ") VALUES (". $param .")";
            $stm = $this->con->prepare($query) or die("Erro 1".$con->error.http_response_code(405));
            call_user_func_array(array($stm,"bind_param"),array_merge(array($type), $vls))or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute() or die("Erro 3".$stm->error.http_response_code(405));
            return true;
        }
        
        public function consultarUser($id=1){
            $stm = $this->con->prepare("SELECT ds_login,ds_path_img FROM User WHERE cd_user = ?") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("i",$id) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($login,$img);
            $stm->fetch();
            return json_encode(array("id" => $id, "login" => $login, "img" => $img));
        }
        
        public function listarUser(){
            $stm = $this->con->prepare("SELECT cd_user,ds_login,ds_path_img FROM User ") or die("Erro 1".$con->error.http_response_code(405));
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$login,$img);
            $r = array();
            while($stm->fetch()){
                $r["d".$id] = array("id" => $id, "login" => $login, "img" => $img);
            }
            return json_encode($r);
        }
        
        public function checkUser($obj){
            $stm = $this->con->prepare("SELECT cd_user, nm_user, ds_path_img FROM User WHERE ds_login = ? and ds_pwd = ?") or die("Erro 1 ".$this->con->error.http_response_code(405));
            $stm->bind_param("ss", $obj->login, $obj->pwd) or die("Erro 2 ".$stm->error.http_response_code(405));
            $stm->execute();
            $stm->bind_result($cdU,$nmU,$imgU);
            $stm->fetch();
            if ($cdU === "" || $cdU === null){
                return json_encode(array("stats"=>"fail", "data"=> "Login ou senha Incorretos"));
            } else {
                $_SESSION["cdUser"]=$cdU;
                $_SESSION["nmUser"]=$nmU;
                $_SESSION["imgUser"]=$imgU;
                return json_encode(array("stats"=>"success", "data"=>"login efetuado"));
            }
            return true;
        }
        
        public function consultarProject($id){
            $stm = $this->con->prepare("SELECT nm_title,ds_project,ds_path_img,vl_meta,vl_collected,dt_begin,dt_final FROM Project WHERE cd_project = ?") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",$id) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($title,$ds,$img,$vlM,$vlC,$dtB,$dtF);
            $stm->fetch();
            $resp = json_encode( array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF) )or die("Erro no json");
            return $resp;
        }
        
        public function listarProject(){
            $stm = $this->con->prepare("SELECT cd_user,ds_login,ds_path_img FROM User ") or die("Erro 1".$con->error.http_response_code(405));
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$login,$img);
            $r = array();
            while($stm->fetch()){
                $r["d".$id] = array("id" => $id, "login" => $login, "img" => $img);
            }
            return json_encode($r);
        }
        
        public function pesqProject($name){
            //$name = str_replace('%20', ' ', $name);
            preg_replace("#(\s)+#", " ", $name);
            $name = "%".$name."%";
            $stm = $this->con->prepare("SELECT cd_project,nm_title,ds_project,vl_meta,vl_collected,dt_final,ds_path_img FROM Project WHERE nm_title LIKE ? LIMIT 6 ") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("s",$name)or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$vlM,$vlC,$dt,$img);
            $r = array();
            $i = 0;
            while($stm->fetch()){
                $r["d".$i] = array("id" => $id, "title" => $title, "ds" => utf8_encode($ds), "meta" => $vlM,"collected" => $vlC, "img"=>$img, "dt"=>$dt);
                $i++;
            }
            $r["total"] = $name;
            return json_encode($r);
        }
    }
    
?>