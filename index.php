<?php include "db.php" ; ?>
<?php include "header.php" ; ?>


<!-- ========== PHP Code Starts ========== -->
<?php

$formSend = "";

if (isset($_POST['login-btn'])) {

  $username    = $_POST['username'] ;
  $password   = $_POST['password']  ;


  $formSend = '<div class="alert alert-success">Hey ' .$username . ' , Welcome to Dashboard !</div>' ;

}

?>
<!-- ========== PHP Code Ends ========== -->




<!-- ========== FORM Section Starts ========== -->
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-box">

          <h1>Sign In Form</h1>

          <form class="" action="" method="POST">

            <!-- Username Field -->
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control" autocomplete="off" required value="">
            </div>

            <!-- Password Field -->
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control" autocomplete="off" required value="">
            </div>

            <!-- Button Field -->
            <div class="form-group">
              <button type="submit" name="login-btn" class="btn btn-info btn-x">Login</button>
            </div>


          </form>

          <?php
            echo $formSend ;
          ?>

        </div>


      </div>
    </div>
  </div>
</section>
<!-- ========== FORM Section Ends ========== -->


<?php include "footer.php" ; ?>




