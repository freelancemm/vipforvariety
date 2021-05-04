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
                           $results = mysqli_query($db, "SELECT * FROM uploadedmovies INNER JOIN  movieurls on uploadedmovies.movieid=movieurls.movieid WHERE uploadedmovies.movieid=$id"); 
                           $row = mysqli_fetch_array($results);
                           
                           $moviename=$row['moviename'];
                           $size=$row['size'];
                           $releaseyear=$row['releaseyear'];
                           $runtime=$row['runtime'];
                           $description=$row['description'];
                           $imagepath=$row['imagepath'];
                           $moviepath=$row['moviepath'];
                           $url1=$row['URL1'];
                           $url2=$row['URL2'];
                           $url3=$row['URL3'];
                           $url4=$row['URL4'];
                           $url5=$row['URL5'];
                           $url6=$row['URL6'];
                           $url7=$row['URL7'];
                           $url8=$row['URL8'];
                           $url9=$row['URL9'];
                           $url10=$row['URL10'];

                           if($url1!=null)
                           {
                           $url1_icon=getIconURL($url1);
                           $url1_name=getURLName($url1);
                           $url1_display="block";
                         
                           }
                           else
                           {
                            $url1_display="none";
                           }
                           if($url2!=null)
                           {
                           $url2_icon=getIconURL($url2);
                           $url2_name=getURLName($url2);
                           $url2_display="block";
                           }
                           else
                           {
                            $url2_display="none";
                           }
                           if($url3!=null)
                           {
                           $url3_icon=getIconURL($url3);
                           $url3_name=getURLName($url3);
                           $url3_display="block";
                           }
                           else
                           {
                            $url3_display="none";
                           }
                           if($url4!=null)
                           {
                           $url4_icon=getIconURL($url4);
                           $url4_name=getURLName($url4);
                           $url4_display="block";
                           }
                           else
                           {
                            $url4_display="none";
                           }
                           if($url5!=null)
                           {
                           $url5_icon=getIconURL($url5);
                           $url5_name=getURLName($url5);
                           $url5_display="block";
                           }
                           else
                           {
                            $url5_display="none";
                           }
                           if($url6!=null)
                           {
                           $url6_icon=getIconURL($url6);
                           $url6_name=getURLName($url6);
                           $url6_display="block";
                           }
                           else
                           {
                            $url6_display="none";
                           }
                           if($url7!=null)
                           {
                           $url7_icon=getIconURL($url7);
                           $url7_name=getURLName($url7);
                           $url7_display="block";
                           }
                           else
                           {
                            $url7_display="none";
                           }
                           if($url8!=null)
                           {
                           $url8_icon=getIconURL($url8);
                           $url8_name=getURLName($url8);
                           $url8_display="block";
                           }
                           else
                           {
                            $url8_display="none";
                           }
                           if($url9!=null)
                           {
                           $url9_icon=getIconURL($url9);
                           $url9_name=getURLName($url9);
                           $url9_display="block";
                           }
                           else
                           {
                            $url9_display="none";
                           }
                           if($url10!=null)
                           {
                           $url10_icon=getIconURL($url10);
                           $url10_name=getURLName($url10);
                           $url10_display="block";
                           }
                           else
                           {
                            $url10_display="none";
                           }
                           

                           function getIconURL($original_url){

                            $icon_url=(explode('/',$original_url,-1));

                            $icon="https://www.google.com/s2/favicons?domain=".$icon_url[2];

                            return $icon;

                           }

                           function getURLName($url){

                            $icon_url=(explode('/',$url,-1));

                            $name=(explode('.', $icon_url[2],1));

                            return ucwords($name[0]);

                           }
                      
                      
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
        .modal-header{
            background-image: linear-gradient(90deg, #000000, #001f4d);
        }
        #downloadModal .modal-body{
            background-image: url(dist/assets/img/rm7012.jpg); 
            background-size: cover; 
            max-width: 100%; 
            height: auto;
        }
        #downloadForm{
            background-color: rgba(182, 217, 244, 0.3);
            border: 2px #000000 solid;
            border-radius: 20px;
            margin: 5px 0;
            padding: 20px 20px;
        }
        #downloadForm ul li a{
            color: #000000;
            font-family: "times new roman",sans-serif;
            font-size: 20px;
            font-weight: 400;
        }
        #downloadForm ul li a:hover{
            color: #0059b3;
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
                                                    <a href="#" data-toggle="modal" data-target="#liveModal"><button type="button" class="vm-livemovie text-white"><i class="fas fa-film"style="margin-right: 10px;"></i>Watch</button></a>
                                                </div>
                                                <div class="download">
                                                    <a href="#" data-toggle="modal" data-target="#downloadModal"><button type="button" class="vm-download text-white" ><i class="fas fa-download" style="margin-right: 10px;"></i>Download</button></a>
                                                </div>
                                                <!-- <div class="download">
                                                    <a href='' download="" ><button type="button" class="vm-download text-white" ><i class="fas fa-download" style="margin-right: 10px;"></i>Download</button></a>
                                                </div> -->
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
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="liveModalLabel">Movie Play</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="liveForm">
           

            <div style="position:relative;padding-bottom:56%;padding-top:20px;height:0;"><IFRAME SRC="<?=$moviepath?>" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=640 HEIGHT=360 allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></IFRAME></div>
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
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="downloadModalLabel"><i class="fas fa-download" style="margin-right:10px;"></i>Download Links</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form id="downloadForm">
                <ul class="download" style="list-style:none;">
                    <!-- <li><a href='<?=$moviepath?>' download="<?=$moviename?>">VM Server</a></li> -->

                   
                    <li style="display: <?=$url1_display?>;"><img  src='<?=$url1_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url1?>><?=$url1_name?></a></li>

                    <li style="display: <?=$url2_display?>;"><img  src='<?=$url2_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url2?>><?=$url2_name?></a></li>

                    <li style="display: <?=$url3_display?>;"><img  src='<?=$url3_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url3?>><?=$url3_name?></a></li>

                    <li style="display: <?=$url4_display?>;"><img  src='<?=$url4_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url4?>><?=$url4_name?></a></li>

                    <li style="display: <?=$url5_display?>;"><img  src='<?=$url5_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url5?>><?=$url5_name?></a></li>

                    <li style="display: <?=$url6_display?>;"><img  src='<?=$url6_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url6?>><?=$url6_name?></a></li>

                    <li style="display: <?=$url7_display?>;"><img  src='<?=$url7_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url7?>><?=$url7_name?></a></li>

                    <li style="display: <?=$url8_display?>;"><img  src='<?=$url8_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url8?>><?=$url8_name?></a></li>

                    <li style="display: <?=$url9_display?>;"><img  src='<?=$url9_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url9?>><?=$url9_name?></a></li>

                    <li style="display: <?=$url10_display?>;"><img  src='<?=$url10_icon?>' alt="icon" style="margin-right:10px;"><a target="_blank"   href=<?=$url10?>><?=$url10_name?></a></li>
                   
                  
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

