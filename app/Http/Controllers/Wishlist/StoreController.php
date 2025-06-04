<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wishlist\StoreRequest;
use App\Models\Wishlist;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $wishlist = Wishlist::create($data['wishlist']);

        foreach ($data['items'] as $item) {
            $wishlist->items()->create($item);
        }

        return redirect()->route('wishlist.show', $wishlist->slug);
    }
}
