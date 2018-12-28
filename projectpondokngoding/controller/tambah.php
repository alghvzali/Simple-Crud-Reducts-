<?php
    include('config.php');

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];
    $ext = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));

    // Initialize message variable
    $msg = "";

    // If upload button is clicked ...
    if (isset($_POST['tambah'])) {
        // Get image name
        $gambar = $_FILES['gambar']['name'];
        // Get text
        $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);

        // Allowed extension 
        $jenis_file = array("jpg", "png", "jpeg");

        // image file directory
        $target = "../images/".basename($gambar);

        $sql = "INSERT INTO produk (nama, deskripsi, gambar) VALUES ('$nama', '$deskripsi', '$gambar')";
        // execute query
        mysqli_query($db, $sql);

        if(in_array($ext, $jenis_file) == FALSE){
            $errors[] = "Ekstensi tidak diperbolehkan, hanya boleh berupa jpg, png, dan jpeg";
        }
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }
    $result = mysqli_query($db, "SELECT * FROM produk");
    //echo '<h4 class ="left grey-text">Kreasi anda berhasil dikirim. Tunggu konfirmasi dari Admin.</h4>';
    header("Location: ../konfirmasi-kreasi.php")
    

    /*$sql = "INSERT INTO produk (nama, deskripsi, gambar) VALUES ('$nama', '$deskripsi', '$gambar')";
    mysqli_query($db, $sql);
    header("Location: ../kreasi.php");*/
?>
