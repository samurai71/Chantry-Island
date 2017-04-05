<?php 
  $pageTitle = "All Users";
  
  require_once('phpscripts/init.php');
  
  confirm_logged_in();

  include "includes/admin_header.php";
  include "includes/admin_topnav.php";
  include "includes/admin_sidenav.php";

  $tbl = "tbl_user";

  $getUsers = getAll($tbl);

 ?>
 
  <section>
    <div class="row">
      <div class="medium -10 large-10 columns">
        <h1>All Users</h1>
         
    <table role="grid" class="userTable">
      <thead>
        <tr>
          <th>Username</th>
          <th>Name</th>
          <th>Email</th>
          <th>User Role</th>
          <!-- <th>Edit</th> -->
        </tr>
      </thead>
      <tbody>
          <?php
              if(!is_string($getUsers)) {
                while($row = mysqli_fetch_array($getUsers)) {
                  echo "<tr>";
                  echo "<td>{$row['user_name']}</td>";
                  echo "<td>{$row['user_fname']} {$row['user_lname']}</td>";
                  echo "<td>{$row['user_email']}</td>";
                  echo "<td>{$row['user_role']}</td>";
                  echo "<td><a href='#'>Edit User</a></td>";
                  echo "<td><a href='#'>Delete User</a></td>";
                  echo "</tr>";
               }
              }else{
               echo "<p>{$getUsers}</p>";
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