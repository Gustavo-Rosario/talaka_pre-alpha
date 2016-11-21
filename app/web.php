<?php
session_start();
//Classes a serem implementadas
include_once("class/Connection.php");
include_once("class/System.php");
include_once("class/User.php");
include_once("class/Client.php");
include_once("class/Visitor.php");

//Criando o objeto da classe para execução
$class = ucfirst($_GET['class']);
$obj = new $class($class);
$met = $_GET['met'];
$arg0 = $_GET['arg0'];
$httpM = $_SERVER['REQUEST_METHOD'];
$method = $met.$httpM;
/*
echo "Classe: ".$class."<br>".
     "Metodo: ".$met."<br>".
     "Arg: ".$arg0."<br>".
     "HTTPM: ".$httpM;
*/
//Exemplos de curl
//Insere User
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/visitor/user" -H "Content-Type: application/json"  -d '{"nm_user":"Mikasa Ackerman","ds_login":"mikasa@gmail.com","ds_pwd":"1234","ds_path_img":"mikasa.jpg","dt_birth":"1999-03-11"}'
//Altera Info User
//curl -v -X PUT "https://talaka-pre-alpha-gmastersupreme.c9users.io/exec/client/profile/1" -H "Content-Type: application/json"_user":"Eren Jeager"}'
//Insere Project
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/client/project/1" -H "Content-Type: application/json"  -d '{"nm_title":"Akira","ds_project":"Uma grande explos&aatilde;o fez com que T&oacute;quio fosse destru&iacute;da em 1988. Em seu lugar foi constru&iacute;da Neo T&oacute;quio, que, em 2019, sofre com atentados terroristas por toda a cidade. Kaneda (Mitsuo Iwata) e Tetsuo (Nozomu Sasaki) s&atilde;o amigos que integram uma gangue de motoqueiros. Eles disputam rachas violentos com uma gangue rival, os Palha&ccedil;os, at&eacute; que um dia Tetsuo encontra Takashi (Tatsuhiko Nakamura), uma estranha crian&ccedil;a com poderes que fugiu do hospital onde era mantido como cobaia.","vl_meta":3780.00,"dt_final":"2017-06-28","ds_path_img":"akira.jpg","ds_img_back":"spiCapa.jpg"}'
//Consulta
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/visitor/project/4"
//Financing 
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/client/invest/1" -H "Content-Type: application/json" -d '{"cd_project":2,"vl_financing":16.00}'
//Lista Project
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/visitor/pesqOld/4"
//Login
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/client/auth" -H "Content-Type: application/json"  -d '{"login":"eren@gmail.com","pwd":"teste"}'
if(isset($arg0)){
    $resp = json_decode($obj->$method($arg0));
}else{
    $resp = json_decode($obj->$method());
}
/*
Para o Listar
$ob = json_decode($resp->data);
echo $ob->d1->login . "\n";
*/
echo json_encode($resp);
?>