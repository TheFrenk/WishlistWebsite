<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['code', 'symbol'];

    public function items()
    {
        return $this->hasMany(WishItem::class);
    }
}
