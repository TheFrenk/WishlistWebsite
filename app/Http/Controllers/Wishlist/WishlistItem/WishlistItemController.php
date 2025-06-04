<?php

namespace App\Http\Controllers\Wishlist\WishlistItem;

use App\Http\Controllers\Controller;
use App\Models\WishItem;

class WishlistItemController extends Controller
{
    public function markAsCompleted(WishItem $item)
    {
        $item->is_completed = true;
        $item->save();

        return back();
    }
}
