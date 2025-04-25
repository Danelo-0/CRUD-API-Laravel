<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = ['title', 'parent_id'];

    // Родитель
    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    // Дети
    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    // Продукты
    public function products()
    {
      return $this->hasMany(Product::class, 'category_id');
    }
}
