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

    public function create($name, $desc, $image, $max_claim, $price, $current_claim = 0, $bid = 1, $cid = 1, $archive = 0, $discount = 0)
    {
        $this->db->query("INSERT INTO $this->table (`brand_id`, `category_id`, `name` , `image`, `description`, `price`, `current_claim`, `max_claim`, `is_archive`, `is_discount`)
            VALUES (:bid, :cid, :name, :image, :desc, :price, :current, :max_claim, :archive, :discount)");

        $this->db->bind(":bid", $bid);
        $this->db->bind(":cid", $cid);
        $this->db->bind(":name", $name);
        $this->db->bind(":image", $image);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":price", $price);
        $this->db->bind(":current", $current_claim);
        $this->db->bind(":max_claim", $max_claim);
        $this->db->bind(":archive", $archive);
        $this->db->bind(":discount", $discount);

        return $this->db->execute();
    }

    public function read($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE `id` = :id");
        $this->db->bind(":id", $id);

        return $this->db->find();
    }

    public function readAll()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }

    public function update($id, $name, $desc, $image, $price, $maxClaim)
    {
        $this->db->query("UPDATE $this->table SET `name` = :name, `description` = :desc, `image` = :image, `price` = :price, `max_claim` = :maxClaim WHERE `id` = :id");

        $this->db->bind(":id", $id);
        $this->db->bind(":name", $name);
        $this->db->bind(":desc", $desc);
        $this->db->bind(":image", $image);
        $this->db->bind(":price", $price);
        $this->db->bind(":maxClaim", $maxClaim);

        return $this->db->execute();
    }

    public function updateAPI($id, $claim)
    {
        $this->db->query("UPDATE $this->table SET `current_claim` = :claim WHERE `id` = :id");

        $this->db->bind(":id", $id);
        $this->db->bind(":claim", $claim);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $this->db->query("DELETE * FROM $this->table WHERE `user_uuid` = :id");
        $this->db->bind(":id", $id);

        return $this->db->execute();
    }
}
