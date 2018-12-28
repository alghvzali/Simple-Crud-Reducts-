<?php
    include('config.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE tasks SET nama = $nama, deskripsi = $deskripsi, gambar = $gambar where id = $id";
    mysqli_query($db, $sql);
    header("Location: ../kreasi.php");
?>
