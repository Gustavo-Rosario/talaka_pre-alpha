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
    
    public function pesqOldGET($num){
        $resp = ( $data = $this->db->listProject($num) )?"success" : "fail_select";
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
    
    //Especial
    public function visitationPUT($id){
        $num = (int)json_decode($this->db->consultarProject($id))->visit;
        $obj = (object)array("qt_visitation" => ($num + 1));
        $where = array("cd_project"=>$id);
        $r = ($this->db->alterar("Project",$obj,$where))? "success" : "fail";
        return json_encode(array("stats"=>"success","data"=>$r));
    }
    
    /*
    public static function auth(){
        session_start();
        return isset($_SESSION['login']);
    }
    */
    
}


?>