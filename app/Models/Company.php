<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'jitera_company';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at', 'id', 'user_id'];
}
