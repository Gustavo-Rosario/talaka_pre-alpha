<?php

header("Content-Type: application/json");

class System{
    
    public function __call($met,$arg){
        return json_encode(array('status' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe System'));
        http_response_code(404);
    }
    
    public function execPOST(){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $db = new BD();
            $resp = ( $db->inserir($obj) )? "success" : "fail_insert";
            return json_encode(array("status" => $resp, "data" => null));
        }else{
            return json_encode(array("status" => "fail_content_type", "data" => null));
            http_response_code(400);
        }
    }
    
    public function execGET($id=1){
        $db = new BD();
        $resp = ( $data = $db->consultar($id) )? "success" : "fail_select";
        return json_encode(array("status" => $resp, "data" => $data));
    }
    
    public function allGET(){
        $db = new BD();
        $resp = ( $data = $db->listar() )? "success" : "fail_list";
        return json_encode(array("status" => $resp, "data" => $data));
    }
    
    public static function auth(){
        
    }
}


?>