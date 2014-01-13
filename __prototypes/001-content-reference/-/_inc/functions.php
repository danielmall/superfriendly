<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

$basepath = '/__prototypes/001-content-reference';
//$basepath = '/__prototypes/001-content-outline';

function createNavItem($url, $label){
    if(strstr($_SERVER['REQUEST_URI'], $url)) {
        echo '<mark>' . $label . '</mark>';
    }else{
        echo '<a href="' . $url . '">' . $label . '</a>';
    }
}

?>