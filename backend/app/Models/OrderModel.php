<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'menu_id', 'quantity', 'total_price', 'status', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
}
