<?php
session_start();
header("Content-Type: text/html");
include_once("../Model/Page.php");
define("System-access","Allow",TRUE);
//Pegando valores
$id = $_GET['id'];

//Usando o obj de Page
$pag = new Page();
$data = $pag->curl("/exec/visitor/project/".$id);
$pag->load("../view/nav.php",array("pag_title" =>"Projeto"));
$pag->load("../view/hqproject.php",$data);
$pag->load("../view/footer.php");

?>