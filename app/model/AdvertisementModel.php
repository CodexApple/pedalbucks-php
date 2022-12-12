<?php

use Ghostly\Database\DatabaseManager;

class AdvertisementModel
{

    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_advertisement';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($product, $description, $company, $image)
    {
        $this->db->query("INSERT INTO $this->table (`product_ad`, `description`, `company`, `image`) 
            VALUES (:product, :description, :company, :image)");

        $this->db->bind(":product", $product);
        $this->db->bind(":description", $description);
        $this->db->bind(":company", $company);
        $this->db->bind(":image", $image);

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

    public function update($id, $product, $description, $company, $image)
    {
        $this->db->query("UPDATE $this->table SET `product_ad` = :product, `description` = :description, `company` = :company, `image` = :image WHERE `id` = :id");

        $this->db->bind(":id", $id);
        $this->db->bind(":product", $product);
        $this->db->bind(":description", $description);
        $this->db->bind(":company", $company);
        $this->db->bind(":image", $image);

        return $this->db->execute();
    }

    public function delete($id)
    {
    }
}
