<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishItem extends Model
{
    protected $fillable = [
        'wishlist_id', 'name', 'description',
        'image_url', 'product_url', 'price',
        'currency_id', 'is_completed'
    ];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
