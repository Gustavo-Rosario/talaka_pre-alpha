<?php

header("Content-Type: application/json");

class System{
    
    public function __call($met,$arg){
        return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe System'));
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
    
    public function projectGET($id){
        $db = new BD();
        $resp = ( $data = $db->consultarProject($id) )?"success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function pesqNameGET($name){
        $db= new BD();
        $resp = ( $data = $db->pesqProject($name) )?"success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function execGET($id=1){
        $db = new BD();
        $resp = ( $data = $db->consultar($id) )? "success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function allGET(){
        $db = new BD();
        $resp = ( $data = $db->listarUser() )? "success" : "fail_list";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public static function auth(){
        
    }
}


?>