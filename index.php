<?php

  require 'configDB.php';
  require 'tasks.php';
  
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

<form action="/planner/add.php" method="post">
	<input type="text" name="task" id="task_input" placeholder="Добавить задачу" class="form_control">
	<button type='submit' name="send_task" class="btn btn-success">Отправить задачу</button>
</form>

 
  </div>
  <div class="container" >
  <h1>Список задач</h1>

  <table class="table table-success table-hover">
  		<tr>
   	<th>задача</th>
   	<th>начало</th>
   	<th>действия</th>
   	<th>завершение</th>   	
</tr>
  <?php


 //zip for name columns

   foreach($data as $row) {
   	$id = $row['id'];
   	$task = $row['task'];
   	$time = $row['time_start'];
   	
   	?>

   	<tr>
   	<td><?php echo $task ?></td>
   	
   	<td><?php echo $time ?></td>

   	<td><button class="btn btn-warning"><a href='delete.php?id=<?php echo $id;?>' style="text-decoration:none; color:black;" rel="nofollow">Удалить</a></button></td>

   	</tr>

  
   	 
    <?php
}
 

?>
</table>
</div>
   
    
</body>
</html>
