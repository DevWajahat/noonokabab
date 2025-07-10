<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends Model
{
     protected $guarded = [];

     public function sideline(): BelongsTo
     {
        return $this->belongsTo(Sideline::class);
     }

}
