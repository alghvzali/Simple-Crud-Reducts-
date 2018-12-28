<?php include 'header.php'; ?>
<br>
<div class="container">
  <h2>Incoming Deadline Task</h2>
  <hr>
  <?php
    $sql = "SELECT * FROM tasks WHERE date > CURDATE()";
    $result = mysqli_query($db, $sql);
    while ($data = mysqli_fetch_array($result)) {
      echo "<div class='alert alert-danger' role='alert'>".$data['title']."</div>";
    }

    $sql = "SELECT * FROM tasks WHERE date BETWEEN DATE_SUB(CURDATE(), INTERVAL 2 DAY) and CURDATE()";
    $result = mysqli_query($db, $sql);
    while ($data = mysqli_fetch_array($result)) {
      echo "<div class='alert alert-warning' role='alert'>".$data['title']."</div>";
    }

  ?>

</div>
<?php include 'footer.php'; ?>
