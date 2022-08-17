<?php

use Ghostly\Database\DatabaseManager;

class ProfileModel extends DatabaseManager{ 

    /** @var DatabaseManager */
    private $db;
    private $table = "tbl_profile";

    public function __construct() {
        $this->db = new DatabaseManager();
    }

    public function create() {

    }

    public function read($id) {
        $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :uuid");
        $this->db->bind(":uuid", $id);

        return $this->db->execute();
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
        $this->db->query("DELETE FROM $this->table WHERE `uuid` = :uuid");
        $this->db->bind(':uuid', $id);

        return $this->db->execute();
    }
}