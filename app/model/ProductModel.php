<?php

use Ghostly\Database\DatabaseManager;

class ProductModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_product';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($bid = 1, $cid = 1, $name, $desc, $price = 0, $archive = 1, $discount = 0)
    {
        $this->db->query("INSERT INTO $this->table (`brand_id`, `category_id`, `name` , `description`, `price`, `is_archive`, `is_discount`)
            VALUES (:bid, :cid, :name, :desc, :price, :archive, :discount)");

        $this->db->bind(":bid", $bid);
        $this->db->bind(":cid", $cid);
        $this->db->bind(":name", $name);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":price", $price);
        $this->db->bind(":archive", $archive);
        $this->db->bind(":discount", $discount);

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
