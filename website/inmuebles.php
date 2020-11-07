<!DOCTYPE html>
<html>
<head>
	<title>Vera</title>
</head>
<body>

<?php

include "./db/db_connect.php";

$query = $db->query("SELECT * FROM imagenes");
$filas = count($query); 

if($filas > 0){
  while($row = $query->fetchArray()) {
    $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
</body>
</html>
