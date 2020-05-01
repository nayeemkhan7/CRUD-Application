<?php include "db.php" ; ?>
<?php include "header.php" ; ?>


<!-- ========== PHP Code Starts ========== -->
<?php

$registerMsg = "";

if (isset($_POST['register-btn'])) {

  $username  = $_POST['username'] ;
  $password  = $_POST['password']  ;
  $email     = $_POST['email'] ;
  $mobile    = $_POST['mobile'] ;
  $address   = $_POST['address'] ;

  // Encryption of the Password ::
  $encryptedPass = SHA1($password) ;


  // SQL Query ::
  $query = "INSERT INTO user (username, password, email, mobile, address) VALUES ('$username','$encryptedPass','$email','$mobile','$address') " ;

  
  $addNewUser = mysqli_query($connect ,$query);


  if (!$addNewUser) {
    die("Query Error ".mysqli_error($connect)) ;
  }
  else{
    $registerMsg = '<div class="alert alert-success">Congratulations ' .$username . ' ! You are now a member of this platform.</div>' ;
  }

}

?>
<!-- ========== PHP Code Ends ========== -->



<!-- ========== FORM Section Starts ========== -->
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="register-box">

          <h1>User Registration</h1>

          <form class="" action="" method="POST">

            <!-- Username Field -->
            <div class="form-group">
              <!-- <label for="">Username</label> -->
              <input type="text" name="username" class="form-control" autocomplete="off" required placeholder="Username" value="">
            </div>

            <!-- Password Field -->
            <div class="form-group">
              <!-- <label for="">Password</label> -->
              <input type="password" name="password" class="form-control" autocomplete="off" required placeholder="Password" value="">
            </div>

            <!-- Email Field -->
            <div class="form-group">
              <!-- <label for="">Email</label> -->
              <input type="email" name="email" class="form-control" autocomplete="off" required placeholder="Email" value="">
            </div>

            <!-- Mobile Field -->
            <div class="form-group">
              <!-- <label for="">Mobile</label> -->
              <input type="text" name="mobile" class="form-control" autocomplete="off" required placeholder="Mobile No." value="">
            </div>

            <!-- Address Field -->
            <div class="form-group">
              <!-- <label for="">Address</label> -->
              <input type="text" name="address" class="form-control" autocomplete="off" required placeholder="Address" value="">
            </div>

            <!-- Register Button Field -->
            <div class="form-group">
              <button type="submit" name="register-btn" class="btn btn-info btn-x">Register</button>
            </div>

          </form>

          <?php
            echo $registerMsg ;
          ?>

        </div>

      </div>
    </div>
  </div>
</section>
<!-- ========== FORM Section Ends ========== -->


<?php include "footer.php" ; ?>