<?php

  require 'configDB.php';

  require 'tasks.php';
  error_reporting(E_ALL);
ini_set('display_errors', 1);
  
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
	<input type="text" name="task" id="task" placeholder="Добавить задачу" class="form_control">
	<button type='submit' name="send_task" class="btn btn-success">Отправить задачу</button>

</form>

