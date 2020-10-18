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
  array("alaradilrapp","http://kandillihamit.pserver.ru/alaradilrapp/index.php"),
  array("alexsandragatesss","http://kandillihamit.pserver.ru/alexsandragatesss/index.php"),
  array("lianagustavvv17","http://kandillihamit.pserver.ru/lianagustavvv17/index.php"),
  array("shaaynewards","http://kandillihamit.pserver.ru/shaaynewards/index.php"),
  array("dorianxtarli","http://kandillihamit.pserver.ru/dorianxtarli/index.php"),
  array("dilrubamormentxl","http://kandillihamit.pserver.ru/dilrubamormentxl/index.php"),
  array("anneherriesss","http://kandillihamit.pserver.ru/anneherriesss/index.php"),
  array("alexsandrrsccott","http://kandillihamit.pserver.ru/alexsandrrsccott/index.php"),
  array("jeesusyorgoxl","http://kandillihamit.pserver.ru/jeesusyorgoxl/index.php"),
  array("josefxyorgopolos","http://kandillihamit.pserver.ru/josefxyorgopolos/index.php"),
  array("christianballeee","http://kandillihamit.pserver.ru/christianballeee/index.php"),
  array("breandaharlinn","http://kandillihamit.pserver.ru/breandaharlinn/index.php"),
  array("/arlenejamesxs","http://kandillihamit.pserver.ru//arlenejamesxs/index.php"),
  array("martinxschorlett","http://kandillihamit.pserver.ru/martinxschorlett/index.php"),
  array("ameliasingcan","http://kandillihamit.pserver.ru/ameliasingcan/index.php"),
  array("saraxschawen","http://kandillihamit.pserver.ru/saraxschawen/index.php"),
  array("jackiedainnerr","http://kandillihamit.pserver.ru/jackiedainnerr/index.php"),
  array("angelyydiarr","http://kandillihamit.pserver.ru/angelyydiarr/index.php"),
  array("allicesharrpee","http://kandillihamit.pserver.ru/allicesharrpee/index.php"),
  array("belindabarnersss","http://kandillihamit.pserver.ru/belindabarnersss/index.php"),
  array("liianahayekk56","http://kandillihamit.pserver.ru/liianahayekk56/index.php"),
  array("garxciadanentt","http://kandillihamit.pserver.ru/garxciadanentt/index.php"),
  array("ksebaillegu","http://kandillihamit.pserver.ru/ksebaillegu/index.php"),
  array("kaylaperrinn","http://kandillihamit.pserver.ru/kaylaperrinn/index.php"),
  array("jamieesobbratto","http://kandillihamit.pserver.ru/jamieesobbratto/index.php"),
  array("elizabethhswonnn","http://kandillihamit.pserver.ru/elizabethhswonnn/index.php"),
  array("caronyardley21","http://kandillihamit.pserver.ru/caronyardley21/index.php"),
  array("jeannsaffreyy","http://kandillihamit.pserver.ru/jeannsaffreyy/index.php"),
  array("williammcathss19","http://kandillihamit.pserver.ru/williammcathss19/index.php"),
  array("MegHANxsMarKle56","http://kandillihamit.pserver.ru/MegHANxsMarKle56/index.php"),
  array("LizyAtKins39","http://kandillihamit.pserver.ru/LizyAtKins39/index.php"),
  array("ChanTelle21Shaw","http://kandillihamit.pserver.ru/ChanTelle21Shaw/index.php"),
  array("CaraVolterr98","http://kandillihamit.pserver.ru/CaraVolterr98/index.php"),
  array("ArianaGrandesss87","http://kandillihamit.pserver.ru/ArianaGrandesss87/index.php"),
  array("CarolynNeggersS35","http://kandillihamit.pserver.ru/CarolynNeggersS35/index.php"),
  array("EliZaBethOldFiElds21","http://kandillihamit.pserver.ru/EliZaBethOldFiElds21/index.php"),
  array("julesbennethhh56","http://kandillihamit.pserver.ru/julesbennethhh56/index.php"),
  array("saragantess45","http://kandillihamit.pserver.ru/saragantess45/index.php"),
  array("ricardo8596","http://kandillihamit.pserver.ru/ricardo8596/index.php"),
  array("ricardo8596","http://kandillihamit.pserver.ru/ricardo8596/index.php"),
  array("suzanne27","http://kandillihamit.pserver.ru/suzanne27/index.php"),
  array("suzanne27","http://kandillihamit.pserver.ru/suzanne27/index.php"),
  array("suzanne27","http://kandillihamit.pserver.ru/suzanne27/index.php"),
  array("xansolo","http://kandillihamit.pserver.ru/xansolo/index.php"),
  array("jacmieewegerr","http://kandillihamit.pserver.ru/jacmieewegerr/index.php"),
  array("rohanbrabdibg","http://kandillihamit.pserver.ru/rohanbrabdibg/index.php"),
  array("carolinewinnerrr36","http://kandillihamit.pserver.ru/carolinewinnerrr36/index.php"),
  array("alaramorgennn18","http://kandillihamit.pserver.ru/alaramorgennn18/index.php"),
  array("rairaravensis","http://kandillihamit.pserver.ru/rairaravensis/index.php"),
  array("lainagustavv","http://kandillihamit.pserver.ru/lainagustavv/index.php"),
  array("rickyyjoradd","http://kandillihamit.pserver.ru/rickyyjoradd/index.php"),
  array("alexsis85more","http://kandillihamit.pserver.ru/alexsis85more/index.php"),
  array("alexsissreyna","http://kandillihamit.pserver.ru/alexsissreyna/index.php"),
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
    sleep(120);
}
?>
