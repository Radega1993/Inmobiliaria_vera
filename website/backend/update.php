<?php
$message = ""; // initial message 

// Includs database connection
include "../db/db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 
if( isset($_POST['submit_data']) ){

	// Gets the data from post
	$id = $_POST['id'];
  $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : '';
	$pais = $_POST['pais'];
	$zona = $_POST['zona'];
  $provincia = $_POST['provincia'];
  $codigo_postal = $_POST['codigo_postal'];
  $direccion = $_POST['direccion'];
  $coordenadas_map = $_POST['coordenadas_map'];
  $fecha_construccion = $_POST['fecha_construccion'];
  $propietario = $_POST['propietario'];
  $tipo_inmueble = $_POST['tipo_inmueble'];
  $metros = $_POST['metros'];
  $habitacion = $_POST['habitacion'];
  $bano = $_POST['bano'];
  $condicion = $_POST['condicion'];
  $precio = $_POST['precio'];

	// Makes query with post data
	$query = "UPDATE inmueble set imagen='$imagen', pais='$pais', zona='$zona', provincia='$provincia', codigo_postal='$codigo_postal', direccion='$direccion', coordenadas_map='$coordenadas_map', fecha_construccion='$fecha_construccion', propietario='$propietario', tipo_inmueble='$tipo_inmueble', metros='$metros', habitacion='$habitacion', bano='$bano', condicion='$condicion', precio='$precio' WHERE rowid=$id";
	
	// Executes the query
	// If data inserted then set success message otherwise set error message
	// Here $db comes from "db_connect.php"
	if( $db->exec($query) ){
		$message = "Data is updated successfully.";
	}else{
		$message = "Sorry, Data is not updated.";
	}
}

$id = $_GET['id']; // rowid from url
// Prepar the query to get the row data with rowid
$query = "SELECT rowid, * FROM inmueble WHERE rowid=$id";
$result = $db->query($query);
$data = $result->fetchArray(); // set the row in $data
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message;?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
      <tr>
        <td>Pais:</td>
        <td><input name="pais" type="text" value="<?php echo $data['pais'];?>"></td>
      </tr>
      <tr>
        <td>Zona:</td>
        <td><input name="zona" type="text" value="<?php echo $data['zona'];?>"></td>
      </tr>
      <tr>
        <td>Provincia:</td>
        <td><input name="provincia" type="text" value="<?php echo $data['provincia'];?>"></td>
      </tr>
      <tr>
        <td>Codigo postal:</td>
        <td><input name="codigo_postal" type="number" value="<?php echo $data['codigo_postal'];?>"></td>
      </tr>
      <tr>
        <td>Dirección:</td>
        <td><input name="direccion" type="text" value="<?php echo $data['direccion'];?>"></td>
      </tr>
      <tr>
        <td>Coordenadas:</td>
        <td><input name="coordenadas_map" type="text" value="<?php echo $data['coordenadas_map'];?>"></td>
      </tr>
      <tr>
        <td>fecha_construcción:</td>
        <td><input name="fecha_construccion" type="numbe" value="<?php echo $data['fecha_construccion'];?>"></td>
      </tr>
      <tr>
        <td>Propietario:</td>
        <td><input name="propietario" type="text" value="<?php echo $data['propietario'];?>"></td>
      </tr>
      <tr>
        <td>Tipo inmueble:</td>
        <td><select name="tipo_inmueble" value="<?php echo $data['tipo_inmueble'];?>">
              <option value="piso">Piso</option> 
              <option value="chalet">chalet</option>
              <option value="adosado">adosado</option>
              <option value="pareado">pareado</option>
              <option value="local">local</option>
              <option value="garaje">garaje</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Metros:</td>
        <td><input name="metros" type="number" value="<?php echo $data['metros'];?>"></td>
      </tr>
      <tr>
        <td>Habitaciones:</td>
        <td><input name="habitacion" type="number" value="<?php echo $data['habitacion'];?>"></td>
      </tr>
      <tr>
        <td>Baños:</td>
        <td><input name="bano" type="number" value="<?php echo $data['bano'];?>"></td>
      </tr>
      <tr>
        <td>Condición:</td>
        <td><select name="condicion" value="<?php echo $data['condicion'];?>">
              <option value="venta">venta</option> 
              <option value="compra">compra</option>
              <option value="alquiler">alquiler</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Precio:</td>
        <td><input name="precio" type="number" value="<?php echo $data['precio'];?>"></td>
      </tr>
			<tr>
				<td><a href="list.php">Back</a></td>
				<td><input name="submit_data" type="submit" value="Update Data"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>
