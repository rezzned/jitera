<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'jitera_address';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at', 'id', 'users_id'];

    public function Geo()
    {
        return $this->belongsTo(Geo::class, 'id', 'address_id');
    }
}
