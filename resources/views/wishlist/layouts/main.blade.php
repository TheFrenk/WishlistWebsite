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
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-white shadow-sm fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('main.index') }}" class="font-['Pacifico'] text-primary text-2xl">WishKeeper</a>
                    <div class="hidden md:ml-10 md:flex md:space-x-8">
                        <a href="{{ route('main.index') }}" class="text-gray-500 hover:text-primary px-3 py-2 text-sm font-medium">Home</a>
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
    @yield('content')

    <footer class="bg-white border-t border-t-gray-200 mt-12">
        <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-600 text-sm">
                    By creating a wishlist, you agree to our
                    <a href="#" class="text-primary hover:underline">Terms of Use</a>.
                </p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-600 hover:text-primary transition">Create an Account</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition">Help & FAQ</a>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-500 text-sm">
                <p>© {{ date("Y") }} WishKeeper. All rights reserved.</p>
            </div>
        </div>
    </footer>
    @RegisterServiceWorkerScript
</body>
</html>
