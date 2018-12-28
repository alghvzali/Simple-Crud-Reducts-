<?php 
    include ('header.php');
?>

<div class="container mb-40px">
    <h3>Konfirmasi Kreasi</h3>
    <hr></hr>

<?php
    $sql = "SELECT * FROM produk WHERE konfirmasi = 0 ORDER BY id DESC";
    $result = mysqli_query($db, $sql);
    while ($data = mysqli_fetch_array($result)) {
        echo "
        <div class='row'>
            <div class='col s12 m4'>
                <h5 class='nama-pembuat'>". $data['nama'] . "</h5>
                <div class='card large'>
                    <div class='card-image'>
                    <img src='images/". $data['gambar'] . "'>
                    </div>
                    <div class='card-content'>
                        <p>". $data['deskripsi'] . "</p>
                    </div>
                    <div class='card-action'>
                    <a href='controller/konfirmasi.php?id=".$data['id']."'><i class='material-icons small teal-text text-darken-3' alt='ceklist'>check</i></a>
                        <a href='controller/hapus.php?id=".$data['id']."'><i class='material-icons small teal-text text-darken-3' alt='Hapus'>delete</i></a>
                    </div>
            </div>
        </div>";
    }
?>
</div>





    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>


<script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    $(document).ready(function(){
        $('.parallax').parallax();
    });
    
</script>