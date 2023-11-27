<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'product_code',
        'price',
        'unit',
        'stock',
        'description',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
