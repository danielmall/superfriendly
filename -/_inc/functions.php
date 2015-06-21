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
	        echo '<li class="' . $className . ' current"><mark class="thumb">' . $contents . '</mark>';
	    }else{
	        echo '<li class="' . $className . '"><a class="thumb" href="' . $url . '">' . $contents . '</a>';
	    }		
	}else{

		if($_SERVER['REQUEST_URI'] == $url) {
	        echo '<li class="' . $className . ' current"><mark class="thumb">' . $contents . '</mark></li>';
	    }else{
	        echo '<li class="' . $className . '"><a class="thumb" href="' . $url . '">' . $contents . '</a></li>';
	    }

	}
}

?>