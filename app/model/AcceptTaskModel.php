<?php

use Ghostly\Database\DatabaseManager;

class AcceptTaskModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_accepted_task';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($user_id, $task_id, $challenge = 1, $complete = 1, $archive = 1)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `task_id`, `is_challenge`, `is_completed`, `is_archive`)
            VALUES(:uid, :tid, :challenge, :complete, :archive)");

        $this->db->bind(":uid", $user_id);
        $this->db->bind(":tid", $task_id);
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
