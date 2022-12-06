<?php

class ProductController
{
    /** @var ProductModel */
    private $var;

    public function __construct()
    {
        $this->var = new ProductModel();
    }

    public function saveData($name, $desc)
    {

        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $desc = isset($_POST['description']) ? $_POST['description'] : "";

        return $this->var->create($name, $desc);
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
