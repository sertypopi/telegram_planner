<?php
   
  require '/Applications/MAMP/htdocs/planner/database/configDB.php';
  ?>


 <?php
 $id = $_GET['id'];

if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM `task_process` WHERE id = ?"; 


if ($pdo->prepare($sql)->execute([$id])) {
    
    header('Location: /planner/'); 
    exit;
} else {
    echo "Error deleting record";
}
?>