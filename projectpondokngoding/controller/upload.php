<?php
    /*$tmp = $_FILE['file']['tmp_name'];
    $name = $_FILE['file']['name'];
    $size = $_FILE['file']['size'];
    $ext = end(explode('.', $name));*/
    include ('config.php');

    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $tipe_file   = $_FILES['gambar']['type'];
    $nama_file   = $_FILES['gambar']['name'];
    $direktori   = "../images/$nama_file";
    
?>