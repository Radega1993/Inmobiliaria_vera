<?php

// Includs database connection
include "../db/db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM inmueble";

// Run the query and set query result in $result
// Here $db comes from "db_connect.php"
$result = $db->query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data List</title>
</head>
<body>
	<div style="width: auto; margin: 20px auto;">
		<a href="insert.php">Add New</a>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<td>Pais</td>
				<td>Zona</td>
        <td>Provincia</td>
        <td>CP</td>
				<td>Direccion</td>
        <td>Coordenadas</td>
        <td>Fecha</td>
        <td>Propietario</td>
				<td>Tipo</td>
        <td>metros</td>
        <td>Habitaciones</td>
				<td>Baños</td>
        <td>Condicion</td>
        <td>Precio</td>
			</tr>
			<?php while($row = $result->fetchArray()) {?>
			<tr>
				<td><?php echo $row['pais'];?></td>
				<td><?php echo $row['zona'];?></td>
	      <td><?php echo $row['provincia'];?></td>
				<td><?php echo $row['codigo_postal'];?></td>
	      <td><?php echo $row['direccion'];?></td>
				<td><?php echo $row['coordenadas_map'];?></td>
	      <td><?php echo $row['fecha_construccion'];?></td>
        <td><?php echo $row['propietario'];?></td>
				<td><?php echo $row['tipo_inmueble'];?></td>
	      <td><?php echo $row['metros'];?></td>
				<td><?php echo $row['habitacion'];?></td>
        <td><?php echo $row['bano'];?></td> 
        <td><?php echo $row['condicion'];?></td>
        <td><?php echo $row['precio'];?></td>
        <td>
					<a href="update.php?id=<?php echo $row['rowid'];?>">Edit</a> | 
					<a href="delete.php?id=<?php echo $row['rowid'];?>"  confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>
