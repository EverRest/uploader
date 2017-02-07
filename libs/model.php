<?php
class Model
{
    public function __construct()
    {
         $this->db = new Database();
    }

    public function getAll($table)
    {
        $sth = $this->db->prepare('SELECT * FROM ' . $table);
        $sth->execute();
        return $sth->fetchAll();
    }
}
?>