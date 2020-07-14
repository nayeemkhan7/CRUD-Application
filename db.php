
<!-- Database Connection Establishment -->

<?php

  $connect =  mysqli_connect('localhost','root','','php_practice0');

  if ($connect){
  	// echo "Database Connection Successful !" ;
  }
  else{
  	die("Database Connection Error !");
  }

?>
