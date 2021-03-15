<?php
session_start();
date_default_timezone_set('Asia/Yangon');
$name="";
$username="";
$phonenumber="";
$email="";
$address="";
$errors=array();

//connect to the database
$db=mysqli_connect("localhost","root","","vipuser");
$conn=mysqli_connect("localhost","root","","vipuser") or die($conn);
if(isset($_POST ['register'])){

$username=mysqli_real_escape_string($conn,$_POST['username']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$accexpiredate=mysqli_real_escape_string($conn,$_POST['accexpiredate']);
$lastupdateddate=date("Y/m/d");


$sql= "SELECT * FROM vipusers WHERE email='$email'";

$result = mysqli_query($conn, $sql);

// ensure that form fields are filled properly

if (mysqli_num_rows($result) > 0) {

array_push($errors, "Sorry... email is already registered please choose another" );

}



// if there are no errors ,save user to database

if (count($errors)==0){
   // $password = md5($password); //encrypt password before storing database(security)
$sql="INSERT INTO vipusers(username,email,password,accexpiredate,lastupdateddate) VALUES ('$username','$email','$password','$accexpiredate','$lastupdateddate')";



mysqli_query($conn,$sql);
 header('location:manage-user.php');//redirecet to the profile page
}
}


if(isset($_POST ['update-user'])){

    $userid=$_POST['userid'];
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $accexpiredate=mysqli_real_escape_string($conn,$_POST['accexpiredate']);
    $lastupdateddate=date("Y-m-d");
    
    
    $sql= "SELECT * FROM vipusers WHERE email='$email' AND userid != $userid";
    
    $result = mysqli_query($conn, $sql);
    
    // ensure that form fields are filled properly
    
    if (mysqli_num_rows($result) > 0) {
    
    array_push($errors, "Sorry... email is already registered please choose another" );
    
    }
    
    
    
    // if there are no errors ,save user to database
    
    if (count($errors)==0){
       // $password = md5($password); //encrypt password before storing database(security)
    $sql="UPDATE vipusers SET username='$username',email='$email',password='$password',accexpiredate='$accexpiredate',lastupdateddate='$lastupdateddate' WHERE userid=$userid";
  
    
    mysqli_query($conn,$sql);
     header('location:manage-user.php');//redirecet to the profile page
    }
    }

    

if(isset($_POST['add-movie']))
{

    $imagetarget="uploadimages/".basename($_FILES ['image'] ['name']);
    $movietarget="uploadmovies/".basename($_FILES['movie']['name']);

    $moviname=mysqli_real_escape_string($conn,$_POST['moviename']);
    $genre=mysqli_real_escape_string($conn,$_POST['genre']);
    $releaseyear=mysqli_real_escape_string($conn,$_POST['releaseyear']);
    $runtime=mysqli_real_escape_string($conn,$_POST['runtime']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $image=$_FILES ['image'] ['name']; 
    $movie=$_FILES ['movie'] ['name'];

    $lastupdateddate=date("Y/m/d");

   
    
    $sql="INSERT into uploadedmovies(moviename,genre,releaseyear,runtime,description,imagepath,moviepath,image,movie,lastupdateddate) VALUES('$moviname','$genre','$releaseyear','$runtime','$description','$imagetarget','$movietarget','$image','$movie','$lastupdateddate')";

    $result = mysqli_query($conn, $sql);

    move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget);
    move_uploaded_file($_FILES['movie']['tmp_name'], $movietarget);
    
    header('location:manage-movie.php');//redirecet to the profile page


}

if (isset($_GET['delmovie'])) {

    $encptid=$_GET['delmovie'];
    $salt="vmsecret";
    $id_raw=base64_decode($encptid);
    $id=preg_replace(sprintf('/%s/', $salt), '', $id_raw);

	


	mysqli_query($conn,"DELETE FROM uploadedmovies WHERE movieid=$id");


	header('location: manage-movie.php');
}


if (isset($_GET['deluser'])) {

    $id=$_GET['deluser'];
    // $salt="vmsecret";
    // $id_raw=base64_decode($encptid);
    // $id=preg_replace(sprintf('/%s/', $salt), '', $id_raw);

	


	mysqli_query($conn,"DELETE FROM vipusers WHERE userid=$id");


	header('location: manage-user.php');
}

if(isset($_POST['userlogout'])){
    mysqli_close($conn);
    unset($_SESSION['username']);
    unset($_SESSION['userid']);
    $movieid=$_SESSION['movieid'];
    header( "Location:login.php?mv={$movieid}" );
   

}

if(isset($_POST['adminlogout'])){
    mysqli_close($conn);
    unset($_SESSION['adminname']);
    unset($_SESSION['adminid']);
    header( "Location:admin-login.php" );
   

}

?>