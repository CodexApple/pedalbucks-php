<?php

class ProductController
{
    /** @var ProductModel */
    private $var;

    public function __construct()
    {
        $this->var = new ProductModel();
    }

    public function saveData()
    {

        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $desc = isset($_POST['description']) ? $_POST['description'] : "";
        $image = isset($_POST['image']) ? $_POST['image'] : "";
        $max_claim = isset($_POST['max_claim']) ? $_POST['max_claim'] : 10;
        $price = isset($_POST['price']) ? $_POST['price'] : 0;

        return $this->var->create($name, $desc, $image, $max_claim, $price);
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData($id, $claim)
    {
        return $this->var->update($id, $claim);
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
