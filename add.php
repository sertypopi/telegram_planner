<?php
    $task = $_POST['task'];
    if($task == '') {
	    echo 'Не указана задача';
	    exit();
    }


  require 'configDB.php';
 
    $sql = 'INSERT INTO task_process(task) VALUES(:task)';
    $query = $pdo->prepare($sql);
    $query->execute(['task'=> $task]);


    header('Location: /planner/');



?>