<?php
    
    include_once("Connection.php");
    
    class Megaman{
    
        public function bind_param($type,$param1,$param2,$param3){
            echo "\n Type: ".$type."\n
                  Param1: ".$param1."\n
                  Param2: ".$param2."\n
                  Param3: ".$param3;
        }
    }
    
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
        
        
        public function inserirUser($obj){
            $stm = $this->con->prepare("INSERT INTO User(ds_login,ds_pwd,ds_path_img) VALUES (?,?,?)") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("sss",$obj->login,$obj->pwd,$obj->img) or die("Erro 2".$stm->error.http_response_code(405));
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
        //
        public function inserirProject($obj,$id){
            $stm = $this->con->prepare("INSERT INTO Project(cd_user,nm_title,ds_project,ds_path_img,vl_meta) VALUES (?,?,?,?,?)") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("isssi",$id,$obj->title,$obj->ds,$obj->img,$obj->meta) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute() or die("Erro 3".$stm->error.http_response_code(405));
            return true;
        }
        
        public function consultarProject($id=1,$where="cd_project"){
            $stm = $this->con->prepare("SELECT cd_project,nm_title,ds_project,ds_path_img,vl_meta FROM Project WHERE ? = ?") or die("Erro 1".$con->error.http_response_code(405));
            $stm->bind_param("si",$where,$id) or die("Erro 2".$stm->error.http_response_code(405));
            $stm->execute()or die("Erro 3".$stm->error.http_response_code(405));
            /*
            $stm->bind_result($login,$img);
            $stm->fetch();
            return json_encode(array("id" => $id, "login" => $login, "img" => $img));
            */
            $stm->bind_result($id,$title,$ds,$img,$vl);
            $r = array();
            while($stm->fetch()){
                $r["d".$id] = array("id" => $id, "title" => $title, "ds" => $ds,"img" => $img,"meta" =>$vl);
            }
            return json_encode($r);
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
    }
    
?>