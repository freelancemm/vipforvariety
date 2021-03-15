<?php include ('server.php');

$username=mysqli_real_escape_string($conn,$_POST['username']);

$password=mysqli_real_escape_string($conn,$_POST['password']);

    //$password=md5($password);
    $query="SELECT * FROM admins WHERE email='$username' AND password='$password'";
    $result=mysqli_query($db,$query);
    $res=mysqli_fetch_array($result);
   
	$name=$res["username"];
	$id=$res["id"];
	
			

    if(mysqli_num_rows($result) ==1){

        $_SESSION['adminname'] =$name;
        $_SESSION['adminid']=$id;


        $notification = array(
            'message' => 'Login Success',
            'alert-type' => 'success'
        );

       

        
    }else{

        $notification = array(
            'message' => 'Incorrect username or password',
            'alert-type' => 'error'
        );

     

        //array_push($errors,"The username or password is wrong");

    }

    
    header('Content-Type: application/json');
    echo json_encode($notification);
    ?>

    
