<?php 
  if( $_SESSION['adminname']==null && $_SESSION['adminid']==null)
  {
  header("Location:admin-login.php");
  }

?>