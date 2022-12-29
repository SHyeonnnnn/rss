<?php
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //인증서검사안하겠다는거
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //결과값받아오는거
    curl_setopt($ch, CURLOPT_HEADER, 0); //안받
    curl_setopt($ch, CURLOPT_URL, "https://www.chosun.com/arc/outboundfeeds/rss/category/sports/?outputType=xml");
    $url_source=curl_exec($ch); //변수
    curl_close($ch); //닫아주는거
    echo $url_source; //뿌려주는거
?>