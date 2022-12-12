<?php

class UserStatsController
{
    /** @var UserStatsModel */
    private $var;

    public function __construct()
    {
        $this->var = new UserStatsModel();
    }

    public function saveData($uuid, $unix, $duration, $speed, $distance, $calories)
    {
        return $this->var->create($uuid, $unix, $duration, $speed, $distance, $calories);
    }

    public function getData($action, $id)
    {
        return $this->var->read($action, $id);
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
