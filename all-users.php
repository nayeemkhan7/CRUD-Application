<?php
  include "db.php" ;
  include "header.php" ;
  include "functions.php" ;
?>


<!-- ========== PHP Code Starts ========== -->
<?php

  $query = "SELECT * FROM user " ;
  $selectAllUser = mysqli_query($connect , $query);

?>
<!-- ========== PHP Code Ends ========== -->




<!-- ========== TABLE Section Starts ========== -->
<section class="">
  <div class="container all-users">
    <div class="row">
      <h2 class="user-x">All Users Information ::</h2>

      <!-- Table Start  -->
      <!-- TABLE HEAD -->

      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <!-- PHP Code -->
          <?php

            while($row = mysqli_fetch_assoc($selectAllUser)){

              $userId   = $row['id'] ;
              $username = $row['username'] ;
              $email    = $row['email'] ;
              $mobile   = $row['mobile'] ;
              $address  = $row['address'] ;


          ?>      

          <tr>
            <td scope="row"><?php echo $userId ; ?></td>
            <td><?php echo $username ; ?></td>
            <td><?php echo $email ; ?></td>
            <td><?php echo $mobile ; ?></td>
            <td><?php echo $address ; ?></td>
            <td>
              <div class="btn btn-group">
                <!-- Update Button -->
                <a href="update-user.php?update=<?php echo $userId;?> " class="btn btn-info btn-action">Update</a>
                <!-- Delete Button -->
                <a href="all-users.php?delete=<?php echo $userId ;?>" class="btn btn-danger btn-action">Delete</a>
              </div>
            </td>
          </tr>
              
          <?php

            }  // While Loop Ends ::

          ?>


        </tbody>
      </table>

      
    </div>
  </div>
</section>
<!-- ========== TABLE Section Ends ========== -->


<!-- ========== PHP Code Starts ========== -->

<?php
  deleteUser() ;
?>

<!-- ========== PHP Code Ends ========== -->



<?php include "footer.php" ; ?>