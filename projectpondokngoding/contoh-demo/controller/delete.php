<?php
    include('config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks where id_task = $id";
    mysqli_query($db, $sql);
    header("Location: ../tasks-list.php");
?>
