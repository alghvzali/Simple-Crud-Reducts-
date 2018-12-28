<?php
  include 'header.php';
?>

<br>
<div class="container">
  <h2>Add Your New Task</h2>
  <hr>
  <div class="card">
    <div class="card-body">
      <form action="controller/save.php" method="post">
        <div class="form-group">
          <label>Task Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="desc" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="date" class="form-control" name="date">
        </div>
        <div class="form-group">
          <label>Time</label>
          <input type="time" class="form-control" name="time">
        </div>
        <input type="submit" class="btn btn-addtask" name="save" value="Save">
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
