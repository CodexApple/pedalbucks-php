<?php

class AdvertisementController
{

    /** @var AdvertisementModel */
    private $var;

    public function __construct()
    {
        $this->var = new AdvertisementModel();
    }

    public function saveData()
    {
        $product = (isset($_POST['product'])) ? $_POST['product'] : "";
        $description = (isset($_POST['description'])) ? $_POST['description'] : "";
        $company = (isset($_POST['company'])) ? $_POST['company'] : "";
        $image = (isset($_POST['image'])) ? $_POST['image'] : "";

        return $this->var->create($product, $description, $company, $image);
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

        $id = $_POST['id'];
        $product = (isset($_POST['product'])) ? $_POST['product'] : "";
        $description = (isset($_POST['description'])) ? $_POST['description'] : "";
        $company = (isset($_POST['company'])) ? $_POST['company'] : "";
        $image = (isset($_POST['image'])) ? $_POST['image'] : "";

        return $this->var->update($id, $product, $description, $company, $image);
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
