<?php

$class = ucfirst($_GET['class'])."Resource". $_SERVER['HTTP_METHOD'];
$obj = new $class();
$met = $_GET['met'];
$arg0 = $_GET['arg0'];


if(isset($arg0)){
    $obj->$met($arg0);
}else{
    $obj->$met();
}

?>