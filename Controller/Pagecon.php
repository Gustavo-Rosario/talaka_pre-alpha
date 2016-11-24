<?php
include_once("../Model/Page.php");
header('Content-Type: text/html; charset=utf-8');
//Page Controller

class Pagecon{
    
    private $page;
    
    public function __construct($bd){
        //$bd nao sera utilizado
        $this->page = new Page();
        define("System-access","Allow",TRUE);
    }
    
    public function projectGET($id){
        //Pegando valores
        //$id = $_GET['id'];
        $data = $this->page->curl("/exec/visitor/project/".$id);
        $this->page->load("../view/nav.php",array("pag_title" =>"Projeto"));
        $this->page->load("../view/hqproject.php",$data);
        $this->page->load("../view/footer.php");
    }
    
}


?>