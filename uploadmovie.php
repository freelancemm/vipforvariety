    <?php
    include ('server.php');
    $imagetarget="uploadimages/".basename($_FILES ['image'] ['name']);
    $movietarget="uploadmovies/".basename($_FILES['movie']['name']);

    $moviname=mysqli_real_escape_string($conn,$_POST['moviename']);
    $genre=mysqli_real_escape_string($conn,$_POST['genre']);
    $releaseyear=mysqli_real_escape_string($conn,$_POST['releaseyear']);
    $runtime=mysqli_real_escape_string($conn,$_POST['runtime']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $image=$_FILES ['image'] ['name']; 
    $movie=$_FILES ['movie'] ['name'];
    $url1=null;
    $url2=null;
    $url3=null;

    $lastupdateddate=date("Y/m/d h:i:sa");

    $number = count($_POST["url"]);  
    if($number > 0)  
    {  
         for($i=0; $i<$number; $i++)  
         {  
              if(trim($_POST["url"][$i] != ''))  
              {  
                  $url[$i]=$_POST["url"][$i];
              }
            //   if(trim($_POST["url"][1] != ''))  
            //   {  
            //       $url2=$_POST["url"][1];
            //   }
            //   if(trim($_POST["url"][2] != ''))  
            //   {  
            //       $url3=$_POST["url"][2];
            //   }   
         }  
        // echo "Data Inserted";  
    }  

   
    
    $sql="INSERT into uploadedmovies(moviename,genre,releaseyear,runtime,description,URL1,URL2,URL3,imagepath,moviepath,image,movie,lastupdateddate) VALUES('$moviname','$genre','$releaseyear','$runtime','$description','$url1','$url2','$url3','$imagetarget','$movietarget','$image','$movie','$lastupdateddate')";

    $result = mysqli_query($conn, $sql);

    move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget);
    move_uploaded_file($_FILES['movie']['tmp_name'], $movietarget);
    
    
    if ($result === true) {
        $json = 'success'; 
    }
    else 
    {
        $json = 'failed';
    }

    header('Content-Type: application/json');
    echo json_encode($json);

    ?>