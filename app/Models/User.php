<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields = ['id', 'username', 'email', 'role_id'];


    function joinusertorole()
    {
        return $this
            ->join('roles', 'roles.role_id = users.role_id', 'inner')
            ->findAll();
    }
}
