<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VM||Users-Dashboard</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
        <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script> -->
    </head>
    <style>
       .slide{
            position: relative;
            animation-name: announcement;
            animation-duration: 7s;
            color:red;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
        }
        @keyframes announcement {
            0%   {left:20px;}
            25%  {left:-20px;}
            50%  {left:20px;}
            75%  {left:-20px; }
            100% {left:20px;}
        }
        @media (min-width: 576px) {
        .slide {
            position: relative;
            animation-name: announcement;
            animation-duration: 4s;
            color:red;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
            }
            @keyframes announcement {
                0%   {left:20px;}
                25%  {left:-20px;}
                50%  {left:20px;}
                75%  {left:-20px; }
                100% {left:20px;}
            }
        }
        @media (min-width: 768px) {
        .slide {
            position: relative;
            animation-name: announcement;
            animation-duration: 4s;
            color:red;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
            }
        @keyframes announcement {
            0%   {left:0px;}
            25%  {left:26px;}
            50%  {left:52px;}
            75%  {left:78px; }
            100% {left:104px;}
            }
        }
        @media (min-width: 992px) {
        .slide {
            position: relative;
            animation-name: announcement;
            animation-duration: 6s;
            color:red;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
            }
        @keyframes announcement {
            0%   {left:0px;}
            25%  {left:150px;}
            50%  {left:300px;}
            75%  {left:450px; }
            100% {left:600px;}
            }
        }
        @media (min-width: 1200px) {
        .slide {
            position: relative;
            animation-name: announcement;
            animation-duration: 7s;
            color:red;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-timing-function: linear;
        }
        @keyframes announcement {
            0%   {left:0px;}
            25%  {left:125px;}
            50%  {left:250px;}
            75%  {left:375px; }
            100% {left:500px;}
            }
        }
    </style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Variety Myanmar</a>
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> -->
            <div class="slide"><i class="fas fa-exclamation-triangle"></i>Your Account Will be Expired on 21.2.2021</div>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                <p style="color:white;margin-top:15px; margin-left:10px">user</p>
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal">Profile</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pwModal">Change Passowrd</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
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
                    <input type="text" class="form-control" id="cpw" placeholder="Type Current Password.."/> 
                </div>
                <div class="form-group">
                    <label for="npw">New Password</label>
                    <input type="text" class="form-control" id="npw" placeholder="Type New Password.." />
                </div>
                <div class="form-group">
                    <label for="repw">Retype New Password</label>
                    <input type="text" class="form-control" id="repw" placeholder="New Password Again.." /> 
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Save changes</button>
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
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="cpw" value="user"/> 
                    <div class="text1"></div> 
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="cpw" value="user@gmail.com" /> 
                    <div class="text2"></div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Update</button>
        </div>
    </div>
  </div>
</div>

<script>
    $('#profileModal').on('shown.bs.modal', function () {
  $('#profileForm').trigger('focus')
})
</script>