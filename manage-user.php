<?php include('header.php');?>
<?php include('sidebar.php');?>

<div id="layoutSidenav_content" style="margin-top: 20px;">
                <main>
                    <div class="container-fluid">
                        <div class="card-header">
                           <i class="fas fa-users mr-1"></i>
                           User Lists
                           <a href="add-user.php" class="btn btn-success">Add Users</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Gender</th>
                                            <th>Phone No</th>
                                            <th>Address</th>
                                            <th>Account Expire Date</th>
                                            <th>Action</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Gender</th>
                                            <th>Phone No</th>
                                            <th>Address</th>
                                            <th>Account Expire Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        

<?php include('footer.php');?>