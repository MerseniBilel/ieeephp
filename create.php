<?php

require_once("connection.php");

if(isset($_POST["task"])){
    $task = $_POST["task"];
    // querry

    $sql = "INSERT INTO todo (mytodo) values('$task')";

    if ($conn->query($sql) === TRUE) {
        header('Location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

}

?>