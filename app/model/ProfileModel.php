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

    public function create($uid, $fname, $mname, $lname, $telephone, $cellphone, $address, $birthday, $type, $distance, $height, $weight, $calories, $archive = 0)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `firstname`, `middlename`, `lastname`, `telephone`, `cellphone`, `address`, `birthday`, `type_choice`, `distance_goal`, `height`, `weight`, `calories`, `is_archive`)
            VALUES (:uid, :fname, :mname, :lname, :telephone, :cellphone, :address, :birthday, :type, :distance, :height, :weight, :calories, :archive)");

        $this->db->bind(":uid", $uid);
        $this->db->bind(":fname", $fname);
        $this->db->bind(":mname", $mname);
        $this->db->bind(":lname", $lname);
        $this->db->bind(":telephone", $telephone);
        $this->db->bind(":cellphone", $cellphone);
        $this->db->bind(":address", $address);
        $this->db->bind(":birthday", $birthday);
        $this->db->bind(":type", $type);
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

    public function update($uuid, $address, $telephone, $cellphone, $type_choice, $distance_goal, $height, $weight, $calories)
    {
        $this->db->query("UPDATE $this->table SET `address` = :address, `telephone` = :telephone, 
        `cellphone` = :cellphone, `type_choice` = :type_choice, `distance_goal` = :distance_goal,
        `height` = :height, `weight` = :weight, `calories` = :calories WHERE `user_uuid` = :user_uuid");

        $this->db->bind(":user_uuid", $uuid);
        $this->db->bind(":address", $address);
        $this->db->bind(":telephone", $telephone);
        $this->db->bind(":cellphone", $cellphone);
        $this->db->bind(":type_choice", $type_choice);
        $this->db->bind(":distance_goal", $distance_goal);
        $this->db->bind(":height", $height);
        $this->db->bind(":weight", $weight);
        $this->db->bind(":calories", $calories);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE `uuid` = :uuid");
        $this->db->bind(':uuid', $id);

        return $this->db->execute();
    }
}
