<?php include('server.php');?>
<?php    
    
    $userid=$_SESSION['adminid'];
    $currentpassword=mysqli_real_escape_string($conn,$_POST['currentpassword']);
    $newpassword1=mysqli_real_escape_string($conn,$_POST['newpassword1']);
    $newpassword2=mysqli_real_escape_string($conn,$_POST['newpassword2']);
    
    
    
    $sql= "SELECT * FROM admins WHERE id = $userid";
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $pass=$row['password'];

    if($newpassword1!=$newpassword2)
    {
        $notification = array(
            'message' => 'New password and Confirm new password doesnot match',
            'alert-type' => 'error'
        );

    }
    else if($pass!=$currentpassword)
    {
        $notification = array(
            'message' => 'Current password doesnot match',
            'alert-type' => 'error'
        );

    }
    else if($newpassword1==$newpassword2 && $pass==$currentpassword)
    {

        $sql="UPDATE admins SET password='$newpassword1' WHERE id=$userid";

        mysqli_query($conn,$sql);

        $notification = array(
            'message' => 'Password changed successfully',
            'alert-type' => 'success'
        );
    }
    
    // ensure that form fields are filled properly
    

header('Content-Type: application/json');
echo json_encode($notification);



    ?>