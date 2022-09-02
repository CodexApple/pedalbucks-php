<?php

use Ghostly\Database\DatabaseManager;

class EconomyModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_economy';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($user_id, $points = 0, $archive = 1)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `user_points`, `is_archive`)
            VALUES (:uid, :points, :archive)");

        $this->db->bind(":uid", $user_id);
        $this->db->bind(":points", $points);
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
