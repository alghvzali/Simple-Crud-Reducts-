<?php
    include('config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM produk where id = $id";
    mysqli_query($db, $sql);
    header("Location: ../konfirmasi-kreasi.php");
?>
