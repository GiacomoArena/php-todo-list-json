<?php


  $json_string = file_get_contents('tasks.json');

  $task = json_decode($json_string, true);

  

  if (isset($_POST['task'])) {
    $task[] = $_POST['task'];
    tasksPut($task);
  };


  if (isset($_POST['delete'])) {
    $index = $_POST['delete'];
      unset($task[$index]);
      $task = array_values($task); 
      tasksPut($task);
    
  };


  
  function tasksPut($task){
    file_put_contents('tasks.json', json_encode($task));
  }

  header('Content-Type: application/json');

  echo json_encode($task);

