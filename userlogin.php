<?php include ('server.php');

$username=mysqli_real_escape_string($conn,$_POST['username']);

$password=mysqli_real_escape_string($conn,$_POST['password']);

    //$password=md5($password);
    $query="SELECT * FROM vipusers WHERE email='$username' AND password='$password'";
    $result=mysqli_query($db,$query);
    $res=mysqli_fetch_array($result);
    $expiredate=$res["accexpiredate"];
    $today=date("Y-m-d");    
	$name=$res["username"];
	$id=$res["userid"];
	
			

    if(mysqli_num_rows($result) ==1){

        if($expiredate<=$today)
        {

            $notification = array(
                'message' => 'Your account is expire.please contact admin',
                'alert-type' => 'warning'
            );
            

        }
        else
        {

            $_SESSION['username'] =$name;
			$_SESSION['userid']=$id;
            $_SESSION['accexpiredate']=$expiredate;

 
            $notification = array(
                'message' => 'Login Success',
                'alert-type' => 'success'
            );
        }

        
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

    
