<?php

class SystemPOST{
    
    private $con;
    
    public function __construct(){
        $this->con = Connection::getCon("localhost","gmastersupreme","","talaka-pre-alpha",3306);
    }
    
}

?>