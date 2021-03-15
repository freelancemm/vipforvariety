<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login||Admin</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>   
    </head>
    <body class="loginbg" style="background-image:radial-gradient(#ffff00,#000000);">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form id="adminlogin">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name= "username" id="username" type="email" placeholder="Enter email address" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" required />
                                            </div>
                                            <input type="checkbox"   onclick="myFunction()"><p style="margin-left:28px; margin-top:-25px;">Show Password</p>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div> -->
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                <button type="submit" class="btn btn-info" name="login">Login</button>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>

        <script type="text/javascript">

jQuery(document).on('submit', '#adminlogin', function(e){
            e.preventDefault();

         
          
            $.ajax({
               
                type: 'POST',
                url: 'adminloginaction.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
 
                beforeSend: function(){
                    $('.btn btn-info').attr("disabled","disabled");
                   
                },
 
                success: function(response){
                  
                      if(response['alert-type']=='success')
                      {
                       
                   
                        window.location.href ='dashboard.php';
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

  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}




     
      


 </script>



        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>