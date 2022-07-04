<?php
   require 'configDB.php';

   $id = $_GET['id'];

    $sql = 'DELETE FROM `task_process` WHERE `id` = ?';
   $query = $pdo->prepare($sql);
   $query->execute([$id]);

   header('Location: /planner/');

?>