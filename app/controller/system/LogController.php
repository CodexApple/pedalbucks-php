<?php

class LogController
{
    /** @var LogModel */
    private $var;
    private $date;

    public function __construct()
    {
        $this->var = new LogModel();
        $this->date = new DateTime("now");
    }

    // types; 0 = success, 1 = warning, 2 = error;
    public function saveData($type, $name, $desc)
    {
        $uuid = $_SESSION['user']->uuid;
        $date = $this->date->format('Y-m-d');
        $time = $this->date->format('H:i:s');

        return $this->var->create($uuid, $type, $name, $desc, $date, $time, $read = 1, $archive = 1);
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
