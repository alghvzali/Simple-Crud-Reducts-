<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

  <body>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="teal darken-3">
            <div class="container">
            <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Reducts</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="tambah.php">Tambah</a></li>
                    <li><a href="kreasi.php">Kreasi</a></li>
                    <li class="disabled"><a href="#!">Blog</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>

    <!-- Sidenav -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="tambah.php">Tambah</a></li>
        <li><a href="kreasi.php">Kreasi</a></li>
        <li><a href="#!">Blog</a></li>
    </ul>

<?php
    include ('controller/config.php');
?>