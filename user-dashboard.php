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
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Variety Myanmar</a>
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> -->
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
    <div class="modal-dialog">
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
    <div class="modal-dialog">
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


<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid bg-dark" style="padding:10px;">
                        <h1 class="mt-5 text-warning">Movies Name</h1>
                        <div class="col-xl-12 col-md-12">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-header">
                                        <img class="card-img-top" src="dist/assets/img/ig-1.jpg" alt="Image" style="width:100% background-size:cover;">
                                    </div>
                                    <div class="card-body">
                                        <h2>Description</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                                            including versions of Lorem Ipsum
                                            </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <video width="300" controls>
                                                    <source src="dist/assets/img/awmv.mp4" type="video/mp4">
                                                    <source src="dist/assets/img/awmv.ogg" type="video/ogg">
                                                </video>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <h3>Download Link</h3>
                                                <ul class="download" style="list-style:none;">
                                                    <li><a href="#">Download Link</a></li>
                                                    <li><a href="#">Download Link</a></li>
                                                    <li><a href="#">Download Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


<footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; VM Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

<script>
    $('#profileModal').on('shown.bs.modal', function () {
  $('#profileForm').trigger('focus')
})
</script>