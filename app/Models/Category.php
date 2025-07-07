<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [];

    public function branches(): BelongsToMany
    {
        return $this->belongsToMany(Branch::class);
    }
    public function menus() : HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
