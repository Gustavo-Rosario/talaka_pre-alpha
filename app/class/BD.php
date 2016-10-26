<?php
    
    include_once("Connection.php");
    
    class BD{

        private $con;
        
        public function __construct(){
            $this->con = Connection::getCon("localhost","gmastersupreme","","TalakaPA",3306);
        }
        
        public function inserir($obj){
            $stm = $this->con->prepare("INSERT INTO User(ds_login,ds_pwd,ds_path_img) VALUES (?,?,?)") or die("Erro 1".$con->error);
            $stm->bind_param("sss",$obj->login,$obj->pwd,$obj->img) or die("Erro 2".$stm->error);
            $stm->execute() or die("Erro 3".$stm->error);
            return true;
        }
        
        public function consultar($id=1){
            $stm = $this->con->prepare("SELECT ds_login,ds_path_img FROM User WHERE cd_user = ?") or die("Erro 1".$con->error);
            $stm->bind_param("i",$id) or die("Erro 2".$stm->error);
            $stm->execute()or die("Erro 3".$stm->error);
            $stm->bind_result($login,$img);
            $stm->fetch();
            return json_encode(array("id" => $id, "login" => $login, "img" => $img));
        }
        
        public function listar(){
            $stm = $this->con->prepare("SELECT cd_user,ds_login,ds_path_img FROM User ") or die("Erro 1".$con->error);
            $stm->execute()or die("Erro 2".$stm->error);
            $stm->bind_result($id,$login,$img);
            $r = array();
            while($stm->fetch()){
                $r["d".$id] = array("id" => $id, "login" => $login, "img" => $img);
            }
            return json_encode($r);
        }
    }
    
?>