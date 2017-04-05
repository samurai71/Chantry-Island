<?php 
	
	require_once('phpscripts/init.php');
	//confirm_logged_in();
	//include('welcome.php');


 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to your Admin Panel</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/foundation.min.css" />
	<link rel="stylesheet" href="css/app.css" />
	<link rel="stylesheet" href="js/vendor/modernizr.js" />
	
</head>
<body>
	<section>
	<div class="row panel">
	<h1><<!-- ?php echo welcome(); ?>  --><span class="username"><?php echo $_SESSION['users_name']; ?></span></h1>
	<p>I hope you are well since your last successful login: <?php echo $_SESSION['users_name']; ?>  at</p>
	<p>The force is strong in you <span class="username"><?php echo $_SESSION['users_name']; ?></span></p>
	<a href="phpscripts/caller.php?caller_id=logout">Log out you must!</a>
	</div>
	</section>

	<script src="js/vendor/jquery.js"></script>
	   <script src="js/foundation.min.js"></script>
	   <script src="js/main.js"></script>
	   <script>
	     $(document).foundation();
	   </script>
</body>
</html>