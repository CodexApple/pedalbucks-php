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

    public function create($name, $desc, $distance = 0, $difficulty, $reward = 0, $challenge = 0, $expired = 0, $archive = 0)
    {
        $this->db->query("INSERT INTO $this->table (`task_name`, `task_description`, `task_distance`, `task_difficulty`, `task_reward`, `is_challenge`, `is_expired`, `is_archive`)
            VALUES (:name, :desc, :distance, :difficulty, :reward, :challenge, :expired, :archive)");

        $this->db->bind(":name", $name);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":distance", $distance);
        $this->db->bind(":difficulty", $difficulty);
        $this->db->bind(":reward", $reward);
        $this->db->bind(":challenge", $challenge);
        $this->db->bind(":expired", $expired);
        $this->db->bind(":archive", $archive);


        return $this->db->execute();
    }

    public function read($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE `id` = :id");
        $this->db->bind(":id", $id);

        return $this->db->find();
    }

    public function readAll()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }

    public function update($tid, $name, $desc, $distance, $reward, $challenge)
    {
        $this->db->query("UPDATE $this->table SET `task_name` = :name, `task_description` = :desc, `task_distance` = :distance, `task_reward` = :reward, `is_challenge` = :challenge WHERE `id` = :id");

        $this->db->bind(":id", $tid);
        $this->db->bind(":name", $name);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":distance", $distance);
        $this->db->bind(":reward", $reward);
        $this->db->bind(":challenge", $challenge);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $this->db->query("DELETE * FROM $this->table WHERE `id` = :id");
        $this->db->bind(":id", $id);

        return $this->db->execute();
    }
}
