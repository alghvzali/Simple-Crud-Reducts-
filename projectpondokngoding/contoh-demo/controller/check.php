<?php
    include('config.php');
    $id = $_GET['id'];

    $sql = "UPDATE tasks SET done = 1 where id_task = $id";
    mysqli_query($db, $sql);
    header("Location: ../tasks-list.php");
?>
