<?php

namespace App\Models;

use App\DB;

class User extends DB
{
    private $table  = 'users';
    public $primaryKey  = 'id';

    public function selectAll()
    {
        $statement = $this->db->query("SELECT * FROM $this->table");
        $users = $statement->fetchAll();
        return $users;
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, [$this->primaryKey => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, [$this->primaryKey => $id]);
    }
}
