<?php
session_start();
include_once("../Model/Page.php");
$pag = new Page();
$pag->load("../view/nav.php",array("pag_title" =>"Home"));
$pag->load("../view/home.php");
$pag->load("../view/footer.php");
?>