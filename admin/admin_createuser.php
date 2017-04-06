<?php
	$pageTitle = "Add User";
	require_once("phpscripts/init.php");
	include "includes/admin_header.php";
	include "includes/admin_topnav.php";
	include "includes/admin_sidenav.php";
	confirm_logged_in();
	
	if(isset($_POST['submit'])) {
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$level = $_POST['lvllist'];
		if(empty($username)) {
			$message ="Please enter in a username.";

		}else {
			//echo "all good...";
			$results = createUser($fname, $lname, $username, $password, $email, $level);
			$message = $results;
			/*passwordEmail($email, $password, $username, $direct);
					    echo "Confirmation Email Sent";
			$direct = "admin_login.php";*/
		}

	}


?>

	<!-- <section id="wrapper"> -->
	<div class="row panel">
	<h1>Create User</h1>
	<?php if(!empty($message)){echo $message;}?>
	<form action="admin_createuser.php" method="post">
		<div class="small-10 medium-6 large-6 columns">
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;}?>">
		</div>
		<div class="small-10 medium-6 large-6 columns">
		<label>Last Name:</label>
		<input type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;}?>">
		</div>
		<div class="small-10 medium-6 large-6 columns">
		<label>Username:</label>
		<input type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>">
		</div>
		<div class="small-10 medium-6 large-6 columns">
		<label>Email Addres</label>
		<input type="text" name="email" value="<?php if(!empty($email)){echo $email;}?>"></div>
		<div class="small-10 medium-6 large-6 columns">
		<label>Password:</label>
		<input type="password" name="password" value="<?php if(!empty($password)){echo $password;}?>"></div>
		<div class="small-10 medium-6 large-6 columns">
		<label>User Role:</label>
		<select name="lvllist">
			<option value="editor">Please select a user role...</option>
			<option value="admin">admin</option>
			<option value="editor">editor</option>
			<!-- <input type="hidden" name="lvllist" value="2"> -->
		</select></div><br><br>
		<div class="small-10 medium-12 large-12 columns">
		<input type="submit" name="submit" value="Create User">
		</div>
	</form>
	
<?php 
	include "includes/admin_footer.php";
 ?>