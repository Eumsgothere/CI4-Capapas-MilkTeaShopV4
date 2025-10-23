<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'password',
        'created_at',
        'updated_at'
    ];
}
