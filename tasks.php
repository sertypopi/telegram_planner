 <?php
  require_once 'configDB.php';

  global $data;
  $data = $pdo->query('SELECT `id`, `task`, `time_start` FROM `task_process` order by `id` DESC')->fetchAll();

  ?>