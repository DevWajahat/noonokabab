<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    protected $guarded = [];

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function branch() :BelongsTo {
       return $this->belongsTo(Branch::class);
    }
}
