<?php

use Ghostly\Database\DatabaseManager;

class CategoryModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_category';

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
