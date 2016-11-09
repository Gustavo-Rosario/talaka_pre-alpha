<?php
session_start();
/*
class BD{
public function bind_param($type,$param1,$param2,$param3){
        echo "Type: ".$type."<br>
              Param1: ".$param1."<br>
              Param2: ".$param2."<br>
              Param3: ".$param3;
    }
}
$p1 = "Gustavo";
$p2 = "hello";
$p3 = "FIM";
$type = "sss";
$vls = array($p1,$p2,$p3);
$stm = new BD();
$a = array_merge( array($type), $vls);
call_user_func_array(array($stm,"bind_param"), array_merge(array($type), $vls));
//print_r(array_merge(array($type), $vls));
//print_r(array($stm, "bind_param"));
//call_user_func_array(array($stm, "bind_param"), array_merge(array($type), $vls));
*/
session_destroy();
?>