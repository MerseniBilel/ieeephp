<?php 
require_once("connection.php");

$sql = "DELETE FROM todo";

if ($conn->query($sql) === TRUE) {
    header('Location:index.php');
  } else {
    echo "Error deleting record: " . $conn->error;
}

?>