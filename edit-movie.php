

<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('loader.html');?>

    


<div id="layoutSidenav_content" style="margin-top: 20px;">
               
                    <div class="container-fluid" style="offset: -1;">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-folder-plus mr-1"></i>
                               Edit Movie
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" id="EditMovie" enctype="multipart/form-data" >

                            <?php 
                           
                           $encptid=$_GET['edit'];
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
                           $image=$row['image'];
                           $movie=$row['moviepath'];
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
                      
                      
                      ?> 
                       
                                <div class="form-group">
                                <input type=hidden class="form-control" id="movieid" name="movieid" value=<?=$id?>>
                                    <label class="control-label col-sm-3" for="moviename">Movie Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="moviename" placeholder="Enter movie name.." name="moviename" value='<?=$moviename?>' required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="releaseyear">Size:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="size" placeholder="Enter Release Year.." name="size" required=""value='<?=$size?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="releaseyear">Release Year:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="releaseyear" placeholder="Enter Release Year.." name="releaseyear" required=""value='<?=$releaseyear?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="runtime">Runtime:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="runtime" placeholder="Enter Runtime.." name="runtime" required=""value='<?=$runtime?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="description">Description:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="10" name="description" placeholder="Enter Description.." style="height: 250px;" ><?=$runtime?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">Movie Embedded Code:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  placeholder="Enter Embedded Code.." name="movie" id="movie" required="" value='<?=$movie?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="url1">URL1:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="url1" placeholder="Enter URL1" name="url1" value='<?=$url1?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL2:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url2" placeholder="Enter URL2" name="url2" value='<?=$url2?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL3:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url3" placeholder="Enter URL3" name="url3" value='<?=$url3?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL4:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url4" placeholder="Enter URL4" name="url4" value='<?=$url4?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL5:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url5" placeholder="Enter URL5" name="url5" value='<?=$url5?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL6:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url6" placeholder="Enter URL5" name="url6" value='<?=$url6?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL7:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url7" placeholder="Enter URL7" name="url7" value='<?=$url7?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL8:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url8" placeholder="Enter URL8" name="url8" value='<?=$url8?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL9:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url9" placeholder="Enter URL9" name="url9" value='<?=$url9?>' >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">URL10:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  id="url10" placeholder="Enter URL10" name="url10" value='<?=$url10?>' >
                                    </div>
                                </div>
                                <input type="checkbox"  style="margin-left: 20px; margin-top:20px;" id="editimage" name="editimage"  onclick="EditImage()"><p style="margin-left:40px; margin-top:-20px;font-weight:500">Edit Image</p>
                                <input id='ischeckedimage' type='hidden' value="off" name='ischeckedimage'>
                                
                                <div class="edimage" id="edimage" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="image">Upload Image:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" id="image" accept="image/*" value='<?=$image?>'>
                                    </div>
                                </div>
                                </div>
                                <!-- <input type="checkbox"  style="margin-left: 20px; margin-top:20px;" id="editmovie" name="editmovie"  onclick="EditMovie()"><p style="margin-left:40px; margin-top:-20px;font-weight:500">Edit Movie</p>
                                <input id='ischeckedmovie' type='hidden' value="off" name='ischeckedmovie'>
                                <div class="edmovie" id="edmovie" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="movie">Upload Movie:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="movie" id="movie" accept="video/*" >
                                    </div>
                                </div>
                                </div> -->
                               
                                <!-- <div class="form-group">
                                    <label class="control-label col-sm-3" for="movie">Upload Video:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="movie" id="movie"  accept="video/*" >
                                    </div>
                                </div> -->
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="add-movie" class="btn btn-info">Update</button>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </form>

                            <div class="progress-bar" style="display: none;">

<div class="row align-items-center">
<div class="col">
    <div class="progress">
    <div id="file-progress-bar" class="progress-bar"></div>
</div>
</div>
</div>  
</div>

<div class="row align-items-center">  
<div class="col">
    <div id="uploaded_file"></div>
</div>
</div>   
                    </div>  

<script>

var edimage = document.getElementById("edimage");
var edmovie = document.getElementById("edmovie");

var editimage=document.getElementById("editimage");
var editmovie=document.getElementById("editmovie");


    function EditImage() {

  if (editimage.checked == true) {
    edimage.style.display="block";
    document.getElementById('ischeckedimage').value="on"; 
  } else {
    edimage.style.display="none";
    document.getElementById('ischeckedimage').value="off"; 
  }
}

//   function EditMovie() {
  
// if (editmovie.checked == true) {
//   edmovie.style.display="block";
//   document.getElementById('ischeckedmovie').value="on"; 
  
// } else {
//     edmovie.style.display="none";
//     document.getElementById('ischeckedmovie').value="off"; 
// }
// }


jQuery(document).on('submit', '#EditMovie', function(e){
            jQuery("#chk-error").html('');
            e.preventDefault();
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();         
                    xhr.upload.addEventListener("progress", function(element) {
                        if (element.lengthComputable) {
                            var percentComplete = ((element.loaded / element.total) * 100);
                            $("#file-progress-bar").width(percentComplete + '%');
                            $("#file-progress-bar").html(percentComplete+'%');
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: 'editmovie.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
                
 
                beforeSend: function(){

                
                    var ischecked=$('#editmovie').is(":checked");
                    if(ischecked)
                    {
                    $('.btn btn-info').attr("disabled","disabled");
                    $('.progress-bar').show();
                    $('#EditMovie').css("opacity",".5");
                    $("#file-progress-bar").width('0%');
                    }else
                    {
                        $(".spinner").show();
                      
                        $('#EditMovie').css("opacity",".5");
                    }
                },
 
                success: function(json){
                    if(json == 'success'){
                        var ischecked=$('#editmovie').is(":checked");

                        if(ischecked)
                       {
                        $('#EditMovie')[0].reset();
                        $('#uploaded_file').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        $('.btn btn-info').attr("enabled","enabled");
                        $('#EditMovie').css("opacity","1");
                       }
                       else
                       {
                        $(".spinner").hide();
                        $('#EditMovie').css("opacity","1");
                       }
                     $message="Edited Successfully";
                     $type="success";
                    shownoti($type,$message);
                    setTimeout(location.reload(), 10000);

                    if(ischecked)
                    {
                    $('.progress-bar').hide();
                    $('#uploaded_file').html('');
                    $('#row'+2+'').remove();  
                    $('#row'+3+'').remove();  
                    }
                 
                   
                    }else if(json == 'failed'){
                        $('#uploaded_file').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                    }
                  
                },
                error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });






</script>                 			                  

<?php include('footer.php');?>