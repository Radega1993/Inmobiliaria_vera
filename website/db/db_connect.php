<?php

  // Database name
  $database_name = "tiendas.db";
  // Database connection
  $db = new SQLite3($database_name);
  //if ($db){
  //  echo "<p> La base de datos 'tiendas' se abrio ok </p>";
  //} else {
  //  echo "<p> ERROR: La base de datos 'tiendas' esta NOK </p>";
  //}

  $q = <<<sql
  
  CREATE TABLE if not exists users (
    id int PRIMARY KEY,
    myuser varchar(10) NOT NULL,
    password varchar(10)NOT NULL);

  CREATE TABLE if not exists inmueble (
    id int PRIMARY KEY,
    imagen int,
    pais varchar(20),
    zona varchar(20),
    provincia varchar(20),
    codigo_postal int(5),
    direccion varchar(100),
    coordenadas_map varchar(50),
    fecha_construccion int(4),
    propietario varchar(20),
    tipo_inmueble varchar(7),
    metros int(4),
    habitacion int(2),
    bano int(2),
    condicion varchar(8),
    precio real);

  CREATE TABLE if not exists imagenes (
    id int PRIMARY KEY CONSTRAINT `imagenes_id` REFERENCES inmueble(`id`),
    nombre varchar(20),
    ruta varchar(20));
  
  INSERT INTO users (myuser, password)VALUES ('admin', '12345678');
sql;

  $res = $db->exec($q);
  //if ($res){
  //  echo "<p> La tabla se creo ok </p>";
    //$db->close();
  //} else {
  //  echo "<p> ERROR: La tabla esta NOK </p>";
    //$db->close();
  //}

?>
