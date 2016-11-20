<?php

abstract class User{
    
    protected $db;
    
    public function __construct($type){
        $this->db = new System($type);
    }
    
    public function __call($met,$arg){
        return json_encode(array('stats' => 'fail', 'data' => 'metodo "'.$met .'" nao encontrado na classe Visitor'));
        http_response_code(404);
    }
    
    public function allprojectGET(){
         
        $resp = ( $data = $this->db->listarProject() )? "success" : "fail_list";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function projectGET($id){
        $resp = ( $data = $this->db->consultarProject($id) )?"success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function pesqNameGET($name){
        $resp = ( $data = $this->db->pesqProject($name) )?"success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function execGET($id=1){
        $resp = ( $data = $this->db->consultar($id) )? "success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function allGET(){
        $resp = ( $data = $this->db->listarUser() )? "success" : "fail_list";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    /*
    public static function auth(){
        session_start();
        return isset($_SESSION['login']);
    }
    */
    
}


?>