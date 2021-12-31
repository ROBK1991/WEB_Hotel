<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="/web_hotel/res/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Dashboard</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    <?php
    include '../inc/nav.php';
    ?>  
        <div class="main">
            <div class="fontheader">
                <h1>Dashboard</h1><br>
            </div>
            
<!-- 2c) Put the upload form here-->
<div class = container upload>
<form action="" method="post" enctype="multipart/form-data">
 <label for="pdf">PDF Uploader</label><br>
 <input type="file" name="pdf" id="pdf">
 <input type="submit" value="Upload"><br>
 <small> <strong>Note:</strong> Only pdf files are to be uploaded. With a maximum size of 15MB</small>
</form>


<?php 
//if the file is uploaded by clicking the upload button
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
    //if the file is uploaded with any errors encounterd
    if(isset($_FILES['pdf']) && $_FILES['pdf']['error'] == 0){

    //setting the allowed file format
    $allowed = array("pdf" => "application/pdf");

    //getting the files name,size and type using the $_FILES //superglobal
    $filename = $_FILES['pdf']['name'];
    $filesize = $_FILES['pdf']['size'];
    $filetype = $_FILES['pdf']['type'];

    //verifying the extention of the file
    $ext = pathinfo($filename,PATHINFO_EXTENSION);
    if(!array_key_exists($ext,$allowed)) die ("<p class='red'>Sorry, only PDF-files can be accepted!</p>");
    
    //verifying the file size
    $maxsize = 15 * 1024 * 1024;
    if($filesize > $maxsize) die("<p class='red'>Error: file size too large!!</p>");
    if(in_array($filetype,$allowed)){
    if(file_exists("/xampp/htdocs/web_hotel/uploads/".$filename)){
    die("<p class='red'>Sorry the file already exists</p>");
    echo "<br>";
    }else{
    move_uploaded_file($_FILES['pdf']['tmp_name'],"/xampp/htdocs/web_hotel/uploads/".$filename);
    die("<p class='green'>The File $filename has been uploaded<br></p>");
    }
   }else{
    echo "Sorry a problem was encountered when trying to upload data!!";
    echo "<br>";
    }
   }else{
    echo "Error: ". $_FILES['pdf']['error'];
    }

   //extra information describing the successfully uploaded file
    if($_FILES['pdf']['error'] == 0){
    echo "Filename: ". $_FILES['pdf']['name'] ."<br>";
    echo "Filetype :". $_FILES['pdf']['type'] . "<br>";
    echo "Filesize: ". ($_FILES['pdf']['size'] / 1024) . "KB <br>";
    }
   }?>
        </div>
        <?php
        include '../inc/footer.php';
        ?>
    </body>
</html>