<?php include('server.php');?>
<?php include('admincheckauth.php');?>
<?php include('loader.html');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VM||Admin-Dashboard</title>
        <link href="dist/css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
        
        <!-- <link href="datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
       
    </head>

    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Variety Myanmar</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                <?php { 

                    
                                            $id=$_SESSION['adminid'];
                                            $query="SELECT * FROM admins WHERE id='$id'";

                                            $result=mysqli_query($conn,$query);
                                            $res=mysqli_fetch_array($result);
                                            $username=$res['username'];
                                            ?>

                                        
                                <p style="color:white;margin-top:15px; margin-left:10px"><?=$username?></p>
                                        <?php } ?>
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw" style="color: white;"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">Profile</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pwModal">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <form action="server.php"  method="post"> 
          
                          <button type="submit" class="dropdown-item" name="adminlogout">Logout</button>


                         </form>
                    </div>
                </li>
            </ul>
        </nav>

<div class="modal fade" id="pwModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="pwForm">
                <div class="form-group">
                    <label for="cpw">Current Password</label>
                    <input type="password" class="form-control" id="cpw" name="currentpassword" placeholder="Type Current Password.." required/> 
                </div>
                <div class="form-group">
                    <label for="npw">New Password</label>
                    <input type="password" class="form-control" id="npw" name="newpassword1" placeholder="Type New Password.." required/>
                </div>
                <div class="form-group">
                    <label for="repw">Retype New Password</label>
                    <input type="password" class="form-control" id="repw" name="newpassword2" placeholder="New Password Again.." required/> 
                </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
        </div>
            </form>
        </div>
       
    </div>
  </div>
</div>
<script>
    $('#pwModal').on('shown.bs.modal', function () {
  $('#pwForm').trigger('focus')
})
</script>

<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="profileForm">

            <?php { 

                                        
                    $id=$_SESSION['adminid'];
                    $query="SELECT * FROM admins WHERE id='$id'";

                    $result=mysqli_query($conn,$query);
                    $res=mysqli_fetch_array($result);
                    $username=$res['username'];
                    $email=$res['email'];
                    ?>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" value='<?=$username?>'/> 
                    <div class="text1"></div> 
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value='<?=$email?>' /> 
                    <div class="text2"></div>
                </div>
                <?php } ?>

                <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
            </form>
        </div>
       
    </div>
  </div>
</div>
<div class="lds-facebook"><div></div><div></div><div></div>

<script>
    $('#profileModal').on('shown.bs.modal', function () {
  $('#profileForm').trigger('focus')
})


jQuery(document).on('submit', '#profileForm', function(e){
            e.preventDefault();

       
          
            $.ajax({
               
                type: 'POST',
                url: 'updateadminprofile.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
 
                beforeSend: function(){
                    $('.btn btn-success').attr("disabled","disabled");
                    $(".spinner").show();
                   
                },
 
                success: function(response){
                  
                      if(response['alert-type']=='success')
                      {
                        $type=response['alert-type'];
                        $message=response['message'];

                     
                        $(".spinner").hide();
                       // location.reload();

                        shownoti($type,$message);
                        setTimeout(location.reload(), 10000);
                   
                       // window.location.href ='dashboard.php';
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

        jQuery(document).on('submit', '#pwForm', function(e){
            e.preventDefault();

     
          
            $.ajax({
               
                type: 'POST',
                url: 'updateadminpassword.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
 
                beforeSend: function(){
                    $('.btn btn-success').attr("disabled","disabled");
                    $(".spinner").show();
                   
                },
 
                success: function(response){
                  
                      if(response['alert-type']=='success')
                      {
                        $type=response['alert-type'];
                        $message=response['message'];

                      
                        $(".spinner").hide();
                        //location.reload();

                        shownoti($type,$message);
                       
                        setTimeout(location.reload(), 10000);
                   
                   
                       // window.location.href ='dashboard.php';
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
</script>