<?php
$tasks =[
  [
    "text" =>"fare la spesa",
    "done" => false
  ],
  [
    "text" =>"andare dal meccanico",
    "done" => false
  ],
  [
    "text" =>"allenarsi",
    "done" => false
  ],
];


$json_string = json_encode($tasks);

file_put_contents('tasks.json', $json_string);

//var_dump($json_string);