<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function menus() : BelongsToMany
    {
        return $this->belongsToMany(Menu::class)->withTimestamps()->withPivot('name','price','total_price','quantity','category','created_at','updated_at','id');
    }
}
