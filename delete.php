<?php
   
  require 'configDB.php';
  ?>


 <?php
 $id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method

if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM `task_process` WHERE id = ?"; 


if ($pdo->prepare($sql)->execute([$id])) {
    
    header('Location: index.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>