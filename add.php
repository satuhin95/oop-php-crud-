<?php 

  include 'database.php';

  $db = new Database();

  if (isset($_POST['submit'])) {
    $db->Insert($_POST);
    
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  
  <div class="row">
    <div class="col-sm-8 offset-2">
      <h1>All User</h1>
      <span class="float-right mb-2"><a href="index.php" class="btn btn-success">View all</a> </span>
      <form action="" method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Name" >
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter Email" >
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" name="contact" class="form-control" placeholder="Enter Contact" >
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>

</body>
</html>
