<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @PwaHead
    <title>Wishlist</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"/>
</head>
<body class="bg-gray-50 min-h-screen">
<nav class="bg-white shadow-sm fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="font-['Pacifico'] text-primary text-2xl">WishKeeper</a>
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 text-sm font-medium">Home</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 text-sm font-medium">Features</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 text-sm font-medium">How It Works</a>
                </div>
            </div>
            <div class="flex items-center">
                <a href="{{ route('wishlist.create') }}" class="text-gray-700 hover:text-primary px-4 py-2 text-sm font-medium whitespace-nowrap">
                    Create
                </a>
                <button class="ml-4 bg-primary text-white px-4 py-2 rounded-button text-sm font-medium hover:bg-opacity-90 whitespace-nowrap">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-25">
    <div class="bg-white rounded-2xl shadow p-6 mb-8">
        <h1 class="text-2xl font-bold text-gray-900">John's Wishlist</h1>
        <div class="text-gray-600 mt-2 flex items-center flex-wrap gap-4">
            <div class="flex items-center gap-1 text-sm">
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="..." /></svg>
                <span>Birthday</span>
            </div>
            <div class="flex items-center gap-1 text-sm">
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="..." /></svg>
                <span>June 19, 2025</span>
            </div>
            <span class="text-sm text-indigo-600">0/3 fulfilled</span>
        </div>
        <p class="mt-4 text-sm italic text-gray-500">"Some optional note or message from the user"</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow p-4 relative flex flex-col justify-between">
            <img src="https://readdy.ai/api/search-image?query=A%20collection%20of%20books%20neatly%20arranged%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20featuring%20fiction%20and%20non-fiction%20titles%20with%20attractive%20covers%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish2&orientation=landscape" alt="Gift Image" class="w-full h-48 object-cover rounded-lg mb-4">

            <div>
                <h2 class="text-lg font-semibold text-gray-900 mb-1">Material Tailwind PRO</h2>
                <p class="text-sm text-gray-500 mb-1">Supercharge Your Development</p>
                <p class="text-sm text-gray-400">material-tailwind.com</p>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <a href="#" class="text-sm font-medium text-indigo-600 hover:underline">View Product</a>
                <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded hover:bg-indigo-700 transition">Mark as Fulfilled</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-4 flex flex-col justify-between">
            <img src="https://readdy.ai/api/search-image?query=A%20collection%20of%20books%20neatly%20arranged%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20featuring%20fiction%20and%20non-fiction%20titles%20with%20attractive%20covers%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish2&orientation=landscape" alt="Nintendo Switch" class="w-full h-48 object-cover rounded-lg mb-4">
            <div>
                <h2 class="text-lg font-semibold text-gray-900 mb-1">Nintendo Switch OLED</h2>
                <p class="text-sm text-gray-500 mb-1">White Joy-Con</p>
                <p class="text-sm text-gray-400">nintendo.com</p>
            </div>
            <div class="mt-4 flex justify-between items-center">
                <a href="#" class="text-sm font-medium text-indigo-600 hover:underline">View Product</a>
                <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded hover:bg-indigo-700 transition">Mark as Fulfilled</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-4 relative flex flex-col justify-between">
            <img src="https://readdy.ai/api/search-image?query=A%20collection%20of%20books%20neatly%20arranged%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20featuring%20fiction%20and%20non-fiction%20titles%20with%20attractive%20covers%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish2&orientation=landscape" alt="Gift Image" class="w-full h-48 object-cover rounded-lg mb-4">

            <div class="flex-1">
                <h2 class="text-lg font-semibold text-gray-900 mb-1">Material Tailwind PRO</h2>
                <p class="text-sm text-gray-500 mb-1">Supercharge Your Development</p>
                <p class="text-sm text-gray-400 mb-2">material-tailwind.com</p>

                <div class="flex items-center justify-between mt-2">
                    <span class="text-indigo-600 font-semibold text-sm">$129.99</span>
                </div>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <a href="#" class="text-sm font-medium text-indigo-600 hover:underline">View Product</a>
                <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded hover:bg-indigo-700 transition">
                    Mark as Fulfilled
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@RegisterServiceWorkerScript
</html>
