<?php include 'header.php'; ?>
<br>
<div class="container">
  <h2>Accomplished Tasks</h2>
  <hr>
  <div class="card">
    <ul class="list-group list-group-flush">
      <?php
        $sql = "SELECT * FROM tasks WHERE done = 1";
        $result = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($result)) {
          echo "<li class='list-group-item'>".$data['title'];
          echo "<div class='float-right'>";
          echo "<a href='controller/delete.php?id=".$data['id_task']."'><i class='fa fa-trash px-1' data-toggle='tooltip' data-placement='right' title='Delete history'></i></a>";
          echo "</div></li>";
        }
      ?>
    </ul>
  </div>
</div>
<?php include 'footer.php'; ?>
