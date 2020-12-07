<?php

include_once "./model/model.php";

$query = $db->query("SELECT * FROM imagenes");
$filas = 0; //set row counter to 0
while($filas = $query->fetchArray()) {
    $filas += 1; //+1 to the counter per row in result
}

if($filas > 0){
  while($row = $query->fetchArray()) {
    $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
