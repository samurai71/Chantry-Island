<?php
	function createUser($fname, $lname, $username, $email, $password, $level) {
		require_once("connect.php");
		$ip = 0;
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$email}','{$hashed_password}','{$level}',{$ip})";
		//echo $userstring;
		$userquery = mysqli_query($link, $userstring);
		if ($userquery) {
			redirect_to("admin_index.php");
		}else {
			$message = "Something went wrong!";
			return $message;
		}





		mysqli_close($link);
	}


?>