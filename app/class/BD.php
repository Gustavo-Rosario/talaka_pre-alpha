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
    }
    
?>