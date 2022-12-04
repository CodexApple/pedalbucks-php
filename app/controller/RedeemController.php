<?php

class RedeemController
{
    /** @var RedeemModel */
    private $var;

    public function __construct()
    {
        $this->var = new RedeemModel();
    }

    public function saveData($uuid, $pid, $code)
    {
        return $this->var->create($uuid, $pid, $code);
    }

    public function getData($id)
    {
        return $this->var->read($id);
    }

    public function getAllData()
    {
        return $this->var->readAll();
    }

    public function updateData($user_id, $code)
    {
        return $this->var->update($user_id, $code);
    }

    public function deleteData($id)
    {
        return $this->var->delete($id);
    }
}
