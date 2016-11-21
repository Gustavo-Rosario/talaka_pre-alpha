<?php
session_start();
include_once("../Model/Page.php");
$pag = new Page();
$data = $pag->curl("https://talaka-pre-alpha-gmastersupreme.c9users.io/exec/visitor/pesqOld/4");
$pag->load("../view/nav.php",array("pag_title" =>"Home"));
$pag->load("../view/home2.php",array("data" => $data));
$pag->load("../view/footer.php");
?>