<!DOCTYPE html>
<html>
    <?php
        include ('header.php');
    ?>
<!--
  <head>
    Import Google Icon Font
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    Import materialize.css
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    Let browser know website is optimized for mobile
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    Navbar
    <div class="navbar-fixed">
        <nav class="teal darken-3">
            <div class="container">
            <div class="nav-wrapper">
            <a href="#" class="brand-logo">Reducts</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="tambah.php">Tambah</a></li>
                    <li><a href="">Menu2</a></li>
                    <li><a href="">Menu3</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>

    Sidenav
    <ul class="sidenav" id="mobile-demo">
        <li><a href="tambah.php">Tambah</a></li>
        <li><a href="">Menu2</a></li>
        <li><a href="">Menu3</a></li>
    </ul>-->

    <!-- Parallax Bagian 1 -->
    <div class="parallax-container valign-wrapper">
        <div class="">
            <div class="row">
                <div class="col m6 offset-m1 s12">
                    <h3 class="left-align valign reducts-text">Take care of the earth and the earth will take care of you.</h3>
                </div>
            </div>
        </div>
        <div class="parallax reducts-image"><img src="images/parallax-reducts.jpg"></div>
    </div>

    <div class="section white">
      <div class="row container">
        <h3 class="header">Reducts adalah</h3>
        <h4 class="grey-text text-darken-3 lighten-3">Tempat untuk berbagi kreasi produk daur ulang sebagai contoh atau inspirasi.</h4>
      </div>
    </div>

    <!-- Parallax Bagian 2 -->
    <div class="parallax-container parallax-bagian2 valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col m12 s12">
                    <h4 class="center-align valign reducts-text">BAGI KREASI ANDA SEKARANG</h4>
                </div>
            </div>
            <div class="row center">
                <a class="valign-wrapper right-align btn waves-effect waves-light" type="" name="action" href="tambah.php">Bagi Sekarang
                    <i class="material-icons right">send</i>
                </a>
            </div>
        </div>
        <div class="parallax reducts-image"><img src="images/parallax-bagian2.jpg"></div>
    </div>

    <footer class="page-footer teal darken-3">
        <div class="footer-copyright teal darken-3">
            <div class="container">         
                © 2018 Copyright Reducts
                <a class="grey-text text-lighten-4 right" href="#">Back to top</a>
            </div>
        </div>
    </footer>

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
  </body>
</html>