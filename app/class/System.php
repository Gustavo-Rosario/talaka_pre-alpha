<?php
    session_start();
    include_once("Connection.php");
    
    class System{

        private $con, $type;
        
        public function __construct($type){
            $this->con = Connection::getCon("localhost","gmastersupreme","","TalakaPA",3306);
            $this->type = $type;
        }
        
        public function __call($met,$arg){
            return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe System'));
            http_response_code(404);
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
        //Update para todos
        public function alterar($table,$obj,$where){
            //Prepara o sql
            $type = "";
            $vls = array();
            $query = "UPDATE ".$table." SET ";
            $var = (array)$obj;
            foreach ($var as $colum => $value) {
                $query .= $colum." = ?,";
                $type  .= gettype($value)[0];
                $vls[] = &$var[$colum];
            }
            $query = substr($query, 0, -1) . " WHERE";
            foreach ($where as $col => $val) {
                $query .= " ".$col." = ? AND";
                $type  .= gettype($val)[0];
                $vls[] = &$where[$col];
            }
            $query = substr($query, 0, -3);
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
            $stm = $this->con->prepare("SELECT p.nm_title,p.ds_project,p.ds_path_img,p.vl_meta,p.vl_collected,p.dt_begin,p.dt_final,u.nm_user, count(f.cd_user) total 
            FROM Project as p, User as u, Financing as f 
            WHERE p.cd_user = u.cd_user 
            AND p.cd_project = f.cd_project
            AND p.cd_project = ?") or die("Erro 1".$this->con->error.http_response_code(405));
            $stm->bind_param("i",$id) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            $stm->bind_result($title,$ds,$img,$vlM,$vlC,$dtB,$dtF,$creator,$total);
            $stm->fetch();
            $resp = json_encode( array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF,"creator"=>$creator,"total"=>$total) )or die("Erro no json");
            return $resp;
        }
        
        public function listProject($num){
            $stm = $this->con->prepare("SELECT p.cd_project, p.nm_title, p.ds_project, p.ds_path_img, p.vl_meta, p.vl_collected, p.dt_begin, p.dt_final, u.nm_user, p.ds_img_back, u.ds_path_img, ((p.vl_collected*100) / p.vl_meta) dif
            FROM Project AS p, User AS u
            WHERE p.cd_user = u.cd_user
            ORDER BY dif DESC 
            LIMIT ?") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("i",$num);
            $stm->execute()or die("Erro 2".$stm->error.http_response_code(405));
            $stm->bind_result($id,$title,$ds,$img,$vlM,$vlC,$dtB,$dtF,$creator,$imgB,$imgU,$percent);
            $r = array();
            while($stm->fetch()){
                $r["d".$id] = array("id"=>$id,"title"=>$title,"ds"=>utf8_encode($ds),"img"=>$img,"meta"=>$vlM,"collected"=>$vlC,"dtB"=>$dtB,"dtF"=>$dtF,"creator"=>$creator,"imgB"=>$imgB,"imgU"=>$imgU,"percent"=>$percent) or die("Erro no json");
            }
            return json_encode($r);
        }
        
        public function pesqProject($termo){
            $name = "%".$termo."%";
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
            $r["total"] = $i;
            $r["termo"] = $termo;
            return json_encode($r);
        }
        
        public function verifyClass(){
            return $this->type === "System";
        }
    }
    
?>