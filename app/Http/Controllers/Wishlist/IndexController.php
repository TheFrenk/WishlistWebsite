<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('wishlist.create');
    }
}
