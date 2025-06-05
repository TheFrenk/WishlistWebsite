<?php

namespace App\Http\Controllers\Wishlist\WishlistItem;

use App\Http\Controllers\Controller;
use App\Models\WishItem;
use Illuminate\Http\Request;

class WishlistItemController extends Controller
{
    public function markAsCompleted(Request $request, WishItem $item)
    {
        $request->validate([
           'name' => 'required|string',
        ]);

        $item->is_completed = true;
        $item->closed_by = $request->input("name");
        $item->save();

        return back();
    }
}
