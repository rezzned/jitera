<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'jitera_users';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at', 'id'];

    public $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'website',
    ];

    public function getAddress()
    {
        return $this->belongsTo(Address::class, 'id', 'users_id');
    }

    public function getCompany()
    {
        return $this->belongsTo(Company::class, 'id', 'user_id');
    }

    public function getFollow()
    {
        return $this->hasMany(Follow::class, 'user_id', 'id');
    }
}
