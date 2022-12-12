<?php

class AdvertisementController {

    /** @var AdvertisementModel */
    private $var;

    public function __construct()
    {
        $this->var = new AdvertisementModel();
    }

    public function saveData() {
        return $this->var->create();
    }

    public function getData($id) {
        return $this->var->read($id);
    }

    public function getAllData() {
        return $this->var->readAll();
    }

    public function deleteData() {
        return $this->var->delete();
    }
}