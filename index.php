<?php

  require '/Applications/MAMP/htdocs/planner/database/tasks.php';
  require '/Applications/MAMP/htdocs/planner/database/tasks.php';
  require '/Applications/MAMP/htdocs/planner/header.php';

 error_reporting(E_ALL);
ini_set('display_errors', 1);

  ?>

  <div class="container" >
  <h1>Список задач</h1>

  <table class="table table-success table-hover">
  		<tr>
   	<th>задача</th>
   	<th>начало</th>
   	<th>удалить</th>
   	<th>статус</th>   	
</tr>
  <?php


 //zip for name columns

   foreach($data as $row) {

   	$id = $row['id'];
   	$task = $row['task'];
   	$time = $row['time_start'];
   	$status = $row['status'];
   	//print_r($data);
   	

   	 	?>
   
   	<tr>
   	<td><?php echo $task; ?></td>
   	
   	<td><?php echo $time; ?></td>

   	<td><button class="btn btn-warning"><a href='task_update/delete.php?id=<?php echo $id;?>' style="text-decoration:none; color:black;" rel="nofollow">Удалить</a></button></td>

   	<td><div class="input-group input-group-sm mb-3">
    <form action="/planner/task_update/update.php" method="post"> 

    <span class="input-group-text">задача и её статус</span>

    <input type="hidden" name="id" value="<?php echo $id?>">

    <input name="task_update" type="text" aria-label="task"  value="<?php echo $task;?>">
    <input name="status" type="text" aria-label="status" value="<?php echo $status?>">


    <button class="btn btn-info" type='submit'> изменить</button>
    

    </form>

    
    </div></td>

   	</tr>

  
   	 
    <?php
}
 

?>
</table>
</div>
   
    
</body>
</html>
