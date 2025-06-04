<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;

class ShowController extends Controller
{
    public function show(Wishlist $wishlist)
    {
        $wishlist->load('items');
        return view('wishlist.show', compact('wishlist'));
    }
}
