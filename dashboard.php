<?php
session_start();

 ?>

<?php include('header.php');?>
<?php include('sidebar.php');?>

<div id="layoutSidenav_content" >
                <main>
                    <div class="container-fluid" >
                        <h1 class="mt-4">Admin Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Number of Movies</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">0</a>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Number of Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">0</a>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Active Accounts</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">0</a>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Expired Accounts</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">0</a>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="visibility: hidden;">
<?php include('footer.php');?>
</div>