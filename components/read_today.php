<?php
require_once "../config/database.php";
require_once "../models/task.php";

$taskModel = new Task($conn);

$tasks = $taskModel->today();
include 'task_list.php'
?>