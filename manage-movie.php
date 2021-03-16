

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
                           <a href="add-movie.php" class="btn btn-success">Add Movie</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            <?php
                                $i = 1;
                                $results = mysqli_query($db, "SELECT * FROM uploadedmovies"); ?>
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Movie Name</th>
                                            <!-- <th>Genre</th> -->
                                            <!-- <th>Release Year</th>
                                            <th>Runtime</th> -->
                                            <!-- <th>Description</th> -->
                                            <!-- <th>Image</th>
                                            <th>Movie</th> -->
                                            <th>VIP URL</th>
                                            <th class="no-sort" >Action</th>


                                        </tr>
                                    </thead>


	<?php while ($row = mysqli_fetch_array($results)) { ?>

		<tr>
            <td width="5%" >  <?php
                $salt="vmsecret";
                $id=$row['movieid'];
                $encptid = base64_encode($id.$salt);
                    echo $i;
                    $i++;?></td>
			<td ><?=$row['moviename']; ?></td>
			<!-- <td><?=$row['genre']; ?></td>
			<td><?=$row['releaseyear']; ?></td>
            <td><?=$row['runtime']; ?></td> -->
			<!-- <td><?=$row['description']; ?></td> -->
            <!-- <td><?=$row['image']; ?></td>
            <td><?=$row['movie']; ?></td> -->
            <td><a href="http://localhost/vipforvariety/user-dashboard.php?vm=<?=$encptid?>"  target="_blank">http://localhost/vipforvariety/user-dashboard.php?vm=<?=$encptid?></td>



			<td>
				<a href="edit-movie.php?edit=<?=$encptid;?>" class="btn btn-info" style="padding-right:30px;" >Edit</a>

                <a class="btn btn-danger" href="#" data-movieid=<?=$encptid;?> data-moviename='<?=$row['moviename']; ?>' data-toggle="modal" data-target="#ConfirmDelete">Delete<?php $mname=$row['moviename']; ?></a>

           


			</td>



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
       
           <p >Do you really want to delete <span style="font-weight:600;" class="mname" id="MN">test</span> ? This process cannot be undone.</p>
        </div>
        <div class="modal-footer">
            <a href="server.php?delmovie=" class="btn btn-danger" style="padding-right:30px;" onclick="delmovie()" >Yes</a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
           
        </div>
    </div>
  </div>
</div>
<script>

        var id=0;

        $(document).ready(function(){
    $('#ConfirmDelete').on('show.bs.modal', function (e) {
        var moviename = $(e.relatedTarget).data('moviename');
        id = $(e.relatedTarget).data('movieid');
    
        $('#MN').html(moviename);
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

function delmovie(){

    $.ajax({
        type: 'Get',
        url: 'server.php',
        data: {delmovie: id},
        success: function(data) { 
                window.location.href = 'manage-movie.php'
            },
        error: function(xhr, ajaxOptions, thrownerror) { 

            window.location.href = 'manage-movie.php'
        }
    });
       
}      

</script>




<?php include('footer.php');?>