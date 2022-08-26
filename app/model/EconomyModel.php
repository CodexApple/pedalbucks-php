<?php

use Ghostly\Database\DatabaseManager;

class EconomyModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_economy';

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
