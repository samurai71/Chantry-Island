<?php 
  $pageTitle = "Dashboard";
	
	require_once('phpscripts/init.php');
  include "includes/admin_header.php";
  include "includes/admin_topnav.php";
  include "includes/admin_sidenav.php";
	//confirm_logged_in();


 ?>

	<section>
	<div class="row panel">
	<div class="small-10 medium-10 large-12 columns">
	<h1>Welcome <?php echo $_SESSION['users_name']; ?> to the admin panel</h1>
	<!-- <a href="phpscripts/caller.php?caller_id=logout">Sign Out</a> -->

	</div>
	</div>
	</section>


	<?php 
  include "includes/admin_footer.php";
   ?>