<?php
  include "db.php" ;
  include "header.php" ;
  include "functions.php" ;
?>


<!-- ========== PHP Code-1 Starts ========== -->
<?php

if (isset($_GET['update'])) {

  // SQL Query for Select user from Database ::
  $userId = $_GET['update'] ;

  $query = "SELECT * FROM user WHERE id = $userId" ;
  $updateUser = mysqli_query($connect, $query) ;

  while($row = mysqli_fetch_assoc($updateUser)) {

    $userId   = $row['id'] ;
    $username = $row['username'] ;
    $password = $row['password'] ;
    $email    = $row['email'] ;
    $mobile   = $row['mobile'] ;
    $address  = $row['address'] ;

?>
<!-- ========== PHP Code-1 Ends ========== -->


<!-- ========== FORM Update Section Starts ========== -->
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="register-box">

          <h1>Update User Information</h1>

          <form class="" action="" method="POST">

            <!-- Username Field -->
            <div class="form-group">
              <!-- <label for="">Username</label> -->
              <input type="text" name="username" class="form-control" autocomplete="off" required placeholder="Username" value="<?php echo $username ;?>">
            </div>

            <!-- Password Field -->
            <div class="form-group">
              <!-- <label for="">Password</label> -->
              <input type="password" name="password" class="form-control" autocomplete="off" required placeholder="Password" value="<?php echo $password ;?>">
            </div>

            <!-- Email Field -->
            <div class="form-group">
              <!-- <label for="">Email</label> -->
              <input type="email" name="email" class="form-control" autocomplete="off" required placeholder="Email" value="<?php echo $email ;?>">
            </div>

            <!-- Mobile Field -->
            <div class="form-group">
              <!-- <label for="">Mobile</label> -->
              <input type="text" name="mobile" class="form-control" autocomplete="off" required placeholder="Mobile No." value="<?php echo $mobile ;?>">
            </div>

            <!-- Address Field -->
            <div class="form-group">
              <!-- <label for="">Address</label> -->
              <input type="text" name="address" class="form-control" autocomplete="off" required placeholder="Address" value="<?php echo $address ;?>">
            </div>


            <!-- Update Button Field -->
            <div class="form-group">
              <button type="submit" name="update-btn" class="btn btn-info btn-x">Update Information</button>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>
<!-- ========== FORM Section Ends ========== -->



<!-- ========== PHP Code-2 Starts From Here ========== -->
<?php

  }      // While Loop Assoc Ends ::

}     // ******* If Statement ISSET Ends ******* ::

?>
<!-- ========== PHP Code-2 Ends Here ========== -->



<!-- ========== PHP Code-3 Starts From Here ========== -->
<?php
  updateUser();
?>
<!-- ========== PHP Code-3 Ends Here ========== -->



<?php include "footer.php" ; ?>

