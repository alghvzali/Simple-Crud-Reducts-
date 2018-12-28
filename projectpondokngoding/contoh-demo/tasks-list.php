<?php include 'header.php'; ?>
<br>
<div class="container">
  <h2>List of Tasks</h2>
  <hr>
  <div class="card">
    <ul class="list-group list-group-flush">
      <?php
        $sql = "SELECT * FROM tasks WHERE done = 0 ORDER BY id_task DESC";
        $result = mysqli_query($db, $sql);
        while ($data = mysqli_fetch_array($result)) {
          echo "<li class='list-group-item'>". $data['title'];
          echo "<div class='float-right'>";
          echo "<a href='edit-task.php?id=".$data['id_task']."'><i class='fa fa-edit px-1'></i></a>";
          echo "<a href='controller/delete.php?id=".$data['id_task']."'><i class='fa fa-trash px-1'></i></a>";
          echo "<a href='controller/check.php?id=".$data['id_task']."'><i class='fa fa-check px-1'></i></a>";
          echo "</div>";
        }
      ?>
    </ul>
  </div>
</div>
<?php include 'footer.php'; ?>
