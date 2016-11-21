<?php

header("Content-Type: application/json");

class Client extends User{
    
    public function __construct($type){
        parent::__construct($type);
    }
    
    public function __call($met,$arg){
        return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe Client'));
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
            $resp = ( $this->db->inserir('Project',$obj) )? "success" : "fail_insert";
            return json_encode(array("stats" => $resp, "data" => null));
        }else{
            return json_encode(array("stats" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
    }
    
    public function investPOST($id){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json" || $id === null){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $obj->cd_user = $id;
            $obj->dt_financing = date("Y-m-d"); 
            $resp = ( $this->db->inserir('Financing',$obj) )? "success" : "fail_insert";
            $vetor = array("stats" => $resp, "data" => null);
            return json_encode( $vetor );
        }else{
            return json_encode(array("stats" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
    }
    
    public function profilePUT($id){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json" || $id === null){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $where = array("cd_user" => (int)$id); 
            $resp = ( $this->db->alterar('User',$obj,$where) )? "success" : "fail_insert";
            $vetor = array("stats" => $resp, "data" => null);
            return json_encode( $vetor );
        }else{
            return json_encode(array("stats" => "fail_content_type_or_id_not_passed", "data" => null));
            http_response_code(400);
        }
    }
   
	public function authPOST(){
        $accept = $_SERVER["CONTENT_TYPE"];
        if($accept === "application/json"){
            $json = file_get_contents('php://input');
            $obj = json_decode($json);
            $resp = $this->db->checkUser($obj);
            return $resp;
        }else{
            return json_encode(array("stats" => "fail_content_type", "data" => null));
            http_response_code(400);
        }
         
    }
	
}

?>