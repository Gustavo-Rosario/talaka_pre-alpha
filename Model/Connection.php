<?php

class Connection{
    public static function getCon($host,$root,$pwd,$bd,$port){
        return mysqli_connect($host,$root,$pwd,$bd,$port);
    }
}

?>