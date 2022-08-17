<?php

use Ghostly\Database\DatabaseManager;

class UserModel extends DatabaseManager
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_user';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($uuid, $username, $email, $password, $oldPassword, $datejoin, $firstJoin, $archive, $banned)
    {
        $this->db->query("INSERT INTO $this->table (`uuid`, `username`, `email`, `password`, `old_password`, `datejoined`, `is_firstjoin`, `is_archive`, `is_banned`)
            VALUES (:uuid, :username, :email, :password, :oldPassword, :datejoin, :firstJoin, :archive, :banned)");

        $this->db->handler->beginTransaction();
        $this->db->bind(":uuid", $uuid);
        $this->db->bind(":username", $username);
        $this->db->bind(":email", $email);
        $this->db->bind(":password", $password);
        $this->db->bind(":oldPassword", $oldPassword);
        $this->db->bind(":datejoin", $datejoin);
        $this->db->bind(":firstJoin", $firstJoin);
        $this->db->bind(":archive", $archive);
        $this->db->bind(":banned", $banned);
        $this->db->execute();

        $lastId = $this->db->handler->lastInsertId();
        $this->db->handler->commit();

        return $lastId;
    }

    public function read($action, $content)
    {
        if ($action == "read") {
            $this->db->query("SELECT * FROM $this->table WHERE `uuid` = :uuid");
            $this->db->bind(":uuid", $content);

            return $this->db->find();
        }

        if ($action == "check") {
            $this->db->query("SELECT * FROM $this->table WHERE `username` = :username OR `user_email` = :email");
            $this->db->bind(":username", $content);
            $this->db->bind(":email", $content);

            return $this->db->find();
        }

        if ($action == "auth") {
            $this->db->query("SELECT * FROM $this->table WHERE `username` = :username");
            $this->db->bind(":username", $content['username']);

            return $this->db->find();
        }

        if ($action == "count") {
            $this->db->query("SELECT COUNT(*) FROM $this->table");

            return $this->db->find();
        }
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
