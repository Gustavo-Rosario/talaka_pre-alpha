<?php
//Classes a serem implementadas
include_once("class/Connection.php");
include_once("System.php");
include_once("class/BD.php");

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
//Insere
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/exec" -H "Content-Type: application/json"  -d '{"login":"Eren","pwd":"teste","img":"teste/img"}'
//Consulta
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/exec/4"
//Lista
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/all"
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
echo $resp->status. "\n" . $resp->data."\n";
?>