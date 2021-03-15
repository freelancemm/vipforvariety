<?php include ('server.php'); ?>

<?php 
  if( $_SESSION['username']==null && $_SESSION['userid']==null)
  {
  header("Location: login.php?mv=$encptid");
  }

?>