@extends('wishlist.layouts.main')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-25">
        <div class="bg-white rounded-2xl shadow p-6 mb-8">
            <h1 class="text-2xl font-bold text-gray-900">{{ $wishlist->title }}</h1>
            <div class="text-gray-600 mt-2 flex items-center flex-wrap gap-4">
                <div class="flex items-center gap-1 text-sm">
                    <i class="ri-user-fill"></i>
                    <span>{{ $wishlist->name }}</span>
                </div>
                <div class="flex items-center gap-1 text-sm">
                    <i class="ri-calendar-line"></i>
                    <span>{{ $wishlist->created_at }}</span>
                </div>
                <span class="text-sm text-indigo-600">0/3 fulfilled</span>
            </div>
            <p class="mt-4 text-sm italic text-gray-500">{{ $wishlist->description }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($wishlist->items as $item)
                <div class="bg-white rounded-2xl shadow p-4 relative flex flex-col justify-between">
                    <img src="https://readdy.ai/api/search-image?query=A%20collection%20of%20books%20neatly%20arranged%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20featuring%20fiction%20and%20non-fiction%20titles%20with%20attractive%20covers%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish2&orientation=landscape" alt="Gift Image" class="w-full h-48 object-cover rounded-lg mb-4">

                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-900 mb-1"></h2>
                        <p class="text-sm text-gray-500 mb-1">{{ $item->name }}</p>
                        <p class="text-sm text-gray-400 mb-2">{{ $item->product_url }}</p>

                        <div class="flex items-center justify-between mt-2">
                            <span class="text-indigo-600 font-semibold text-sm">${{ $item->price }}</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-between items-center">
                        <a href="{{ $item->product_url }}" class="text-sm font-medium text-indigo-600 hover:underline">View Product</a>
                        <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded hover:bg-indigo-700 transition">
                            Mark as Fulfilled
                        </button>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
