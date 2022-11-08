<?php

class AcceptTaskController
{
    /** @var AcceptTaskModel */
    private $var;

    public function __construct()
    {
        $this->var = new AcceptTaskModel();
    }

    public function saveData($user_id, $task_id)
    {
        return $this->var->create($user_id, $task_id);
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData($action, $uuid, $task_id, $distance)
    {
        return $this->var->update($action, $uuid, $task_id, $distance);
    }

    public function updateCurrentTask($uuid, $task_id, $distance)
    {
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
