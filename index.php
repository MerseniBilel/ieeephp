<?php
require_once('connection.php');
$sql = "SELECT * FROM todo";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App IEEE</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <header>Todo App</header>
        <form action="create.php" method="POST">
            <div class="inputField">
                <input type="text" placeholder="Add your new todo" name="task">
                <button type="submit"><i class="fas fa-plus"></i></button>
            </div>
        </form>
        <ul class="todoList">
            <!-- fetch data from localstorage  -->
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li> " . $row["mytodo"] . " <a class='link' href='delete.php?id=$row[id]'> <span class='icon'>  <i class='fas fa-trash'></i>  </span> </a></li>";
                }
            }

            ?>
        </ul>
        <div class="footer">
            <span>You have <span class="pendingTasks"> <?php echo $result->num_rows; ?> </span> pending tasks</span>
            <form action="clearall.php">
                <button type="submit">Clear All</button>
            </form>

        </div>
    </div>


</body>

</html>