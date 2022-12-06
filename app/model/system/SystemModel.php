<?php

use Ghostly\Database\DatabaseManager;

class SystemModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_system_statistic';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create()
    {
        $this->db->query();

        return $this->db->execute;
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
