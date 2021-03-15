<?php include('server.php');?>
<?php    
    
    $userid=$_SESSION['userid'];
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    
    
    
    $sql= "SELECT * FROM vipusers WHERE email='$email' AND userid != $userid";
    
    $result = mysqli_query($conn, $sql);
    
    // ensure that form fields are filled properly
    
    if (mysqli_num_rows($result) > 0) {

        $notification = array(
            'message' => 'Sorry... email is already registered please choose another',
            'alert-type' => 'error'
        );
    
   
    
    }
    else{
    
    
    $sql="UPDATE vipusers SET username='$username',email='$email' WHERE userid=$userid";
    mysqli_query($conn,$sql);

    $notification = array(
        'message' => 'Successfully updated',
        'alert-type' => 'success'
    );
    
}
header('Content-Type: application/json');
echo json_encode($notification);



    ?>