<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamped = true;
    public $fillable = ['name', 'description', 'quantity', 'price', 'category_id', 'image'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}