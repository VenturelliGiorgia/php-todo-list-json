<?php

if (empty($_POST["name"])) {
    http_response_code(400);
    exit("devi inserire del testo all'interno dell'input");
}

$taskList = file_get_contents("../task.json");
$taskList = json_decode($taskList, true);
var_dump($taskList);

$taskList[] = [
    "name" => $_POST["name"],
    "done" => false,
];

$taskJson = json_encode($taskList, JSON_PRETTY_PRINT);

file_put_contents("../task.json", $taskJson);

header("Content-Type: application/json");
echo json_encode($newTask);
