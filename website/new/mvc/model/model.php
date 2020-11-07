<?php

class DataBase extends SQLite3{

    var $conn;

    function __construct(){
         $this->open('tiendas.db');
    }

    function createTables(){
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
        file_name varchar(20));

      INSERT INTO users (myuser, password)VALUES ('admin', '12345678');
    sql;

      $res = $db->exec($q);
    }

    function db(){
      //connectar BD
      $this->conn = new DataBase();
      // Check connection
      if ($this->conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    }

    function closeConnectionBD(){
      $this->conn->close();
    }
/*
        function getIDNomCognom1Cognom2FromEstudiants(){
            $sql = "SELECT id, Nom, Cognom1, Cognom2 FROM Estudiants";
            $result = mysqli_query($this->conn, $sql);

            return $result;
        }

        function getUserByID($id){
            $sql = "SELECT * FROM Estudiants WHERE id='".$id."'";
            $result = mysqli_query($this->conn,$sql);

            return $result;
        }

        function addEstudiant($nom, $cognom1, $cognom2, $data, $sexe, $creditsSuperats, $creditsASuperar){
               $sql = "INSERT INTO Estudiants (Nom, Cognom1, Cognom2, DataNaix, Sexe, CreditsSuperats, CreditsASuperar) VALUES ('$nom', '$cognom1', '$cognom2', '$data', '$sexe', $creditsSuperats, $creditsASuperar)";

                if ($this->conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                };
        }
   }

*/
}
    $db = new DataBase();

?>
