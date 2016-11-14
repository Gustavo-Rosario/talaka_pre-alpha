<?php
session_start();
header("Content-Type: text/html");
include_once("../Model/Page.php");
//Pegando valores
$id = $_GET['id'];

//Usando o obj de Page
$pag = new Page();
$data = $pag->curl("http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/project/".$id,"GET");
$pag->load("../view/hqproject.php",$data);

?>