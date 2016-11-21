<?php
session_start();
include_once("../Model/Page.php");
define("System-access","Allow",TRUE);
$pag = new Page();
$data = $pag->curl("/exec/visitor/pesqOld/4");
$pag->load("../view/nav.php",array("pag_title" =>"Home"));
$pag->load("../view/home2.php",array("data" => $data));
$pag->load("../view/footer.php");
?>