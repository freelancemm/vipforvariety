

<?php include('header.php');?>
<?php include('sidebar.php');?>


<div id="layoutSidenav_content" style="margin-top: 20px;">
                <main>
                    <div class="container-fluid">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user-plus mr-1"></i>
                                Edit User
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" action="server.php"  method="post">
                               
                           <?php 
                           
                         
                                $id=$_GET['edit']; { 
                                $results = mysqli_query($db, "SELECT * FROM vipusers WHERE userid=$id"); 
                                $row = mysqli_fetch_array($results);
                                
                                $username=$row['username'];
                                $email=$row['email'];
                                $password=$row['password'];
                                $accexpiredate=$row['accexpiredate'];
                           
                           
                           ?> 
                            
                                <div class="form-group">

                                <input type=hidden class="form-control" id="userid" name="userid" value=<?=$id?>>
                                    <label class="control-label col-sm-3" for="username">Username:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" placeholder="Enter username.." name="username" required="" value='<?=$username?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email.." name="email" required="" value='<?=$email?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="password">Password:</label>
                                    <div class="col-sm-9">          
                                        <input type="text" class="form-control" id="password" placeholder="Enter password.." name="password" required="" value=<?php echo $password; ?>>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="accexpiredate">Account Expire Date:</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="accexpiredate" placeholder="Enter account expire date.." name="accexpiredate" required="" value=<?php echo $accexpiredate; ?>>
                                    </div>
                                </div>
                             
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-info" name="update-user">Update</button>
                                    </div>
                                </div>

                                <?php } ?>
                                
                            </form>
                    </div>                       

<?php include('footer.php');?>