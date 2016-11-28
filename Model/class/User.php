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
    
    public function pesqNameGET($name,$pag){
        $resp = ( $data = $this->db->pesqProject($name,$pag) )? "success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function pesqOldGET($num){
        $resp = ($data = $this->db->listProject($num) )? "success" : "fail_select";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function catGET($cat,$pag){
        $resp = ( $data = $this->db->pesqCat($cat,$pag) )? "success" : "fail_list";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function profileGET($id){
        $resp = ($data = $this->db->consultarUser($id))? "success" : "fail_alter_project";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function myprojectsGET($id){
        $resp = ($data = $this->db->listMyProjects($id))? "success" : "fail_alter_project";
        return json_encode(array("stats" => $resp, "data" => $data));
    }
    
    public function myfinancesGET($id){
        $resp = ($data = $this->db->listMyFinances($id))? "success" : "fail_alter_project";
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
    
}


?>