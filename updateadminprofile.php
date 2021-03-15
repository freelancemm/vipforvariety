<?php include('server.php');?>
<?php    
    
    $userid=$_SESSION['adminid'];
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    
    
    $sql= "SELECT * FROM admins WHERE email='$email' AND id != $userid";
    
    $result = mysqli_query($conn, $sql);
    
    // ensure that form fields are filled properly
    
    if (mysqli_num_rows($result) > 0) {

        $notification = array(
            'message' => 'Sorry... email is already registered please choose another',
            'alert-type' => 'error'
        );
    
   
    
    }
    else{
    
    if (count($errors)==0){
       // $password = md5($password); //encrypt password before storing database(security)
    $sql="UPDATE admins SET username='$username',email='$email' WHERE id=$userid";
    mysqli_query($conn,$sql);

    $notification = array(
        'message' => 'Successfully updated',
        'alert-type' => 'success'
    );
    }
}
header('Content-Type: application/json');
echo json_encode($notification);



    ?>