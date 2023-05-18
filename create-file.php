<?php
$tasks =[
  [
    "text" =>"fare la spesa",
    "done" => false
  ],
  [
    "text" =>"fare la spesa",
    "done" => false
  ],
  [
    "text" =>"fare la spesa",
    "done" => false
  ],
];

$json_string = json_encode($tasks);

file_put_contents('tasks.json', $json_string);

var_dump($json_string);