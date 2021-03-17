
<?php include('header.php');?>
<?php include('sidebar.php');?>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.0.js" integrity="sha256-iqD4S1Mx78w8tyx9UEwrxuvYYdoAPXLDPfmc5lDUUx0=" crossorigin="anonymous"></script>

<style>
.loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}



</style>


<div id="layoutSidenav_content" style="margin-top: 20px;">
                <main>
                
                    <div class="container-fluid">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-folder-plus mr-1"></i>
                                Movie Insert Form
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" enctype="multipart/form-data" id="addmovie" >
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">Movie Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="moviename" placeholder="Enter movie name.." name="moviename" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="moviename">Size:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="size" placeholder="Enter movie name.." name="size" required="">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="releaseyear">Release Year:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="releaseyear" placeholder="Enter Release Year.." name="releaseyear" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="runtime">Runtime:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="runtime" placeholder="Enter Runtime.." name="runtime" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="description">Description:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="10" name="description" placeholder="Enter Description.." style="height: 250px;"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                  <div class="table-responsive">
                                  <label class="control-label col-sm-3" for="description">Other URL:</label>  
                               <table class="table table-borderless " id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="url[]" placeholder="Enter URL" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                              
                          </div>  
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="image">Upload Image:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" id="image" accept="image/*">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="movie">Upload Movie:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="movie" id="movie" accept="video/*">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="control-label col-sm-3" for="movie">Upload Video:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="movie" id="movie"  accept="video/*" >
                                    </div>
                                </div> -->
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="add-movie" class="btn btn-info"  onclick=upload_movie()>Submit</button>
                                    </div>
                                </div>
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

                  
<script type="text/javascript">

      var i=1;  
        jQuery(document).on('submit', '#addmovie', function(e){
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
                url: 'uploadmovie.php',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType:'json',
 
                beforeSend: function(){
                    $('.btn btn-info').attr("disabled","disabled");
                    $('.progress-bar').show();
                    $('#addmovie').css("opacity",".5");
                    $("#file-progress-bar").width('0%');
                },
 
                success: function(json){
                    if(json == 'success'){
                        $('#addmovie')[0].reset();
                        $('#uploaded_file').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');

                        $('.btn btn-info').attr("enabled","enabled");
                        $('#addmovie').css("opacity","1");
                     $message="Uploaded Successfully";
                     $type="success";
                    shownoti($type,$message);
                    $('.progress-bar').hide();
                    $('#uploaded_file').html('');
                    $('#row'+2+'').remove();  
                    $('#row'+3+'').remove();  
                    i=1;
                   
                    }else if(json == 'failed'){
                        $('#uploaded_file').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                    }
                  
                },
                error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
      
        // // Check File type validation
        // $("#upl-file").change(function(){
        //     var allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'application/pdf', 'application/msword', 'application/vnd.ms-office', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        //     var file = this.files[0];
        //     var fileType = file.type;
        //     if(!allowedTypes.includes(fileType)) {
        //         jQuery("#chk-error").html('<small class="text-danger">Please choose a valid file (JPEG/JPG/PNG/GIF/PDF/DOC/DOCX)</small>');
        //         $("#upl-file").val('');
        //         return false;
        //     } else {
        //       jQuery("#chk-error").html('');
        //     }
        // });
  


 $(document).ready(function(){  
   
      $('#add').click(function(){  
          if(i<3)
          {
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="url[]" placeholder="Enter URL" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
          } 
          else{
             
              $message="Exceed the url limit";
              $type="warning";
              shownoti($type,$message);
           // alert("Exceed the url limit")
          }
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
           i--;
      });  
     
 });  
 </script>

  

                    <!-- <script>
                    
function upload_movie() 
{
  var bar = $('#bar');
  var percent = $('#percent');
  $('#myForm').ajaxForm({
    beforeSubmit: function() {
      document.getElementById("progress_div").style.display="block";
      var percentVal = '0%';
      bar.width(percentVal)
      percent.html(percentVal);
    },

    uploadProgress: function(event, position, total, percentComplete) {
      var percentVal = percentComplete + '%';
      bar.width(percentVal)
      percent.html(percentVal);
    },
    
	success: function() {
      var percentVal = '100%';
      bar.width(percentVal)
      percent.html(percentVal);
    },

    complete: function(xhr) {
      if(xhr.responseText)
      {
        document.getElementById("output_image").innerHTML=xhr.responseText;
      }
    }
  }); 
}
                    </script> -->

                    			                  

<?php include('footer.php');?>