<?php

require_once '../config/database.php';
require_once '../models/task.php';

$id = (int) $_POST['id'];

$task = new Task($conn);
$task->toggleStatus($id);

header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '../index.php')); 
exit;