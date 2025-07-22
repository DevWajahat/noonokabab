<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sideline extends Model
{
    protected $guarded = [];

    // public function side_options(): HasMany
    // {
    //     return $this->hasMany(Option::class);
    // }

    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class)->withTimestamps();
    }
}
