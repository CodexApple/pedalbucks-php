<?php

class AuthController
{
    /** @var UserModel */
    private $auth;

    public function __construct()
    {
        $this->auth = new UserModel();
    }

    public function Authenticate($content)
    {
        if ($credentials = $this->auth->read("auth", $content)) {
            if ($this->getPassword($credentials->uuid, $content["password"])) {
                return header("Location: /account/");
            } else {
                header("Location: /auth/login?error=202");
            }
        } else {
            header("Location: /auth/login?error=203");
        }
    }

    /**
     * @param String $password
     * @return String
     */
    public function setPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @param int $id
     * @param String $password
     * @return Boolean
     */
    public function getPassword($id, $password)
    {
        $credentials = $this->auth->read("read", $id);
        return password_verify($password, $credentials->user_password);
    }
}
