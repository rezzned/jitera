<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'id';

    public function getUsers()
    {
        return $this->belongsTo(Users::class, 'purchaser_id', 'id');
    }

    public function getOrderDetail(){
        return $this->hasmany(OrderItems::class, 'order_id', 'id');
    }
}
