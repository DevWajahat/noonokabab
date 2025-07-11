<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
     protected $guarded = [];


     public function menus(): BelongsToMany
     {
        return $this->belongsToMany(Menu::class);
     }

     
}
