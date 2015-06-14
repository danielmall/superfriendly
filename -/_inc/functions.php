<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

$basepath = '';
//$basepath = '/__prototypes/001-content-outline';

function createNavItem($url, $label){
    //if(strstr($_SERVER['REQUEST_URI'], $url)) {
	if($_SERVER['REQUEST_URI'] == $url) {
        //echo '<mark>' . $label . '</mark>';
        echo '<li class="current"><a href="' . $url . '">' . $label . '</a></li>';
    }else{
        echo '<li><a href="' . $url . '">' . $label . '</a></li>';
        //echo '<a href="' . $url . '">a</a>';
    }
}

?>