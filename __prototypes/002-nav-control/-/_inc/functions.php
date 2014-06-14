<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

$basepath = '/__prototypes/002-nav-control';
//$basepath = '/__prototypes/001-content-outline';

function createNavItem($url, $label){
    if(strstr($_SERVER['REQUEST_URI'], $url)) {
        //echo '<mark>' . $label . '</mark>';
        echo '<a class="current" href="' . $url . '">' . $label . '</a>';
    }else{
        echo '<a href="' . $url . '">' . $label . '</a>';
    }
}

?>