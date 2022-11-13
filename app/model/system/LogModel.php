<?php

use Ghostly\Database\DatabaseManager;

class LogModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_log';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($uuid, $type, $name, $desc, $date, $time, $read = 0, $archive = 0)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `log_type`, `log_name`, `log_description`, `log_date`, `log_time`, `is_read`, `is_archive`)
            VALUES (:uuid, :type, :name, :desc, :date, :time, :read, :archive)");

        $this->db->bind(":uuid", $uuid);
        $this->db->bind(":type", $type);
        $this->db->bind(":name", $name);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":date", $date);
        $this->db->bind(":time", $time);
        $this->db->bind(":read", $read);
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
