<?php include ('server.php'); 
  $encptid=$_GET['mv'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login||Admin</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<link href="loginstyle.css" rel="stylesheet" />
<div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">Member Log In</button>
        <button id="signup-toggle" onclick="toggleSignup()">View Plans</button>
    </div>

    <div id="login-form">
        <form id="userlogin">
            <input type="text" placeholder="Enter email or username" name="username" required="please enter username"/>
            <input type="password" placeholder="Enter password"  id="myInput" name="password" required="please enter username"/>
         
             <input type="checkbox"  style="margin-left: -5cm;"  onclick="myFunction()"><p style="margin-left:30px; margin-top:-28px;">Show Password</p>
            
  

            <button type="submit" class="btn login" style="margin-top: 20px; margin-bottom: 20px;">login</button>
        
        </form>
    </div>

    <div id="signup-form">
        <form>
           <h1>VIP Plans</h1>
           <p>Plan 1</p>
           <p>Plan 2</p>
           <p>Plan 3</p>
            <button type="button" class="btn signup"><i class="fa fa-spinner fa-pulse"></i> Contact
          </button> 
            
        </form>
    </div>

</div>




  
	
<script>

var url = window.location.href;
var id = url.substring(url.lastIndexOf('mv=') + 3);

window.onload=function(){

history.pushState(url,null,"http://localhost/vipforvariety/")

}

function toggleSignup(){
   document.getElementById("login-toggle").style.backgroundColor="#fff";
    document.getElementById("login-toggle").style.color="#222";
    document.getElementById("signup-toggle").style.backgroundColor="#001f4d";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="#001f4d";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.backgroundColor="#fff";
    document.getElementById("signup-toggle").style.color="#222";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

jQuery(document).on('submit', '#userlogin', function(e){
            e.preventDefault();

            if(id=="NMXV")
            {
              $type="warning";
              $message="Wrong movie url please check the url";

              shownoti($type,$message);
            }
            else{
            $.ajax({
               
                type: 'POST',
                url: 'userlogin.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
 
                beforeSend: function(){
                    $('.btn signup').attr("disabled","disabled");
                   
                },
 
                success: function(response){
                  
                      if(response['alert-type']=='success')
                      {
                       
                   
                        window.location.href ='user-dashboard.php?vm='+id;
                      }
                      else
                      {
                        $type=response['alert-type'];
                        $message=response['message'];

                        shownoti($type,$message);

                      }
                    
                   
                  
                },
                error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
          }
        });

        function shownoti(type,message)
  {

  //  var type=response['alert-type'];

  
    switch(type){
      case 'info':
             toastr.info(message);
             break;
          case 'success':
              toastr.success(message);
              break;
           case 'warning':
              toastr.warning(message);
              break;
          case 'error':
            toastr.error(message);
            break;
    }
  }


</script>



  </html>