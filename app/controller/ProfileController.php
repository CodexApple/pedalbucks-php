<?php

class ProfileController
{
    /** @var ProfileModel */
    private $var;

    public function __construct()
    {
        $this->var = new ProfileModel();
    }

    public function saveData($uid, $fname, $lname, $cellphone, $address, $birthday)
    {
        $mname = "";
        $telephone = "";

        return $this->var->create($uid, $fname, $mname, $lname, $telephone, $cellphone, $address, $birthday);
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
