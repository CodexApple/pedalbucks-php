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
        return $this->var->create();
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData()
    {
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
