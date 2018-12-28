<?php
    include('config.php');

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO tasks (title, description, date, time) VALUES ('$title', '$desc', '$date', '$time')";
    mysqli_query($db, $sql);
    header("Location: ../tasks-list.php");
?>
