<?php

use Ghostly\Database\DatabaseManager;

class UserStatsModel
{
    /** @var DatabaseManager */
    private $db;
    private $table = 'tbl_statistic';

    public function __construct()
    {
        $this->db = new DatabaseManager();
    }

    public function create($uuid, $unix, $speed, $distance, $calories)
    {
        $this->db->query("INSERT INTO $this->table (`user_uuid`, `datetime`, `speed`, `distance`, `calories`)
            VALUES(:uuid, :unix, :speed, :distance, :calories)");

        $this->db->bind(":uuid", $uuid);
        $this->db->bind(":unix", $unix);
        $this->db->bind(":speed", $speed);
        $this->db->bind(":distance", $distance);
        $this->db->bind(":calories", $calories);

        return $this->db->execute();
    }

    public function read($action, $id)
    {
        switch ($action) {
            case 'all':
                $this->db->query("SELECT * FROM $this->table WHERE `user_uuid` = :id");
                $this->db->bind(":id", $id);
        
                return $this->db->findAll();
                break;
            case 'report':
                $this->db->query("SELECT FROM_UNIXTIME(datetime/1000, '%Y-%m-%d') AS `ndate`, SUM(`distance`) AS `totalDistance`, SUM(`calories`) AS `totalCalories` FROM $this->table WHERE `user_uuid` = :id GROUP BY ndate HAVING ndate > DATE_ADD(CURRENT_DATE, INTERVAL -7 DAY) ORDER BY ndate DESC LIMIT 7;");
                $this->db->bind(":id", $id);
        
                return $this->db->findAll();
                break;
        }
    }

    public function readAll()
    {
        $this->db->query("SELECT * FROM $this->table");

        return $this->db->findAll();
    }

    public function update()
    {
    }

    public function delete($id)
    {
        $this->db->query("DELETE * FROM $this->table WHERE `user_uuid` = :id");
        $this->db->bind(":id", $id);

        return $this->db->execute();
    }
}
