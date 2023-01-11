<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geo extends Model
{
    use HasFactory;

    protected $table = 'jitera_geo';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at', 'address_id', 'id'];
}
