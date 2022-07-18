<?php
   require 'configDB.php';
?>


<?php
    $task = $_POST['task_update'];
    $status = $_POST['status'];
    $id = $_POST['id'];

    var_dump($_POST);

    if($task == '' and $status == '') {
       echo 'получится пусто(';
       exit();
    }
    


 
 
    $sql = "UPDATE `task_process` SET `task` = ?,  `status` = ? WHERE id = ?";
    $query = $pdo->prepare($sql);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


    $query->execute([$task, $status, $id]);


    


    header('Location: /planner/');



?>
