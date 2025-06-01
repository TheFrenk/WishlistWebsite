<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Wishlist extends Model
{
    protected $fillable = ['title', 'slug', 'is_public', 'token', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(WishItem::class);
    }

    public function getRouteUrlAttribute()
    {
        if ($this->user) {
            return url("/wishlist/{$this->user->name}/{$this->slug}");
        }

        return url("/wishlist/share/{$this->token}");
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($wishlist) {
           $wishlist->slug = Str::slug($wishlist->title) . '-' . Str::random(5);
           $wishlist->token = Str::uuid();
        });
    }
}
