<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke()
    {
        return view('wishlist.show');
    }
}
