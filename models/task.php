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
        $stmt->bind_param("ss", $task_name, $task_details);

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

    //READ BY ID
    public function getbyid(int $id): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM tasks WHERE id = ?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc() ?: null;
    }

    //UPDATE STATUS
    public function toggleStatus(int $id): bool
    {
        $stmt = $this->db->prepare(
            "UPDATE tasks SET status = IF(status = 1, 0, 1) WHERE id = ?"
        );

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    //UPDATE TASK
    public function edit(int $id, string $task_name, string $task_details): bool
    {
        $stmt = $this->db->prepare(
            "UPDATE tasks SET task_name = ?, task_details = ? WHERE id = ?"
        );

        $stmt->bind_param(
            "ssi",
            $task_name,
            $task_details,
            $id
        );

        return $stmt->execute();
    }

    //DELETE TASK
    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            "DELETE FROM tasks WHERE id = ?"
        );

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
