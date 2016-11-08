<?php
session_start();
//Classes a serem implementadas
include_once("class/Connection.php");
include_once("System.php");
include_once("class/BD.php");
include_once("class/User.php");

//Criando o objeto da classe para execução
$class = ucfirst($_GET['class']);
$obj = new $class();
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
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/user" -H "Content-Type: application/json"  -d '{"nm_user":"Eren","ds_login":"eren@gmail.com","ds_pwd":"teste","ds_path_img":"teste/img","dt_birth":"1997-06-28"}'
//Insere Project
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/user/" -H "Content-Type: application/json"  -d '{"nm_user":"Eren","ds_login":"eren@gmail.com","ds_pwd":"teste","ds_path_img":"teste/img","dt_birth":"1997-06-28"}'
//Consulta
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/user/4"
//Lista
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/userall"
//Login
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/user/auth" -H "Content-Type: application/json"  -d '{"login":"eren@gmail.com","pwd":"teste"}'
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