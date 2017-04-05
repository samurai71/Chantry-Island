<div class="small-12 medium-12 large-1 columns" id="sideNav">
  <h2 class="hide">Side Nav</h2>
  <ul class="side-nav">
    <li><a href="admin_index.php">Dashboard</a></li>
    <li><a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Categories</a>
  	   <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="admin_categories.php">View Categories</a></li>
        <!-- <li><a href="#">Add New</a></li> -->
        <!-- <li><a href="#">Yet another</a></li> -->
      </ul>
    </li>
      <li><a data-dropdown="drop2" aria-controls="drop2" aria-expanded="false">Posts</a>
         <ul id="drop2" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
          <li><a href="#">View Posts</a></li>
          <li><a href="#">Add New</a></li>
          <!-- <li><a href="#">Yet another</a></li> -->
        </ul>
      </li>
    <li><a data-dropdown="drop3" aria-controls="drop1" aria-expanded="false">Pages</a>
	     <ul id="drop3" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="admin_view_all_pages.php">All Pages</a></li>
        <li><a href="#">Edit Page</a></li>
        <!-- <li><a href="#">Yet another</a></li> -->
      </ul> 
    </li>
  <!-- <li><a data-dropdown="drop4" aria-controls="drop1" aria-expanded="false">Gallery</a>
	<ul id="drop4" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a href="#">Edit Gallery</a></li>
  <li><a href="includes/add_gallery.php">Add to Gallery</a></li>
</ul>
  </li> -->
    <li><a data-dropdown="drop4" aria-controls="drop1" aria-expanded="false">Users</a>
      <ul id="drop4" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="admin_all_users.php">All Users</a></li>
        <li><a href="admin_createuser.php">Add New</a></li>
        <li><a href="#">Your Profile</a></li>
      </ul>
    </li>
  </ul>
</div>