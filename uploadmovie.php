    <?php
    include ('server.php');
    $imagetarget="uploadimages/".basename($_FILES ['image'] ['name']);
   

    $moviname=mysqli_real_escape_string($conn,$_POST['moviename']);
    $size=mysqli_real_escape_string($conn,$_POST['size']);
    $releaseyear=mysqli_real_escape_string($conn,$_POST['releaseyear']);
    $runtime=mysqli_real_escape_string($conn,$_POST['runtime']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $image=$_FILES ['image'] ['name']; 
    $movie=mysqli_real_escape_string($conn,$_POST['movie']);
    $url1=null;
    $url2=null;
    $url3=null;
    $url4=null;
    $url5=null;
    $url6=null;
    $url7=null;
    $url8=null;
    $url9=null;
    $url10=null;


    $lastupdateddate=date("Y/m/d h:i:sa");

    $number = count($_POST["url"]);  
    if($number > 0)  
    {  
         for($i=0; $i<$number; $i++)  
         {  
              if(trim($_POST["url"][$i] != ''))  
              {  
                  if($i==0)
                  {
                  $url1=$_POST["url"][0];
                  }
                  if($i==1)
                  {
                  $url2=$_POST["url"][1];
                  }
                  if($i==2)
                  {
                  $url3=$_POST["url"][2];
                  }
                  if($i==3)
                  {
                  $url4=$_POST["url"][3];
                  }
                  if($i==4)
                  {
                  $url5=$_POST["url"][4];
                  }
                  if($i==5)
                  {
                  $url6=$_POST["url"][5];
                  }
                  if($i==6)
                  {
                  $url7=$_POST["url"][6];
                  }
                  if($i==7)
                  {
                  $url8=$_POST["url"][7];
                  }
                  if($i==8)
                  {
                  $url9=$_POST["url"][8];
                  }
                  if($i==9)
                  {
                  $url10=$_POST["url"][9];
                  }
              }
          
         }  
        // echo "Data Inserted";  
    }  

   
    try{
    $sql="INSERT into uploadedmovies(moviename,size,releaseyear,runtime,description,imagepath,moviepath,image,movie,lastupdateddate) VALUES('$moviname','$size','$releaseyear','$runtime','$description','$imagetarget','$movie','$image','$movie','$lastupdateddate')";

    $result = mysqli_query($conn, $sql);

    if ($result === true) {

        move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget);

        $inserted_id=$conn->insert_id;

        $sql2="INSERT INTO movieurls (movieid,URL1,URL2,URL3,URL4,URL5,URL6,URL7,URL8,URL9,URL10,lastupdateddate) VALUES($inserted_id,'$url1','$url2','$url3','$url4','$url5','$url6','$url7','$url8','$url9','$url10','$lastupdateddate')";
       
       $finalresult=mysqli_query($conn,$sql2);

       if($finalresult===TRUE)
       {

        $json = 'success';
       }
       else
       {
        $json = 'failed';

       }
       
       
    }
    else 
    {
        $json = 'failed';
    }

    header('Content-Type: application/json');
    echo json_encode($json);

    }
    catch(Exception $ex)
    {
    $json=$ex;
    header('Content-Type: application/json');
    echo json_encode($json);
    }

   
    
    
    ?>