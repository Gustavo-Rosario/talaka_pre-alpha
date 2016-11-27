<?php   
include_once("../Model/Page.php");
header('Content-Type: text/html; charset=utf-8');
//Page Controller

class Pagecon{
    
    private $page;
    
    public function __construct($bd){
        //$bd nao sera utilizado
        session_start();
        $this->page = new Page();
        define("System-access","Allow",TRUE);
    }
    
    public function index(){
        $data = $this->page->curl("/exec/visitor/pesqOld/4");
        $project = $this->page->curl("/exec/visitor/pesqOld/6");
        $this->page->load("../view/nav.php",array("pag_title" =>"Home"));
        $this->page->load("../view/home2.php",array("data" => $data,"project" => $project));
        $this->page->load("../view/footer.php");
    }
    
    public function project($id){
        $data = $this->page->curl("/exec/visitor/project/".$id);
        $this->page->load("../view/nav.php",array("pag_title" =>"Projeto"));
        $this->page->load("../view/hqproject.php",$data);
        $this->page->load("../view/footer.php");
    }
    
    public function explore($termo,$pag){
        $t= str_replace(" ","%2520",$termo);
        $data = $this->page->curl("/exec/visitor/pesqName/".$t."/".$pag);
        $this->page->load("../view/nav.php",array("pag_title" =>"Pesquisa"));
        $this->page->load("../view/explore.php",array("data" =>$data));
        $this->page->load("../view/footer.php");
    }
    
    
    public function explorecat($id){
        $data = $this->page->curl("/exec/visitor/cat/".$id);
        $nm = System::getCategory($id);
        $data['termo'] = 'Categoria procurado : "'.$nm.'"';
        $this->page->load("../view/nav.php",array("pag_title" =>$nm));
        $this->page->load("../view/explore.php",array("data" =>$data));
        $this->page->load("../view/footer.php");
    }
    
    public function signup(){
        if(!isset($_SESSION['cdUser'])){
            $this->page->load("../view/signup.php");
        }else{
            header("location: /");
        }
    }
    
    public function signin(){
        if(!isset($_SESSION['cdUser'])){
            $this->page->load("../view/signin.php");
        }else{
            header("location:/");
        }
    }
    
    public function campaign(){
        $this->page->load("../view/nav.php",array("pag_title" =>"Campanha"));
        $this->page->load("../view/create.php");
        $this->page->load("../view/footer.php");
    }
    
    public function newproject(){
        $this->page->load("../view/nav.php",array("pag_title" =>"Novo Projeto"));
        $this->page->load("../view/publish.php");
        $this->page->load("../view/footer.php");
    }
    
    public function altprofile(){
        if(isset($_SESSION['cdUser'])){
            $user = $this->page->curl('/exec/client/profile/'.$_SESSION['cdUser']);
            $this->page->load("../view/nav.php",array("pag_title" =>"Alterar Perfil"));
            $this->page->load("../view/alterUser.php",$user);
            $this->page->load("../view/footer.php");
        }else{
            header("location: /");
        }
    }
    
    public function myprofile(){
        if(isset($_SESSION['cdUser'])){
            $user = $this->page->curl('/exec/client/profile/'.$_SESSION['cdUser']);
            $this->page->load("../view/nav.php",array("pag_title" =>"Meu Perfil"));
            $this->page->load("../view/profile.php",$user);
            $this->page->load("../view/footer.php");
        }else{
            header("location: /");
        }
    }
    
    public function profile($id){
        if ($id == $_SESSION['cdUser']){
            header('location: /myprofile');
        } else {
            $user = $this->page->curl('/exec/client/profile/'.$id);
            $this->page->load("../view/nav.php",array("pag_title" =>"Perfil"));
            $this->page->load('../view/profile.php',$user);
            $this->page->load("../view/footer.php");
        }
    }
    
    //Especial
    public function visit($id){
        $this->page->curl("/exec/visitor/visitation/".$id,"PUT");
        return json_encode(array("stats"=>"success","data"=>null));
    }
    
}


?>