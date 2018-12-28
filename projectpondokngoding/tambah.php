<?php
    include ('header.php');
?>

<div class="container">
    <div class="row">
        <form class="col s12" action="controller/tambah.php" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="input-field col m12 s12 mt-80px">
                    <input placeholder="Masukkan nama anda" id="nama" type="text" name="nama" class="validate" required="" aria-required="true">
                    <label for="title">Nama</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea validate" placeholder="Masukkan deskripsi produk kreasi anda" name="deskripsi" length="140" required="" aria-required="true"></textarea>
                    <label for="description">Deskripsi</label>
                </div>
            </div>
            <div class="row">
                <div class="col m12 s12">
                    <h5>Upload foto kreasi anda</h5>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span><i class="material-icons">photo</i></span>
                            <input type="file" class="validate" name="gambar" required="" aria-required="true">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="gambar">
                        </div>
                    </div>
                <!--<h5>Upload gambar kreasi anda</h5>
                <div class="input-field col m12 s12 mt-40px">
                    <input id="title" type="file" name="gambar" class="validate" enctype="multiport/multidata">
                </div>-->
                </div>
            </div>
            <div class="row right mb-60px">
                <button class="valign-wrapper right-align btn waves-effect waves-light" type="submit" name="tambah">Kirim
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>



<?php
    include ('footer.php');
?>


    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        $(document).ready(function(){
            $('.parallax').parallax();
        });   
    </script>