<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'image' => 'array',
    ];
    public function subcategory(){
        return $this->belongdTo(Subcategory::class, 'code','category_id');
    }
}
