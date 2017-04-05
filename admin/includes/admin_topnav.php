<div class="fixed">
	<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="../index.php" target="_blank">Chantry Island</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <!-- <li class="active"><a href="#">Right Button Active</a></li> -->
      <li class="has-dropdown">
        <a href="#">Howdy <?php echo $_SESSION['users_name']; ?></a>
        <ul class="dropdown">
          <li><a href="#">Edit My Profile</a></li>
          <li><a href="phpscripts/caller.php?caller_id=logout">Log Out</a></li>
        </ul>
      </li>
    </ul>

    
  </section>
</nav>
</div>