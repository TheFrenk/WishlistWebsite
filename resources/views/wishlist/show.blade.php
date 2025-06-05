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
                <span class="text-sm text-indigo-600">{{ $wishlist->items->where('is_completed', true)->count() }}/{{ $wishlist->items->count() }} fulfilled</span>

                <form method="GET" class="ml-auto">
                    <label for="showCompleted" class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" id="showCompleted" name="showCompleted" value="1" class="sr-only" onchange="this.form.submit()" {{ request('showCompleted') ? 'checked' : '' }}>
                            <div class="block bg-gray-300 w-10 h-6 rounded-full"></div>
                            <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition {{ request('showCompleted') ? 'translate-x-4' : '' }}"></div>
                        </div>
                        <span class="ml-3 text-sm text-gray-700">Show Fulfilled</span>
                    </label>
                </form>
            </div>
            <p class="mt-4 text-sm italic text-gray-500">{{ $wishlist->description }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($wishlist->items as $item)
                @if (!$item->is_completed || ($item->is_completed && $showCompleted))
                    <div class="bg-white rounded-2xl shadow p-4 relative flex flex-col justify-between">
                        <img src="https://readdy.ai/api/search-image?query=A%20collection%20of%20books%20neatly%20arranged%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20featuring%20fiction%20and%20non-fiction%20titles%20with%20attractive%20covers%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish2&orientation=landscape" alt="Gift Image" class="w-full h-48 object-cover rounded-lg mb-4">

                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-900 mb-1"></h2>
                            <p class="text-sm text-gray-500 mb-1">{{ $item->name }}</p>
                            <p class="text-sm text-gray-400 mb-2">{{ $item->description }}</p>

                            <div class="flex items-center justify-between mt-2">
                                <span class="text-indigo-600 font-semibold text-sm">${{ $item->price }}</span>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-between items-center">
                            <a href="{{ $item->product_url }}" class="text-sm font-medium text-indigo-600 hover:underline">View Product</a>
                            @if (!$item->is_completed)
                                <button onclick="openModal()" type="button" class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded hover:bg-indigo-700 transition">
                                    Mark as Fulfilled
                                </button>
                            @else
                                <span class="text-xs text-gray-500">Fulfilled by {{ $item-> closed_by }}</span>
                            @endif
                        </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>
    <div
        class="hidden fixed inset-0 z-50 grid place-content-center bg-black/50 p-4"
        id="modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modalTitle">
        <form action="{{ route('wishlist.items.complete', $item) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="w-full max-w-md rounded-lg bg-white p-6 shadow-lg">
                <h2 id="modalTitle" class="text-xl font-bold text-gray-900 sm:text-2xl">Who are you?</h2>
                <div class="mt-4">
                    <p class="text-pretty text-gray-700">
                        Help us make this Wishlist a little more personal. If you like you can enter your name below. It does not have to be your full name. Other donors may contact you by name.
                    </p>
                    <label for="Confirm" class="mt-4 block">
                        <span class="text-sm font-medium text-gray-700">
                          Name/abbreviation/nickname
                        </span>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="mt-0.5 w-full rounded border-gray-300 shadow-sm text-base h-10 px-3 py-2"
                        />
                    </label>
                </div>

                <footer class="mt-6 flex justify-end gap-2">
                    <button
                        onclick="closeModal()"
                        type="button"
                        class="rounded bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-200">
                        Cancel
                    </button>
                        <button
                            type="submit"
                            class="rounded bg-blue-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-blue-700">
                            Done
                        </button>
                </footer>
            </div>
        </form>
    </div>

    <script>
        const modal = document.getElementById("modal");

        function openModal() {
            modal.classList.remove("hidden");
        }

        function closeModal() {
            modal.classList.add("hidden");
        }
    </script>
@endsection
