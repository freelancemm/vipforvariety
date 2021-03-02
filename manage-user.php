<?php include ('server.php'); ?>
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

                            <?php 
                              
                                $results = mysqli_query($db, "SELECT * FROM vipusers"); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Account Expire Date</th>
                                            <th >Action</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?=$row['username']; ?></td>
			<td><?=$row['email']; ?></td>
			<td><?=$row['password']; ?></td>

			<td><?=$row['accexpiredate']; ?></td>

           
			
			<td>
				<a href="edit-user.php?edit=<?=$row['userid'];?>" class="edit_btn" >Edit</a>

                <a href="server.php?del=<?=$row['userid']; ?>" class="del_btn">Delete</a>
			</td>
			<!-- <td>
				<a href="server.php?del=<?=$row['userid']; ?>" class="del_btn">Delete</a>
			</td> -->
		</tr>
	<?php } ?>
                                    <!-- <tfoot>
                                        <tr>
                     
                                           <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Account Expire Date</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                        </div>
                        

<?php include('footer.php');?>