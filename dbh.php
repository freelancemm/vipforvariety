<?php
  $conn = mysqli_connect("localhost","root","","vipuser");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
?>
