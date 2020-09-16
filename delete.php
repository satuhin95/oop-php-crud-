<?php 

 include 'database.php';

  $db = new Database();

$id = $_GET['id'];

$db->delete($id);

?>