<?php

class Page{
    
    public function curl($url,$method="GET"){
        //Iniciando o cURL
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://".$_SERVER['HTTP_HOST'].$url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => $method,
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        }else{
            $obj = json_decode($response);
            return (array)json_decode($obj->data);
        }
    }
    
    
    public function load($url,$data=array("")){
        extract($data);
        return include($url);
    }

}

?>