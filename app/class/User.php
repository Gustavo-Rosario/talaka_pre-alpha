<?php

//header("Access-Control-Allow-Origin","*");

class User{
    
    public function __call($met,$arg){
        return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe User'));
        http_response_code(404);
    }
    
    //Project methods
    public function projectPOST($id){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json" || $id === null){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $obj->cd_user = $id;
            $obj->dt_begin = date("Y-m-d");
            $db = new BD();
            $resp = ( $db->inserir('Project',$obj) )? "success" : "fail_insert";
            return json_encode(array("stats" => $resp, "data" => null));
        }else{
            return json_encode(array("stats" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
    }
    
    public function investPOST($id=1){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json" || $id === null){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $obj->cd_user = $id;
            $obj->dt_financing = date("Y-m-d");
            $db = new BD();
            $resp = ( $db->inserir('Financing',$obj) )? "success" : "fail_insert";
            $vetor = array("stats" => $resp, "data" => null);
            return json_encode( $vetor );
        }else{
            return json_encode(array("stats" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
    }
    
    public function projectGET($id=1){
        $db = new BD();
        $resp = ( $data = $db->consultarProject($id) )? "success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function allprojectGET(){
        $db = new BD();
        $resp = ( $data = $db->listarProject() )? "success" : "fail_list";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    /*
    public static function auth(){
        session_start();
        return isset($_SESSION['login']);
    }
    */
	public function authPOST(){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $db = new BD();
            $resp = $db->checkUser($obj);
            return $resp;
        }else{
            return json_encode(array("stats" => "fail_content_type", "data" => null));
            http_response_code(400);
        }
         
    }
	
}

?>