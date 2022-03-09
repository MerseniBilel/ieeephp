<?php 
    require_once("connection.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM todo where id = $id";

        if ($conn->query($sql) === TRUE) {
            header('Location:index.php');
          } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

?>