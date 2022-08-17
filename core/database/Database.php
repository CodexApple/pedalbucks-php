<?php

namespace Ghostly\Database;

use PDO;
use PDOException;
use PDOStatement;

class DatabaseManager
{
    protected PDO $handler;
    protected PDOStatement $query;

    public function __construct()
    {
        $dbHost = '127.0.0.1';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'glist1_cache6272022';
        $dbURL = 'mysql:host=' . $dbHost . ';dbname=' . $dbName;

        try {
            $this->handler = new PDO($dbURL, $dbUser, $dbPass);
            $this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<pre>';
            var_dump($e->getMessage());
            echo '</pre>';
            exit;
        }
    }

    public function query($query)
    {
        try {
            $this->query = $this->handler->prepare(query: $query);
        } catch (PDOException $e) {
            var_dump($e);
            return false;
        }
    }

    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        return $this->query->bindValue($parameter, $value, $type);
    }

    public function execute()
    {
        try {
            return $this->query->execute();
        } catch (PDOException $e) {
            var_dump($e);
            return false;
        }
    }

    public function find($type = PDO::FETCH_OBJ)
    {
        $this->execute();
        return $this->query->fetch($type);
    }

    public function findAll($type = PDO::FETCH_OBJ)
    {
        $this->execute();
        return $this->query->fetchAll($type);
    }

    public function rowCount()
    {
        $this->execute();
        return $this->query->rowCount();
    }
}
