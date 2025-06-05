<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Request $request, Wishlist $wishlist)
    {
        $wishlist->load('items');
        $showCompleted = $request->boolean('showCompleted');
        return view('wishlist.show', compact('wishlist', 'showCompleted'));
    }
}
