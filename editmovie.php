<?php
    include ('server.php');

    $iseditimage="";
    $iseditmovie="";

    $iseditimage=mysqli_real_escape_string($conn,$_POST['ischeckedimage']);
    $iseditmovie=mysqli_real_escape_string($conn,$_POST['ischeckedmovie']);



   if($iseditimage=="on")
   {
    $imagetarget="uploadimages/".basename($_FILES ['image'] ['name']);
    $image=$_FILES ['image'] ['name']; 
   }
   if($iseditmovie=="on")
   {
    $movietarget="uploadmovies/".basename($_FILES['movie']['name']);
    $movie=$_FILES ['movie'] ['name'];
   }
    $movieid=$_POST['movieid'];

    $moviename=mysqli_real_escape_string($conn,$_POST['moviename']);
    $genre=mysqli_real_escape_string($conn,$_POST['genre']);
    $releaseyear=mysqli_real_escape_string($conn,$_POST['releaseyear']);
    $runtime=mysqli_real_escape_string($conn,$_POST['runtime']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $url1=mysqli_real_escape_string($conn,$_POST['url1']);
    $url2=mysqli_real_escape_string($conn,$_POST['url2']);
    $url3=mysqli_real_escape_string($conn,$_POST['url3']);
    $lastupdateddate=date("Y/m/d h:i:sa");

    if($iseditimage=="on" && $iseditmovie=="on")
    {

        $sql="UPDATE uploadedmovies SET moviename='$moviename',genre='$genre',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', imagepath='$imagetarget' ,moviepath='$movietarget', image='$image', movie='$movie',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    }
    else if($iseditimage=="on" && $iseditmovie=="" )
    {
        $sql="UPDATE uploadedmovies SET moviename='$moviename',genre='$genre',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', imagepath='$imagetarget' , image='$image',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    }
    else if($iseditimage=="" && $iseditmovie=="on")
    {
        $sql="UPDATE uploadedmovies SET moviename='$moviename',genre='$genre',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', moviepath='$movietarget', movie='$movie',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    }
    else
    {
        $sql="UPDATE uploadedmovies SET moviename='$moviename',genre='$genre',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    }



    $result = mysqli_query($conn, $sql);

    if($iseditimage=="on")
    {
    move_uploaded_file($_FILES['image']['tmp_name'], $imagetarget);
    }
    if($iseditmovie=="on")
    {
    move_uploaded_file($_FILES['movie']['tmp_name'], $movietarget);
    }
    
    
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