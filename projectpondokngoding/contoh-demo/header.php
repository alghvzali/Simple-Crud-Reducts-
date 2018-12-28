<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todolist</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="/todolist">Home</a>
          <a class="nav-item nav-link" href="projectpondokngoding/contoh-demo/add-task.php">Add Task</a>
          <a class="nav-item nav-link" href="projectpondokngoding/contoh-demo/tasks-list.php">Tasks List</a>
          <a class="nav-item nav-link" href="projectpondokngoding/contoh-demo/accomplished-tasks.php">Accomplished Tasks</a>
        </div>
      </div>
    </nav>
    <?php include("controller/config.php");?>
