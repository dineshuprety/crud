<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Category\Entities\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id', 'title', 'description'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }
}
