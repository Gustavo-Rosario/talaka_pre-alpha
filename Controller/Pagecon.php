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
    
    public function indexGET(){
        $data = $this->page->curl("/exec/visitor/pesqOld/4");
        $project = $this->page->curl("/exec/visitor/pesqOld/6");
        $this->page->load("../view/nav.php",array("pag_title" =>"Home"));
        $this->page->load("../view/home2.php",array("data" => $data,"project" => $project));
        $this->page->load("../view/footer.php");
    }
    
    public function projectGET($id){
        $data = $this->page->curl("/exec/visitor/project/".$id);
        $this->page->load("../view/nav.php",array("pag_title" =>"Projeto"));
        $this->page->load("../view/hqproject.php",$data);
        $this->page->load("../view/footer.php");
    }
    
    public function exploreGET($termo){
        $t= str_replace(" ","%2520",$termo);
        $data = $this->page->curl("/exec/visitor/pesqName/".$t);
        $this->page->load("../view/nav.php",array("pag_title" =>"Pesquisa"));
        $this->page->load("../view/explore.php",array("data" =>$data));
        $this->page->load("../view/footer.php");
    }
    
}


?>