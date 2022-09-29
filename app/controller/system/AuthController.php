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
        $credentials = $this->auth->read("auth", $content);

        if ($credentials != null) {
            if ($this->getPassword($credentials->uuid, $content["password"])) {
                $_SESSION["user"] = $credentials;
                return header("Location: /account/");
            } else {
                header("Location: /auth/login?error=202");
            }
        } else {
            header("Location: /auth/login?error=203");
        }
    }

    public function authUser($content, $password)
    {
        $credentials = $this->auth->read("auth-api", $content);

        if ($credentials != null) {
            if ($this->getPassword($credentials->uuid, $password)) {
                return $credentials;
            } else {
                return false;
            }
        } else {
            return false;
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
        return password_verify($password, $credentials->password);
    }
}
