<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $table = 'jitera_follow';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at', 'id'];

    public function getFollowInfo()
    {
        return $this->hasOne(Users::class, 'id', 'follow_user_id');
    }
}
