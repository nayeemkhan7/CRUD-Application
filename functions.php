
<?php 
	
	// Register a new user to this platform ::
	
	// $registerMsg = "";
	function registerUser() {

		global $connect; 

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
		    header("Location: all-users.php");
		    // $registerMsg = '<div class="alert alert-success">Congratulations ' .$username . ' ! You are now a member of this platform.</div>' ;
		  }
		}
	}



	// SQL Query for Update information of a user ::
	function updateUser(){

		global $connect ;
		if (isset($_POST['update-btn'])) {
			$userId   = $_GET['update'] ;

		    $username = $_POST['username'] ;
		    $password = $_POST['password'] ;
		    $email    = $_POST['email'] ;
		    $mobile   = $_POST['mobile'] ;
		    $address  = $_POST['address'] ;

		    // For solving SQL Injection Check ::
		    $username  = mysqli_real_escape_string($connect, $username);
		    $password  = mysqli_real_escape_string($connect, $password);
		    $email     = mysqli_real_escape_string($connect, $email);
		    $mobile    = mysqli_real_escape_string($connect, $mobile);
		    $address   = mysqli_real_escape_string($connect, $address);

		    // Encrtpted Password ::
		    $encryptedPass = SHA1($password);

		    // SQL Query for Update ::
		    $query = "UPDATE user SET username = '$username' , password = '$encryptedPass' , email = '$email' , mobile = '$mobile' , address = '$address' WHERE id = '$userId' " ;
		    $updateQuery = mysqli_query($connect , $query);

		    if (!$updateQuery){
		      die("Query Failed ! ".mysqli_error($connect)) ;
		    }
		    else{
		      header("Location: all-users.php") ;
		    }
	  	}
	}



	// Query for Delete an User from the database ::
	function deleteUser(){

		global $connect ;
		if (isset($_GET['delete'])) {
		  $userId   = $_GET['delete'] ;

	      $query = "DELETE FROM user WHERE id = $userId " ;
	      $deleteQuery = mysqli_query($connect, $query);

	      header("Location: all-users.php");

	      if (!$deleteQuery){
	        die("Query Failed ! ". mysqli_error($connect)) ;
	      }
	      else{
	        // echo "Delete Successful !" ; 
	      }
	    }											
	}





?>