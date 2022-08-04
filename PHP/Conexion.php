<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "munsteruniversity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: Pos falló " . $conn->connect_error);
  exit();
} else{
  echo "Conexion exitosa";
}

    
?>