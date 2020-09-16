<?php 

  include 'database.php';

  $db = new Database();
$data = $db->view();

 

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
      <span class="float-right mb-2"><a href="add.php" class="btn btn-success">Add New</a> </span>
      <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        while ($row = mysqli_fetch_object($data)) {
            
      ?>
      <tr>
        <td><?= $row->id?></td>
        <td><?= $row->name?></td>
        <td><?= $row->email?></td>
        <td><?= $row->contact?></td>
        <td>
          <a href="edit.php?id=<?= $row->id?>" class="btn btn-primary">Edit</a>
          <a href="delete.php?id=<?= $row->id?>" class="btn btn-danger">Delete</a>
        </td>
        
      </tr>
    <?php } ?>
    </tbody>
  </table>
    </div>
  </div>
</div>

</body>
</html>
