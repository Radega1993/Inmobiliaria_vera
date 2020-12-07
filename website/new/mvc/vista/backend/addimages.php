<?php
if(isset($_POST['submit'])){
  include "../db/db_connect.php";
$statusMsg = '';

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
  // Allow certain file formats
  $allowTypes = array('jpg','png','jpeg');
  if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
      // Insert image file name into database
      $insert = $db->query("INSERT INTO imagenes (file_name) VALUES ('".$fileName."')");
      if($insert){
        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
      }else{
        $statusMsg = "File upload failed, please try again.";
      } 
    }else{
      $statusMsg = "Sorry, there was an error uploading your file.";
    }
  }else{
    $statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
  }
}else{
  $statusMsg = 'Please select a file to upload.';
}
}
// Display status message
echo $statusMsg;

//  $imageName = $db->escapeString($_FILES["myfile"]["name"]);
//  $imageData = $bd->escapeString(file_get_contents($_FILES["myfile"]["tmp_name"]));
//  $imageType = $db->escapeString($_FILES["myfile"]["type"]);

//  if(substr($imgType,0,5) == "myfile"){
//    $query = <<<sql
//      INSERT INTO imagenes (image, name) VALUES ('$imageData', '$imageName');
//    sql;
//    $res = $db->exec($query);
//    echo "image uploaded!";
//  }else{
//    echo "Only images are allowed!";
//  }
//}
?>
<html>
  <head>
    <title> Add images </title>
   <!-- <link rel="stylesheet" type="text/css" href="../css/backend_style.css">-->
  </head>
  <body>
    <form action="addimages.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
    </form>
  </body>
</html>
