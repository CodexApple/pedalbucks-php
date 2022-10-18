<?php

class UserController
{

    /** @var UserModel */
    private $var;
    private $date;
    private $stringUtils;
    private $auth;

    public function __construct()
    {
        $this->var = new UserModel();
        $this->date = new DateTime("now");
        $this->stringUtils = new StringUtils();
        $this->auth = new AuthController();
    }

    public function saveApiData($username, $email, $password)
    {
        $uuid = $this->stringUtils->guidv4();

        $hashPassword = $this->auth->setPassword($password);
        $oldPassword = $hashPassword;

        $datejoin = $this->date->format("Y-m-d H:i:s");

        $firstJoin = 1;
        $archive = 1;
        $banned = 1;

        return $this->var->create($uuid, $username, $email, $hashPassword, $oldPassword, $datejoin, $firstJoin, $archive, $banned);
    }

    public function saveData()
    {

        $uuid = $this->stringUtils->guidv4();

        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $password = $this->auth->setPassword($_POST['password']);
        $oldPassword = $password;

        $datejoin = $this->date->format("Y-m-d H:i:s");

        $firstJoin = 1;
        $archive = 1;
        $banned = 1;

        return $this->var->create($uuid, $username, $email, $password, $oldPassword, $datejoin, $firstJoin, $archive, $banned);
    }

    public function getData($id)
    {
        return $this->var->read("read", $id);
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
