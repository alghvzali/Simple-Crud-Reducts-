<?php
    include('config.php');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "UPDATE tasks SET title = $title, description = $desc, date = $date, time = $time where id_task = $id";
    mysqli_query($db, $sql);
    header("Location: ../tasks-list.php");
?>
