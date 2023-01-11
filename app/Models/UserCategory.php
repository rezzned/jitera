<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;

    protected $table = 'user_category';

    public function getCategories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
