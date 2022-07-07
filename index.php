<?php

  require_once 'configDB.php';
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Задачи</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
<h1>Список задач</h1>
<form action="/planner/add.php" method="post">
	<input type="text" name="task" id="task_input" placeholder="Добавить задачу" class="form_control">
	<button type='submit' name="send_task" class="btn btn-success">Отправить задачу</button>
</form>
  <?php
  //require_once 'configDB.php';

  echo '<div class="column">';

  
  $query = $pdo->query('SELECT * FROM `task_process` order by `id` DESC');
  while($row = $query->fetch(PDO::FETCH_OBJ)) {

  	echo '<table class="table table-sm">';
foreach($row as $v=>$k) {
        echo '<th scope="row">'.$v.'</th><tbody><td class="table-success">'.$k.'</tbody></td>';
        echo '<form action="/delete.php?id='.$k->id.'" method="get">

	<button type="delete" name="delete" class="btn btn-success">Удалить</button>
</form>';
    }
echo '</table>';
  	
  	echo '<div class="row justify-content-center"><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></div>';
      }
  echo '</div>';

  ?>
 
  </div>
</body>
</html>
