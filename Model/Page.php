<?php

class Page{
    public function curl($class,$met,$arg0=false,$arg1=false){
        //Objeto criado para pegar a informacao
        $obj = new $class($class);
        //Method precisa de GET
        $method = $met."GET";
        //Executa e pega infos
        $info = (isset($arg0))? ( (isset($arg1))? json_decode($obj->$method($arg0,$arg1) )  : json_decode($obj->$method($arg0)) ) : json_decode($obj->$method());
        return (array)json_decode($info->data);
    }
    
    public function load($url,$data=array("")){
        extract($data);
        return include($url);
    }

}

?>