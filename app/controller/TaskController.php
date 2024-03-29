<?php

class TaskController
{
    /** @var TaskModel */
    private $var;

    public function __construct()
    {
        $this->var = new TaskModel();
    }

    public function saveData()
    {
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $desc = isset($_POST['description']) ? $_POST['description'] : null;;
        $distance = isset($_POST['taskDistance']) ? $_POST['taskDistance'] : null;
        $difficulty = isset($_POST['taskDifficulty']) ? $_POST['taskDifficulty'] : null;
        $reward = isset($_POST['reward']) ? $_POST['reward'] : null;
        $challenge = isset($_POST['isChallenge']) ? $_POST['isChallenge'] : null;

        return $this->var->create($name, $desc, $distance, $difficulty, $reward, $challenge, $expired = 0, $archive = 0);
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData($tid, $name, $desc, $distance, $reward, $challenge)
    {
        return $this->var->update($tid, $name, $desc, $distance, $reward, $challenge);
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
