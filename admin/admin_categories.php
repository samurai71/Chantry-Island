<?php 
  $pageTitle = "All Categories";
  
  require_once('phpscripts/init.php');
  
  confirm_logged_in();

  include "includes/admin_header.php";
  include "includes/admin_topnav.php";
  include "includes/admin_sidenav.php";

  $tbl = "tbl_categories";

  $getCategories = getAll($tbl);

 ?>
 
  <section>
    <div class="row">
      <div class="medium -10 large-10 columns">
        <h1>All Categories</h1>
         
    <table role="grid">
      <thead>
        <tr>
          <th>Category</th>
          <!-- <th>View</th>
          <th>Edit</th> -->
          <!-- <th>User Role</th> -->
          <!-- <th>Edit</th> -->
        </tr>
      </thead>
      <tbody>
          <?php
              if(!is_string($getCategories)) {
                while($row = mysqli_fetch_array($getCategories)) {
                  echo "<tr>";
                  echo "<td>{$row['cat_name']}</td>";
                  // echo "<td>{$row['user_fname']} {$row['user_lname']}</td>";
                  // echo "<td>{$row['user_email']}</td>";
                  // echo "<td>{$row['user_role']}</td>";
                  // echo "<td><a href='#'>View</a></td>";
                  // echo "<td><a href='#'>Edit</a></td>";
                  echo "</tr>";
               }
              }else{
               echo "<p>{$getPages}</p>";
              }
            
            
           ?>
      </tbody>
    </table>
      </div>
    </div>
    
    </section>
    
    <?php 
    include "includes/admin_footer.php";
     ?>
