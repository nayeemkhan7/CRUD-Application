<?php
  include "db.php" ;
  include "header.php" ;
  include "functions.php" ;
?>



<!-- PHP Code Starts -->
<?php
  registerUser() ;
?>
<!-- PHP Code Ends -->



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

          <!-- PHP Code Starts -->
          <?php
            // echo $registerMsg ;
          ?>
          <!-- PHP Code Ends -->

        </div>

      </div>
    </div>
  </div>
</section>
<!-- ========== FORM Section Ends ========== -->


<?php include "footer.php" ; ?>