<?php

require_once "../config/database.php";
require_once "../models/task.php";

$task = new Task($conn);

$id = $_POST["id"];

$task->delete(
    $id
);

header("Location: ../app/index.php");

exit;