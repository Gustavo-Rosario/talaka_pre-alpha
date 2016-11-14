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
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/user" -H "Content-Type: application/json"  -d '{"nm_user":"Mikasa Ackerman","ds_login":"mikasa@gmail.com","ds_pwd":"1234","ds_path_img":"mikasa.jpg","dt_birth":"1999-03-11"}'
//Insere Project
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/user/project/1" -H "Content-Type: application/json"  -d '{"nm_title":"The Indie Spider-Man","ds_project":"Peter Parker era um aluno brilhante na escola, mas n&atilde;o tinha muitos amigos. Por&etilde;m, era muito amado por seus tios, Ben e May Parker. Um dia, em uma mostra de ci&ecilc;ncias, Peter foi picado por uma aranha irradiada, que lhe deu a habilidade de escalar paredes al&eacute;m de força proporcional a de uma aranha e fator de cura. Peter tamb&eacute;m criou lan&ccedil;adores de teia. Peter começou a fazer apresenta&ccedil;$oatilde;es mostrando suas incr$iacute;veis habilidades. Ap&oacute;s o termino de uma dessas apresenta&ccedil;$oatilde;es, ele viu um criminoso fugindo.","vl_meta":2400.00,"ds_path_img":"spiderman.jpg"}'
//Consulta
//curl -v -X GET "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/user/4"
//Financing 
//curl -v -X POST "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/user/invest/1" -H "Content-Type: application/json" -d '{"cd_project":2,"vl_financing":16.00}'
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