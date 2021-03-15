

<?php include('header.php');?>
<?php include('sidebar.php');?>
<style>
    .no-sort::after { display: none!important; }
.no-sort::before { display: none!important; }

.no-sort { pointer-events: none!important; cursor: default!important; }
</style>

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
                                $i = 1;
                                $results = mysqli_query($db, "SELECT * FROM vipusers"); ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Account Expire Date</th>
                                            <th class="no-sort">Action</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
        <td width="5%" >  <?php
                    echo $i;
                    $i++;?></td>
			<td><?=$row['username']; ?></td>
			<td><?=$row['email']; ?></td>
			<td><?=$row['password']; ?></td>

			<td><?=$row['accexpiredate']; ?></td>

           
			
			<td>
				<a href="edit-user.php?edit=<?=$row['userid'];?>" class="btn btn-info" style="padding-right:30px;" >Edit</a>

                <a class="btn btn-danger" href="#" data-userid=<?=$row['userid'];?> data-username='<?=$row['username']; ?>' data-toggle="modal" data-target="#ConfirmDelete">Delete</a>
               
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

                                             
<div class="modal fade" id="ConfirmDelete"  >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
       
           <p >Do you really want to delete <span style="font-weight:600;" class="username" id="UN">test</span> ? This process cannot be undone.</p>
        </div>
        <div class="modal-footer">
            <a href="server.php?deluser=" class="btn btn-danger" style="padding-right:30px;" onclick="deluser()" >Yes</a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
           
        </div>
    </div>
  </div>
</div>

<script>

var id=0;

$(document).ready(function(){
$('#ConfirmDelete').on('show.bs.modal', function (e) {
var username = $(e.relatedTarget).data('username');
id = $(e.relatedTarget).data('userid');

$('#UN').html(username);
//$movieid=id;


});
});
// $('#test').click(function() {
//     alert(id);

//         $.ajax({
//             type : 'post',
//             url : 'server.php', //Here you will fetch records 
//             data :  {delmovie= id}, //Pass $id
//             success : function(data){
//                 window.location.href = 'manage-movie.php'
//             }
//         });
// });

function deluser(){

$.ajax({
type: 'GET',
url: 'server.php',
data: {deluser: id},
success: function(data) { 
        window.location.href = 'manage-user.php'
    },
error: function(xhr, ajaxOptions, thrownerror) { }
});

}      

</script>
             
                        

<?php include('footer.php');?>