<?php

use Ghostly\Database\DatabaseManager;

class ProfileModel extends DatabaseManager
{

    /** @var DatabaseManager */
    private $db;
    private $table = "tbl_profile";

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($uid, $fname, $mname, $lname, $telephone, $cellphone, $address, $birthday, $distance, $height, $weight, $calories, $archive = 1)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `firstname`, `middlename`, `lastname`, `telephone`, `cellphone`, `address`, `birthday`, `distance_goal`, `height`, `weight`, `calories`, `is_archive`)
            VALUES (:uid, :fname, :mname, :lname, :telephone, :cellphone, :address, :birthday, :distance, :height, :weight, :calories, :archive)");

        $this->db->bind(":uid", $uid);
        $this->db->bind(":fname", $fname);
        $this->db->bind(":mname", $mname);
        $this->db->bind(":lname", $lname);
        $this->db->bind(":telephone", $telephone);
        $this->db->bind(":cellphone", $cellphone);
        $this->db->bind(":address", $address);
        $this->db->bind(":birthday", $birthday);
        $this->db->bind(":distance", $distance);
        $this->db->bind(":height", $height);
        $this->db->bind(":weight", $weight);
        $this->db->bind(":calories", $calories);
        $this->db->bind(":archive", $archive);

        return $this->db->execute();
    }

    public function read($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :uuid");
        $this->db->bind(":uuid", $id);

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
        $this->db->query("DELETE FROM $this->table WHERE `uuid` = :uuid");
        $this->db->bind(':uuid', $id);

        return $this->db->execute();
    }
}
