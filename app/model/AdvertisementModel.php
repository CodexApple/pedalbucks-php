<?php

use Ghostly\Database\DatabaseManager;

class AdvertisementModel {
    
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_advertisement';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create() {

    }

    public function read($id) {
        $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :uuid");
        $this->db->bind(":uuid", $id);

        return $this->db->find();
    }

    public function readAll() {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }

    public function update() {

    }

    public function delete() {

    }
}