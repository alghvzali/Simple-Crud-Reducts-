<?php
include 'header.php';
$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id_task = $id";
$result = mysqli_query($db, $sql);
$data = mysqli_fetch_array($result);
?>

<br>
<div class="container">
  <h2>Edit Your Task</h2>
  <hr>
  <div class="card">
    <div class="card-body">
      <form action="controller/edit.php" method="post">
        <div class="form-group">
          <label>Task Title</label>
          <input type="text" class="form-control" name="title" value="<?php echo $data['title'] ?>">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" rows="3" name="desc"><?php echo $data['description'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="date" class="form-control" name="date" value="<?php echo $data['date'] ?>">
        </div>
        <div class="form-group">
          <label>Time</label>
          <input type="time" class="form-control" name="time" value="<?php echo $data['time'] ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id_task'] ?>">
        <input type="submit" class="btn btn-addtask" name="" value="Update">
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
