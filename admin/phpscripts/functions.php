<?php
	ob_start();
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function confirmQuery($result) {
	    
	    global $link;

	    if(!$result ) {
	          
	          die("QUERY FAILED ." . mysqli_error($link));
	   
	          
	      }
	    

	}

	// function escape($string) {

	// global $link;

	// return mysqli_real_escape_string($link, trim($string));


	// }
	
?>