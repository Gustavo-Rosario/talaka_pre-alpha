<?php

class User{
    
    public function __call($met,$arg){
        return json_encode(array('status' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe User'));
        http_response_code(404);
    }
    
    //Project methods
    public function projectPOST($id=null){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json" || $id === null){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $db = new BD();
            $resp = ( $db->inserirProject($obj,$id) )? "success" : "fail_insert";
            return json_encode(array("status" => $resp, "data" => null));
        }else{
            return json_encode(array("status" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
    }
    
    public function projectGET($id=1){
        $db = new BD();
        $resp = ( $data = $db->consultarProject($id) )? "success" : "fail_select";
        return json_encode(array("status" => $resp, "data" => $data));
    }
    
    public function allprojectGET(){
        $db = new BD();
        $resp = ( $data = $db->listarProject() )? "success" : "fail_list";
        return json_encode(array("status" => $resp, "data" => $data));
    }
    
    
    public static function auth(){
        session_start();
        return isset($_SESSION['login']);
    }
    
    public function authPOST(){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json" || $id === null){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $authBD = new BD();
            $authBD->checkUser($obj);
            return json_encode(array("status" => $resp, "data" => null));
        }else{
            return json_encode(array("status" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
        
    }
    
}

?>