<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType = '\App\Entities\User';
    protected $allowedFields = [
        'username',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'password',
        'type',
        'account_status',
        'email_activated'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';
}
