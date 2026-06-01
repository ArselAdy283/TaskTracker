<?php

require_once "../config/database.php";
require_once "../models/task.php";

$task = new Task($conn);

$task_name = $_POST["task_name"];
$task_details = $_POST["task_details"];

$task->create(
    $task_name,
    $task_details
);

header("Location: ../app/index.php");
exit;