<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS DB " ;

sql to create table
$sql = "DROP TABLE IF EXISTS MyValues"; 
$sql = "CREATE TABLE MyValues (
Sval CHAR(6) NOT NULL
)";

//insert Values
if (isset($_GET['controlr'])){
$sql = "INSERT INTO MyValues (Sval)
VALUES ('r')";
if ($conn->query($sql) === TRUE) {
  echo "r";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif (isset($_GET['controlf'])){
$sql = "INSERT INTO MyValues (Sval)
VALUES ('f')";
if ($conn->query($sql) === TRUE) {
  echo "f";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif (isset($_GET['controlb'])){
$sql = "INSERT INTO MyValues (Sval)
VALUES ('b')";
if ($conn->query($sql) === TRUE) {
  echo "b";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif (isset($_GET['controll'])){
$sql = "INSERT INTO MyValues (Sval)
VALUES ('l')";
if ($conn->query($sql) === TRUE) {
  echo "l";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif (isset($_GET['controls'])){
$sql = "INSERT INTO MyValues (Sval)
VALUES ('s')";
if ($conn->query($sql) === TRUE) {
  echo "s";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>

