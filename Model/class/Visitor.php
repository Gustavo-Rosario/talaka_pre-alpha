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
            $pwd = $obj->ds_pwd;
            $obj->ds_img_back = "grimgar.png";
            $obj->ds_biography = htmlspecialchars_decode( htmlentities($obj->ds_resume) );
            $obj->ds_pwd = hash("ripemd160" , $obj->ds_pwd);
            if($this->db->inserir('User',$obj)){
                $login = (object)array("login" => $obj->ds_login, "pwd" => $pwd);
                $this->db->checkUser($login);
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