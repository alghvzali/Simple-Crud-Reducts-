<?php
    include('config.php');
    //$id = $_GET['id'];

    $sql = "UPDATE produk SET konfirmasi = 1 WHERE id";
    mysqli_query($db, $sql);
    header("Location: ../kreasi.php");
?>