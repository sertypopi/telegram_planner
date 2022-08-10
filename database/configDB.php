<?php 
    $dsn = 'mysql:host=localhost;dbname=task_base';
    $pdo = new PDO($dsn, 'root', 'root');

    if (!$pdo) {
        die("ошибка подключения к базе данных");
    }
?>