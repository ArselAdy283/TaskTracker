<?php

class Task
{
    private mysqli $db;
    public function __construct(mysqli $db)
    {
        $this->db = $db;
    }

    //CREATE TASK
    public function create(string $task_name, string $task_details)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO tasks (task_name, task_details) VALUES (?, ?)"
        );
        $stmt->bind_param(
            "ss",
            $task_name,
            $task_details
        );
        return $stmt->execute();
    }

    //READ ALL
    public function all(): array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM tasks ORDER BY status ASC, timestamp DESC"
        );
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //READ TODAY
    public function today(): array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM tasks WHERE DATE(timestamp) = CURDATE() ORDER BY status ASC, timestamp DESC"
        );
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //READ DONE
    public function done(): array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM tasks WHERE status = 1 ORDER BY timestamp DESC"
        );

        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
