<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function gallery(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductGallery::class, 'id', 'product_id');
    }

    public function size(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductSize::class, 'id', 'product_id');
    }
    public function option(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductOption::class, 'id', 'product_id');
    }
}
