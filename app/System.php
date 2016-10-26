<?php

header("Content-Type: application/json");

class System{
    
    public function execPOST(){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $db = new BD();
            $resp = ( $db->inserir($obj) )? "success" : "fail_insert";
            return json_encode(array("status" => $resp));
        }else{
            return json_encode(array("status" => "fail_content_type"));
            http_response_code(400);
        }
    }
    
    public static function auth(){
        
    }
}


?>