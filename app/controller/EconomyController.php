<?php

class EconomyController
{
    /** @var EconomyModel */
    private $var;

    public function __construct()
    {
        $this->var = new EconomyModel();
    }

    public function saveData($user_id, $points = 0, $archive = 1)
    {
        return $this->var->create($user_id, $points = 0, $archive = 1);
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData($user_id, $points)
    {
        return $this->var->update($user_id, $points);
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
