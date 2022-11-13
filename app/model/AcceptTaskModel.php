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

    public function create($user_id, $task_id, $distance = 0, $active = 0, $challenge = 1, $expired = 1, $complete = 1, $redeemed = 1, $archive = 1)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `task_id`, `distance`, `is_active`, `is_challenge`, `is_expired`, `is_completed`, `is_redeemed`, `is_archive`)
            VALUES(:uid, :tid, :distance, :active, :challenge, :expired, :complete, :redeemed, :archive)");

        $this->db->bind(":uid", $user_id);
        $this->db->bind(":tid", $task_id);
        $this->db->bind(":distance", $distance);
        $this->db->bind(":active", $active);
        $this->db->bind(":challenge", $challenge);
        $this->db->bind(":expired", $expired);
        $this->db->bind(":complete", $complete);
        $this->db->bind(":redeemed", $redeemed);
        $this->db->bind(":archive", $archive);

        return $this->db->execute();
    }

    public function read($action, $id, $tid)
    {
        switch ($action) {
            case "readAllTask":
                $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :id");
                $this->db->bind(":id", $id);

                return $this->db->find();
                break;
            case "readActiveTask":
                $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :id AND `is_active` = 1");
                $this->db->bind(":id", $id);

                return $this->db->find();
                break;
            case "readInactiveTask":
                $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :id AND `task_id` = :tid AND `is_active` = 0");
                $this->db->bind(":id", $id);
                $this->db->bind(":tid", $tid);

                return $this->db->find();
                break;
        }
    }

    public function readAll()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }

    public function update($action, $uuid, $task_id, $distance)
    {
        switch ($action) {
            case "updateTask":
                $this->db->query("UPDATE $this->table SET `distance` = :distance WHERE `user_uuid` = :user_uuid AND `is_active` = 0");
                $this->db->bind(":user_uuid", $uuid);
                $this->db->bind(":distance", $distance);

                return $this->db->execute();
                break;
            case "updateOldTask":
                $this->db->query("UPDATE $this->table SET `is_active` = 0, `is_archive` = 1 WHERE `user_uuid` = :user_uuid AND `is_active` = 0");
                $this->db->bind(":user_uuid", $uuid);

                return $this->db->execute();
                break;
            case "updateNewTask":

                break;
        }
    }

    public function delete($id)
    {
        $this->db->query("DELETE * FROM $this->table WHERE `user_uuid` = :id");
        $this->db->bind(":id", $id);

        return $this->db->execute();
    }
}
