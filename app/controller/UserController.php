<?php

class UserController {

    /** @var UserModel */
    private $var;
    private $date;

    public function __construct()
    {
        $this->var = new UserModel();
        $this->date = new DateTime("now");
    }

    public function saveData() {

        $uuid = new me\ghostly\utils\StringUtils();

        $username = $_POST['username'];
        $email = $_POST['email'];

        $password = $_POST['password'];
        $oldPassword = $password;

        $datejoin = $this->date->format("m/d/Y H:i:s");

        $firstJoin = 1;
        $archive = 1;
        $banned = 1;

        return $this->var->create($uuid, $username, $email, $password, $oldPassword, $datejoin, $firstJoin, $archive, $banned);
    }

    public function getData($id) {
        return $this->var->read("read", $id);
    }
    
    public function getAllData() {
        return $this->var->readAll();
    }

    public function updateData() {

    }

    public function deleteData($id) {
        return $this->var->delete($id);
    }
}