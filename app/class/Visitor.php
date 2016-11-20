<?php

header("Content-Type: application/json");

class Visitor extends User{
    
    public function __construct($type){
        parent::__construct($type);
    }
    
    public function __call($met,$arg){
        return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe Visitor'));
        http_response_code(404);
    }
    
    public function userPOST(){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $db = new BD();
            if($db->inserir('User',$obj)){
                $login = (object)array("login" => $obj->ds_login, "pwd" => $obj->ds_pwd);
                $db->checkUser($login);
                $resp = "success";
            }else{
                $resp = "fail";
            }
            return json_encode(array("stats" => $resp, "data" => null));
        }else{
            return json_encode(array("stats" => "fail_content_type", "data" => null));
            http_response_code(400);
        }
    }
    
}


?>