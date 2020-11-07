<?php
$message = "";
if( isset($_POST['submit_data']) ){
	// Includs database connection
	include "../db/db_connect.php";

	// Gets the data from post
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
  $query = <<<sql
    INSERT INTO inmueble (imagen, pais, zona, provincia, codigo_postal, direccion, coordenadas_map, fecha_construccion, propietario, tipo_inmueble, metros, habitacion, bano, condicion, precio) VALUES ('1', '$pais', '$zona', '$provincia', '$codigo_postal', '$direccion', '$coordenadas_map', '$fecha_construccion', '$propietario', '$tipo_inmueble', '$metros', '$habitacion', '$bano', '$condicion', '$precio');
sql;
	// Executes the query
	// If data inserted then set success message otherwise set error message
  $res = $db->exec($query);
	if($res){
		$message = "Data inserted successfully.";
    $db->close();
	}else{
		$message = "Sorry, Data is not inserted.";
    $db->close();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>
  <div style="width: 500px; margin: 20px auto;">
 
  <!-- showing the message here-->
  <div><?php echo $message;?></div>

    <table width="100%" cellpadding="5" cellspacing="1" border="1">
    <form action="insert.php" method="post">
      <tr>
        <td>Pais:</td>
        <td><input name="pais" type="text"></td>
      </tr>
      <tr>
        <td>Zona:</td>
        <td><input name="zona" type="text"></td>
      </tr>
      <tr>
        <td>Provincia:</td>
        <td><input name="provincia" type="text"></td>
      </tr>
      <tr>
        <td>Codigo postal:</td>
        <td><input name="codigo_postal" type="number"></td>
      </tr>
      <tr>
        <td>Dirección:</td>
        <td><input name="direccion" type="text"></td>
      </tr>
      <tr>
        <td>Coordenadas:</td>
        <td><input name="coordenadas_map" type="text"></td>
      </tr>
      <tr>
        <td>fecha_construcción:</td>
        <td><input name="fecha_construccion" type="numbe"></td>
      </tr>
      <tr>
        <td>Propietario:</td>
        <td><input name="propietario" type="text"></td>
      </tr>
      <tr>
        <td>Tipo inmueble:</td>
        <td><select name="tipo_inmueble">
              <option value="piso">piso</option> 
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
        <td><input name="metros" type="number"></td>
      </tr>
      <tr>
        <td>Habitaciones:</td>
        <td><input name="habitacion" type="number"></td>
      </tr>
      <tr>
        <td>Baños:</td>
        <td><input name="bano" type="number"></td>
      </tr>
      <tr>
        <td>Condición:</td>
        <td><select name="condicion">
              <option value="venta" selected>venta</option> 
              <option value="compra">compra</option>
              <option value="alquiler">alquiler</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Precio:</td>
        <td><input name="precio" type="number"></td>
      </tr>
      <tr>
        <td><a href="list.php">See Data</a></td>
        <td><input name="submit_data" type="submit" value="Insert Data"></td>
      </tr>
    </form>
    </table>
  </div>
</body>
</html>

