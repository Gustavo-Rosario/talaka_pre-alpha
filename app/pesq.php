<?php
session_start();
header("Content-Type: text/html");
include_once("../Model/Page.php");
define("System-access","Allow",TRUE);
//Pegando valores
$termo = $_GET['arg']; 
$t= str_replace(" ","%2520",$termo);

//Usando obj Page
$pag = new Page();
$data = $pag->curl("/exec/visitor/pesqName/".$t);
$pag->load("../view/nav.php",array("pag_title" =>"Pesquisa"));
$pag->load("../view/explore.php",array("data" =>$data));
$pag->load("../view/footer.php");
?>