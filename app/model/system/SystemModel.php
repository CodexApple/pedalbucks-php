<?php

use Ghostly\Database\DatabaseManager;

class SystemModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_system_statistic';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create()
    {
    }

    public function read()
    {
    }

    public function readAll()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
