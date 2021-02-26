<?php

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

    if (isset($_POST['user-login'])) {

		$username=mysqli_real_escape_string($conn,$_POST['username']);
		
		$password=mysqli_real_escape_string($conn,$_POST['password']);

			//$password=md5($password);
			$query="SELECT * FROM vipusers WHERE email='$username' AND password='$password'";
			$result=mysqli_query($db,$query);
            $res=mysqli_fetch_array($result);
            $expiredate=$res["accexpiredate"];
            $today=date("Y-m-d");

			if(mysqli_num_rows($result) ==1){

                if($expiredate<=$today)
                {
                    array_push($errors,"Your Account is expired");


                }
                else
                {

         
				$_SESSION['username'] =$username;
                header('location:user-dashboard.php');//redirecet to the profile page
                }

				
			}else{

                echo "incorrect username or password";

				//array_push($errors,"The username or password is wrong");

			}

			
		}


?>