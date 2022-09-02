<?php

use Ghostly\Database\DatabaseManager;

class TaskModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_task';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($name, $desc, $distance = 0, $reward = 0, $challenge = 1, $complete = 1, $archive = 1)
    {
        $this->db->query("INSERT INTO $this->table (`task_name`, `task_description`, `task_distance`, `task_reward`, `is_challenge`, `is_completed`, `is_archive`)
            VALUES (:name, :desc, :distance, :reward, :challenge, :complete, :archive)");

        $this->db->bind(":name", $name);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":distance", $distance);
        $this->db->bind(":reward", $reward);
        $this->db->bind(":challenge", $challenge);
        $this->db->bind(":complete", $complete);
        $this->db->bind(":archive", $archive);


        return $this->db->execute();
    }

    public function read($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :id");
        $this->db->bind(":id", $id);

        return $this->db->find();
    }

    public function readAll()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }

    public function update()
    {
    }

    public function delete($id)
    {
        $this->db->query("DELETE * FROM $this->table WHERE `user_uuid` = :id");
        $this->db->bind(":id", $id);

        return $this->db->execute();
    }
}
