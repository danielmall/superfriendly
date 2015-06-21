<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

$basepath = '';
//$basepath = '/__prototypes/001-content-outline';

function createNavItem($url, $className, $contents){
	if($contents == "Work"){ // ugh, hacky
		if($_SERVER['REQUEST_URI'] == $url) {
	        echo '<li class="' . $className . ' current"><a href="' . $url . '">' . $contents . '</a>';
	    }else{
	        echo '<li class="' . $className . '"><a href="' . $url . '">' . $contents . '</a>';
	    }		
	}else{

		if($_SERVER['REQUEST_URI'] == $url) {
	        echo '<li class="' . $className . ' current"><a href="' . $url . '">' . $contents . '</a></li>';
	    }else{
	        echo '<li class="' . $className . '"><a href="' . $url . '">' . $contents . '</a></li>';
	    }

	}
}

?>