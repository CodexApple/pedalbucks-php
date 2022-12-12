<?php

use Ghostly\Database\DatabaseManager;

class RedeemModel extends DatabaseManager
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_redeem';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($uuid, $pid, $code, $used = 0)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `product_id`, `product_code`, `is_used`)
            VALUES (:uuid, :pid, :code, :used)");

        $this->db->bind(":uuid", $uuid);
        $this->db->bind(":pid", $pid);
        $this->db->bind(":code", $code);
        $this->db->bind(":used", $used);

        return $this->db->execute();
    }

    public function read($id, $prod_id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :uuid AND `product_code` = :prod_id");
        $this->db->bind(":uuid", $id);
        $this->db->bind(":prod_id", $prod_id);

        return $this->db->find();
    }

    public function readAll()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }


    public function update($uuid, $code)
    {
        $this->db->query("UPDATE $this->table SET `is_used` = 1 WHERE `user_uuid` = :uuid AND `product_code` = :code");

        $this->db->bind(":uuid", $uuid);
        $this->db->bind(":code", $code);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE `id` = :id");
        $this->db->bind(":id", $id);

        return $this->db->execute();
    }
}
