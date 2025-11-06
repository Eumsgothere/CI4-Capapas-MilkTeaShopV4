<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'id' => 'integer',
        'account_status' => 'boolean',
        'email_activated' => 'boolean',
    ];
}
