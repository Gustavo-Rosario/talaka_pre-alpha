<?php
session_start();
header("Content-Type: text/html");
include_once("../Model/Page.php");
//Pegando valores
$termo = $_GET['arg']; 
$t= str_replace(" ","%2520",$termo);

//Usando obj Page
$pag = new Page();
$data = $pag->curl("http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/pesqName/".$t);
$pag->load("../view/explore.php",array("data" =>$data));
/*



curl_setopt_array($curl, array(
  CURLOPT_URL => "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/pesqName/".$t,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $obj = json_decode($response);
    $data=(array)json_decode($obj->data);
    include();
}
*/

?>