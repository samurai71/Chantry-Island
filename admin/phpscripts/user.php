<?php

	function createUser($fname, $lname, $username,$password, $email, $level) {
		require_once("connect.php");
		$ip = 0;
		//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		//$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$email}','{$ip}')";
		//echo $userstring;
		$userstring = "INSERT INTO tbl_user(user_fname, user_lname, user_name, user_pass, user_email, user_role, user_ip)";
		$userstring .= " VALUES('{$fname}','{$lname}','{$username}','{$password}','{$email}','{$level}','{$ip}')";
		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if ($userquery) {
			redirect_to("admin_view_all_users.php");
		}else {
			$message = "Something went wrong!";
			return $message;
		}





		mysqli_close($link);
	}


	// if(isset($_GET['source'])){

	// $source = $_GET['source'];

	// } else {

	// $source = '';

	// }

	// switch($source) {
	    
	//     case 'add_user';
	    
	//      include "phpscripts/admin_createuser.php";
	    
	//     break; 
	    
	    
	//     case 'edit_user';
	    
	//     include "phpscripts/edit_user.php";
	//     break;
	    
	//     default:
	    
	//     include "phpscripts/admin_all_users.php";
	    
	//     break;
	    
	    
	    
	    
	// }


?>

