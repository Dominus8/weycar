<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    
    public function category()
    {
      return $this->hasOne( Category::class, 'category_id', 'category_id' );
    }

    public function prod(){
      return $this->hasMany(Product::class, 'subcategory_id','subcategory_id');
  }
}
