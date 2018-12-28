<?php
    include ("header.php");
?>

<!--<div class="row">
    <div class="col m4 s12">
        <h5></h5>
        <div class="card large">
            <div class="card-image">
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>-->
<body>

<?php
    $sql = "SELECT * FROM produk WHERE konfirmasi = 1 ORDER BY id DESC";
    $result = mysqli_query($db, $sql);
    while ($data = mysqli_fetch_array($result)) {
        echo "<div class='row'>";
        echo "<div class='col m4 s12'>";
        echo "<h5 class='nama-pembuat'>". $data['nama'] . "</h5>";
        echo "<div class= 'card large'>";
        echo "<div class='card-image'>";
        echo "<img src='images/". $data['gambar'] . "'>";
        echo "<div class='card-content'";
        echo "<p>" .$data['deskripsi']."</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

    }
?>
<!--
 /*
        $sql = "SELECT * FROM tasks WHERE done = 0 ORDER BY id_task DESC";
        $result = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($result)) {
          echo "<li class='list-group-item'>";
          echo "<div class='float-right'>";
          echo "<a href='edit-task.php?id=".$data['id_task']."'><i class='fa fa-edit px-1'></i></a>";
          echo "<a href='controller/delete.php?id=".$data['id_task']."'><i class='fa fa-trash px-1'></i></a>";
          echo "<a href='controller/check.php?id=".$data['id_task']."'><i class='fa fa-check px-1'></i></a>";
          echo "</div>";
        } */
?>-->


    <!--<footer class="page-footer teal darken-3">
        <div class="footer-copyright teal darken-3">
            <div class="container">         
                © 2018 Copyright Reducts
                <a class="grey-text text-lighten-4 right" href="#">Back to top</a>
            </div>
        </div>
    </footer>-->

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