<?php
   require '/Applications/MAMP/htdocs/planner/database/configDB.php';
   error_reporting(E_ALL);
   ini_set('display_errors', 1);

?>

//MAKE ID in post or get
<?php
   $task = $_POST['task_update'];
   $status = $_POST['status'];
   $id = $_POST['id'];

   var_dump($_POST);

   if($task == '' and $status == '') {
      echo 'получится пусто(';
      exit();
   }
    


 
 
   $sql = "UPDATE `task_process` SET `task` = ?,`status` = ? WHERE `id` = ?";
   $query = $pdo->prepare($sql);
   var_dump($query);

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


   $query->execute([$task, $status, $id]);
   var_dump($query);


    


   header('Location: /planner/');



?>
