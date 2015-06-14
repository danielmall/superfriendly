<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

$basepath = '';
//$basepath = '/__prototypes/001-content-outline';

function createNavItem($url, $label){
	if($label == "Work"){ // ugh, hacky
		if($_SERVER['REQUEST_URI'] == $url) {
	        echo '<li class="current"><a href="' . $url . '">' . $label . '</a>';
	    }else{
	        echo '<li><a href="' . $url . '">' . $label . '</a>';
	    }		
	}else{

		if($_SERVER['REQUEST_URI'] == $url) {
	        echo '<li class="current"><a href="' . $url . '">' . $label . '</a></li>';
	    }else{
	        echo '<li><a href="' . $url . '">' . $label . '</a></li>';
	    }

	}
}

?>