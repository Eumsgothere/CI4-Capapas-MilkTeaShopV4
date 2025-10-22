<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';      // The table name in your DB
    protected $primaryKey = 'id';    // Primary key column
    protected $allowedFields = [     // Columns that can be set via insert/update
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password_hash',
        'type',
        'account_status',
        'email_activated',
        'newsletter',
        'gender',
        'profile_image',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $useTimestamps = true; // Automatically manage created_at & updated_at
    protected $useSoftDeletes = true; // Automatically manage deleted_at
}
