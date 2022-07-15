<?php 
require 'configDB.php';
?>

<?php
var_dump($_POST);
    $task = $_POST['task'];
    if($task == '') {
      echo 'Не указана задача';
      exit();
    }

    $status = 'в очереди';

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);



  
 
    $sql = "INSERT INTO task_process(task, status) VALUES(:task, :status)";
    $query = $pdo->prepare($sql);
    print_r($query);
    $query->execute(['task'=> $task, 'status'=> $status]);




    header('Location: /planner/');
     



?>