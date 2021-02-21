<?php
header('Access-Control-Allow-Origin:*');
$url="https://wiki.52poke.com/api.php?action=query&format=json&prop=pageprops&generator=prefixsearch&ppprop=displaytitle&redirects=&gpssearch=".$_GET['gpssearch']."&gpsnamespace=0&gpslimit=15";
$html = file_get_contents($url);
echo $html;
?>