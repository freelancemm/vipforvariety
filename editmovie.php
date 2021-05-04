<?php
    include ('server.php');

    $iseditimage="";
   // $iseditmovie="";

    $iseditimage=mysqli_real_escape_string($conn,$_POST['ischeckedimage']);
    //$iseditmovie=mysqli_real_escape_string($conn,$_POST['ischeckedmovie']);



   if($iseditimage=="on")
   {
    $imagetarget="uploadimages/".basename($_FILES ['image'] ['name']);
    $image=$_FILES ['image'] ['name']; 
   }
//    if($iseditmovie=="on")
//    {
//     $movietarget="uploadmovies/".basename($_FILES['movie']['name']);
//     $movie=$_FILES ['movie'] ['name'];
//    }
    $movieid=$_POST['movieid'];

    $moviename=mysqli_real_escape_string($conn,$_POST['moviename']);
    $size=mysqli_real_escape_string($conn,$_POST['size']);
    $releaseyear=mysqli_real_escape_string($conn,$_POST['releaseyear']);
    $runtime=mysqli_real_escape_string($conn,$_POST['runtime']);
    $description=mysqli_real_escape_string($conn,$_POST['description']);
    $url1=mysqli_real_escape_string($conn,$_POST['url1']);
    $url2=mysqli_real_escape_string($conn,$_POST['url2']);
    $url3=mysqli_real_escape_string($conn,$_POST['url3']);
    $lastupdateddate=date("Y/m/d h:i:sa");

    // if($iseditimage=="on" && $iseditmovie=="on")
    // {

    //     $sql="UPDATE uploadedmovies SET moviename='$moviename',size='$size',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', imagepath='$imagetarget' ,moviepath='$movietarget', image='$image', movie='$movie',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    // }
    if($iseditimage=="on")
    {
       // $sql="UPDATE uploadedmovies SET moviename='$moviename',size='$size',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', imagepath='$imagetarget' , image='$image',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
       $sql="UPDATE uploadmovies INNER JOIN movieurls on uploadmovies.movieid=movieurls.movieid SET  moviename='$moviename',size='$size',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3',  URL4='$url4', URL5='$url5', URL6='$url6', URL7='$url7', URL8='$url8', URL9='$url9',URL10='$url10', imagepath='$imagetarget' , image='$image',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    }
    // else if($iseditimage=="" && $iseditmovie=="on")
    // {
    //     $sql="UPDATE uploadedmovies SET moviename='$moviename',size='$size',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', moviepath='$movietarget', movie='$movie',  lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
    // }
    else
    {
        $sql="UPDATE uploadedmovies INNER JOIN movieurls on uploadmovies.movieid=movieurls.movieid SET moviename='$moviename',size='$size',releaseyear='$releaseyear',runtime='$runtime',description='$description', URL1='$url1', URL2='$url2', URL3='$url3', URL4='$url4', URL5='$url5', URL6='$url6', URL7='$url7', URL8='$url8', URL9='$url9',URL10='$url10', lastupdateddate='$lastupdateddate' WHERE movieid=$movieid";
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