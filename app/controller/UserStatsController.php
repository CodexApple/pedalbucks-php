<?php

class UserStatsController
{
    /** @var UserStatsModel */
    private $var;

    public function __construct()
    {
        $this->var = new UserStatsModel();
    }

    public function saveData($uuid, $unix, $speed, $distance, $calories)
    {
        return $this->var->create($uuid, $unix, $speed, $distance, $calories);
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
