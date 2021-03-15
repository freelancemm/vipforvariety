<?php include ('server.php'); ?>

<?php 

                         $encptid=$_GET['vm'];
                         $_SESSION['movieid']=$encptid;
                         if( $_SESSION['username']==null && $_SESSION['userid']==null)
                         {
                           header("Location: login.php?mv=$encptid");
                         }
                         if($_SESSION['userid']!=null)
                         {
                            $uid=$_SESSION['userid'];
                            $results = mysqli_query($db, "SELECT * FROM vipusers WHERE userid=$uid"); 
                            $row = mysqli_fetch_array($results);
                            
                            $accexpiredate=$row['accexpiredate'];
                            if(  $accexpiredate==date("Y-m-d"))
                            {
                            header("Location: login.php?mv=$encptid");
                            }  
                         }
                         
                         
                         if($encptid==null)
                         {

                            header( "Location:login.php?mv=NMXV" );
                         }
                           
                         
                           $salt="vmsecret";
                           $id_raw=base64_decode($encptid);
                           $id=preg_replace(sprintf('/%s/', $salt), '', $id_raw);
                           { 
                           $results = mysqli_query($db, "SELECT * FROM uploadedmovies WHERE movieid=$id"); 
                           $row = mysqli_fetch_array($results);
                           
                           $moviename=$row['moviename'];
                           $genre=$row['genre'];
                           $releaseyear=$row['releaseyear'];
                           $runtime=$row['runtime'];
                           $description=$row['description'];
                           $imagepath=$row['imagepath'];
                           $moviepath=$row['moviepath'];
                           $url1=$row['URL1'];
                           $url2=$row['URL2'];
                           $url3=$row['URL3'];

                          
                      
                      
                      ?> 
<style>
    .vm-livemovie{
            width:250px;
            background-image: linear-gradient(90deg, #000000, #001f4d);
            border-radius:20px;
            border-style:none;
            margin: 10px 10px;
            padding: 10px 10px;
            letter-spacing: 2px;
        }
        .vm-download{
            width:250px;
            background-image: linear-gradient(90deg, #000000, #001f4d);
            border-radius:20px;
            border-style:none;
            padding: 10px 10px;
            letter-spacing: 2px;
        }
</style>
<script>
    if( $encptid==null)
    {
        $content1=document.getElementById("layoutSidenav_content");
        $content1.style.display="none";

    }
</script>
<?php include('user-header.php');?>
<div id="layoutSidenav_content">
                <main>
               
                    <div class="container-fluid bg-dark" style="padding:10px; background-image: linear-gradient(90deg, #000000, #001f4d);">
                        <h1 class="mt-5" style="color:#ffff00;"><?=$moviename?></h1>
                        <div class="col-xl-12 col-md-12">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-header">
                                        <img class="card-img-top" src='<?=$imagepath?>' alt="Image" style="width:100% background-size:cover;">
                                    </div>
                                    <div class="card-body">
                                        <h2>Description</h2>
                                        <p><?=$description?>
                                            </p>
                                            <div class="row align-items-center justify-content-center">
                                                <div class="livemovie">
                                                    <a href="#" data-toggle="modal" data-target="#liveModal"><button type="button" class="vm-livemovie text-white"><i class="fas fa-film" style="margin-right: 10px;"></i>Live Movie</button></a>
                                                </div>
                                                <div class="download">
                                                    <a href="#" data-toggle="modal" data-target="#downloadModal"><button type="button" class="vm-download text-white" ><i class="fas fa-download" style="margin-right: 10px;"></i>Download</button></a>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- <div class="card-footer">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <video width="100%" height="auto" controls>
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
                                    </div> -->
                                </div>
                            </div>

<!-- movie play modal form -->
<div class="modal fade" id="liveModal" tabindex="-1" aria-labelledby="liveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="liveModalLabel">Movie Play</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="liveForm">
                <video width="100%" height="auto" controls>
                    <source src='<?=$moviepath?>' type="video/mp4">
                    <source src="dist/assets/img/awmv.ogg" type="video/ogg">
                </video>
            </form>
        </div>
    </div>
  </div>
</div>
<script>
    $('#liveModal').on('shown.bs.modal', function () {
  $('#liveForm').trigger('focus')
})
</script>

<!-- download modal form -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">Download Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="downloadForm">
                <ul class="download" style="list-style:none;">
                    <li><a href=<?=$url1?>><?=$url1?></a></li>
                    <li><a href=<?=$url1?>><?=$url2?></a></li>
                    <li><a href=<?=$url1?>><?=$url3?></a></li>
                </ul>
            </form>
        </div>
    </div>
  </div>
</div>
<script>
    $('#downloadModal').on('shown.bs.modal', function () {
  $('#downloadForm').trigger('focus')
})
</script>


<?php } ?>
                              
<?php include('user-footer.php');?>

