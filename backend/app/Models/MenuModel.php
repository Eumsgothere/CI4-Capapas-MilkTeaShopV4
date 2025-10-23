<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price', 'image', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
}
