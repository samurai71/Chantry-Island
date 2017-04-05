<?php 
  $pageTitle = "All Pages";
  
  require_once('phpscripts/init.php');
  
  confirm_logged_in();

  include "includes/admin_header.php";
  include "includes/admin_topnav.php";
  include "includes/admin_sidenav.php";

  $tbl = "tbl_pages";

  $getPages = getAll($tbl);

 ?>
 
  <section>
    <div class="row">
      <div class="medium -10 large-10 columns">
        <h1>All Pages</h1>
         
    <table role="grid" class="userTable">
      <thead>
        <tr>
          <th>Title</th>
          <th>View</th>
          <th>Edit</th>
          <!-- <th>User Role</th> -->
          <!-- <th>Edit</th> -->
        </tr>
      </thead>
      <tbody>
          <?php
              if(!is_string($getPages)) {
                while($row = mysqli_fetch_array($getPages)) {
                  echo "<tr>";
                  echo "<td>{$row['page_title']}</td>";
                  // echo "<td>{$row['user_fname']} {$row['user_lname']}</td>";
                  // echo "<td>{$row['user_email']}</td>";
                  // echo "<td>{$row['user_role']}</td>";
                  echo "<td><a href='#' target='_blank'>View</a></td>";
                  echo "<td><a href='#'>Edit</a></td>";
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