<?php

class ProfileController
{
    /** @var ProfileModel */
    private $var;

    public function __construct()
    {
        $this->var = new ProfileModel();
    }

    public function saveData($uid, $fname, $lname, $cellphone, $address, $birthday, $type, $distance, $height, $weight, $calories,)
    {
        $mname = "";
        $telephone = "";

        return $this->var->create($uid, $fname, $mname, $lname, $telephone, $cellphone, $address, $birthday, $type, $distance, $height, $weight, $calories,);
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData($uuid, $address, $telephone, $cellphone, $type_choice, $distance_goal, $height, $weight, $calories)
    {
        return $this->var->update($uuid, $address, $telephone, $cellphone, $type_choice, $distance_goal, $height, $weight, $calories);
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
