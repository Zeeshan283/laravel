<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'quantity',
        'category_id',
        'make',
        'image',
        'description',
        'details',
        'make',
        'm_unit',
        'width',
        'depth',
        'height',
        'weight_unit',
        'weight',
        'created_by',
        'created_at',
        'updated_at',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}