<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function sidelines(): BelongsToMany
    {
        return $this->belongsToMany(Sideline::class)->withTimestamps();
    }

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)->withTimestamps();
    }
    public function orders() : BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withTimestamps()->withPivot('name','price','total_price','quantity','category','created_at','updated_at','id');
    }
}
