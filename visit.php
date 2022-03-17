<?php 
ignore_user_abort(true);
error_reporting(0);
set_time_limit(0);

function file_getcontent_with_proxy($urltoget) {
    $url = $urltoget;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // read more about HTTPS 
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 10; IN2011 Build/QKQ1.191222.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/84.0.4147.89 Mobile Safari/537.36 GSA/11.20.15.21.arm64');
    $curl_scraped_page = curl_exec($ch);
    curl_close($ch);
    return $curl_scraped_page;
}


$urls = array (
    array ("elize56hacf","https://elizemake.euserverpro.xyz/?name=elizemake"),
    array ("kristmake","https://kristmake.euserverpro.xyz/?name=kristmake"),
    array ("nailtaimee74","https://nailtaimee74.euserverpro.xyz/?name=taimemake"),
    array ("escinamortan","https://escinamortan.euserverpro.xyz/?name=cinamake"),
    array ("sermenrlove","https://sermenrlove.euserverpro.xyz/?name=menlovemake"),
    array ("siridedante","https://siridedante.euserverpro.xyz/?name=siridemake")
    array ("sadenifantie","https://sadenifantie.euserverpro.xyz/?name=satiemake")
    
);
$st = count($urls);
//echo "Start ht";
while ( 1 ){
    $dt = 0;
    foreach($urls as $key=>$val){
        $name = $val[0];
        $url = $val[1];
        $res = file_getcontent_with_proxy($url);
        if($res){
        $dt += 1;
        }else{
        file_put_contents("php://stderr", "$url error \n");
        }
    }
    //echo "sleeping<br>";
    file_put_contents("php://stderr", "Tot:$st - Succes:$dt\n");
    sleep(0);
}
?>
