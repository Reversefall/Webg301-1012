<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["name", "description"];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}