<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    //
    protected $table = 'brands';
    protected $fillable = [
        'uuid',
        'name',
        'image',
        'is_active',
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class, 'brand_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
