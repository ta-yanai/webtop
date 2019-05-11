<?php
    $xml = simplexml_load_file('http://weathernews.jp/quake/xml/quake_list_urgent.xml');
    var_dump( $xml ); //構造を分かりやすく出力
?>
