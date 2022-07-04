
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Задачи</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
	<div class="container">
<h1>Список задач</h1>
<form action="/planner/add.php" method="post">
	<input type="text" name="task" id="task_input" placeholder="Добавить задачу" class="form_control">
	<button type='submit' name="send_task" class="btn btn-success">Отправить задачу</button>
</form>
  <?php
  require 'configDB.php';

  echo '<ul>';

  $query = $pdo->query('SELECT * FROM `task_process` order by `id` DESC');
  while($row = $query->fetch(PDO::FETCH_OBJ)) {
  	
  	echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
      }
  echo '</ul>';
  ?>
  </div>
</body>
</html>
