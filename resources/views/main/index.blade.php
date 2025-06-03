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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        body {
            font-family: 'Inter', sans-serif;
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .hero-section {
            background-image: linear-gradient(to right, rgba(255, 255, 255, 1) 40%, rgba(255, 255, 255, 0.8) 60%, rgba(255, 255, 255, 0.4) 80%, rgba(255, 255, 255, 0) 100%), url('https://readdy.ai/api/search-image?query=A%20beautiful%20organized%20collection%20of%20wishlist%20items%20displayed%20elegantly%20on%20a%20clean%20surface.%20Modern%20minimalist%20aesthetic%20with%20soft%20lighting.%20Items%20include%20tech%20gadgets%2C%20fashion%20accessories%2C%20home%20decor%2C%20and%20books%20arranged%20in%20a%20visually%20pleasing%20composition.%20The%20background%20is%20a%20soft%20gradient%20of%20light%20colors%20creating%20a%20dreamy%20atmosphere.&width=1200&height=800&seq=hero1&orientation=landscape');
            background-size: cover;
            background-position: center right;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
<!-- Navigation -->
<nav class="bg-white shadow-sm fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="font-['Pacifico'] text-primary text-2xl">WishKeeper</a>
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <a href="#" class="text-gray-900 hover:text-primary px-3 py-2 text-sm font-medium border-b-2 border-primary">Home</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 text-sm font-medium">Features</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 text-sm font-medium">How It Works</a>
                </div>
            </div>
            <div class="flex items-center">
                <a href="{{ route('wishlist.create') }}" class="text-gray-700 hover:text-primary px-4 py-2 text-sm font-medium whitespace-nowrap">
                    Create
                </a>
                <button class="ml-4 bg-primary text-white px-4 py-2 rounded-button text-sm font-medium hover:bg-blue-800 whitespace-nowrap">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- Hero Section -->
<section class="hero-section pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="max-w-2xl">
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
                Create, organize and share your wishlists
            </h1>
            <p class="mt-5 text-xl text-gray-600">
                Keep track of everything you want in one place. Share with friends
                and family for birthdays, holidays, or just because.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('wishlist.create') }}" class="bg-primary text-white px-8 py-3 rounded-button text-base font-medium hover:bg-blue-800 whitespace-nowrap !rounded-button">
                    Get Started
                </a>
                <button class="bg-white text-primary border border-primary px-8 py-3 rounded-button text-base font-medium hover:bg-gray-100 whitespace-nowrap !rounded-button">
                    Learn More
                </button>
            </div>
            <div class="mt-8 flex items-center">
                <div class="flex -space-x-2">
                    <img
                        class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20woman%20with%20short%20brown%20hair%2C%20smiling%2C%20business%20casual%20attire%2C%20neutral%20background%2C%20high%20quality%20portrait&width=100&height=100&seq=user1&orientation=squarish"
                        alt=""
                    />
                    <img
                        class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20middle-aged%20man%20with%20glasses%20and%20short%20dark%20hair%2C%20smiling%2C%20business%20casual%20attire%2C%20neutral%20background%2C%20high%20quality%20portrait&width=100&height=100&seq=user2&orientation=squarish"
                        alt=""
                    />
                    <img
                        class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20woman%20with%20long%20blonde%20hair%2C%20smiling%2C%20business%20casual%20attire%2C%20neutral%20background%2C%20high%20quality%20portrait&width=100&height=100&seq=user3&orientation=squarish"
                        alt=""
                    />
                </div>
                <p class="ml-4 text-sm text-gray-700">
                    Joined by <span class="font-medium">50,000+</span> users
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900">
                Why Choose WishKeeper?
            </h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Our platform makes wishlist creation simple, organized, and social.
            </p>
        </div>
        <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Feature 1 -->
            <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary bg-opacity-10 text-white mb-5">
                    <i class="ri-folder-add-line ri-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">
                    Easy Organization
                </h3>
                <p class="mt-4 text-gray-600">
                    Create multiple wishlists for different occasions and categories.
                    Keep everything organized in one place.
                </p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary bg-opacity-10 text-white mb-5">
                    <i class="ri-share-line ri-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Simple Sharing</h3>
                <p class="mt-4 text-gray-600">
                    Share your wishlists with friends and family via email, social
                    media, or a unique link.
                </p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-gray-50 rounded-lg p-8 shadow-sm">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary bg-opacity-10 text-white mb-5">
                    <i class="ri-notification-line ri-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">
                    Smart Notifications
                </h3>
                <p class="mt-4 text-gray-600">
                    Get alerts for price drops, back-in-stock items, and when someone
                    purchases from your list.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900">How It Works</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Creating and sharing wishlists has never been easier.
            </p>
        </div>
        <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
            <!-- Step 1 -->
            <div class="relative">
                <div
                    class="absolute -left-4 -top-4 w-12 h-12 flex items-center justify-center rounded-full bg-primary text-white font-bold text-lg"
                >
                    1
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm h-full">
                    <img
                        src="https://readdy.ai/api/search-image?query=A%20person%20creating%20an%20account%20on%20a%20wishlist%20website%2C%20shown%20from%20above%20with%20hands%20typing%20on%20keyboard%2C%20modern%20clean%20desk%20setup%20with%20minimalist%20aesthetic%2C%20soft%20lighting%2C%20high%20quality%20detailed%20image&width=400&height=300&seq=step1&orientation=landscape"
                        alt="Sign Up"
                        class="w-full h-40 object-cover rounded mb-4"
                    />
                    <h3 class="text-lg font-semibold text-gray-900">Sign Up</h3>
                    <p class="mt-2 text-gray-600">
                        Create your free account in seconds with email or social login.
                    </p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="relative">
                <div
                    class="absolute -left-4 -top-4 w-12 h-12 flex items-center justify-center rounded-full bg-primary text-white font-bold text-lg"
                >
                    2
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm h-full">
                    <img
                        src="https://readdy.ai/api/search-image?query=A%20person%20creating%20a%20new%20wishlist%20on%20a%20digital%20device%2C%20shown%20with%20organized%20categories%20and%20items%20being%20added%20to%20a%20wishlist%2C%20modern%20clean%20desk%20setup%20with%20minimalist%20aesthetic%2C%20soft%20lighting%2C%20high%20quality%20detailed%20image&width=400&height=300&seq=step2&orientation=landscape"
                        alt="Create Wishlist"
                        class="w-full h-40 object-cover rounded mb-4"
                    />
                    <h3 class="text-lg font-semibold text-gray-900">
                        Create Wishlist
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Name your wishlist, choose privacy settings, and add a
                        description.
                    </p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="relative">
                <div
                    class="absolute -left-4 -top-4 w-12 h-12 flex items-center justify-center rounded-full bg-primary text-white font-bold text-lg"
                >
                    3
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm h-full">
                    <img
                        src="https://readdy.ai/api/search-image?query=A%20person%20adding%20items%20to%20a%20wishlist%2C%20browsing%20products%20on%20a%20laptop%20or%20tablet%2C%20with%20product%20cards%20being%20added%20to%20a%20collection%2C%20modern%20clean%20desk%20setup%20with%20minimalist%20aesthetic%2C%20soft%20lighting%2C%20high%20quality%20detailed%20image&width=400&height=300&seq=step3&orientation=landscape"
                        alt="Add Items"
                        class="w-full h-40 object-cover rounded mb-4"
                    />
                    <h3 class="text-lg font-semibold text-gray-900">Add Items</h3>
                    <p class="mt-2 text-gray-600">
                        Add items from any website using our browser extension or manual
                        entry.
                    </p>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="relative">
                <div
                    class="absolute -left-4 -top-4 w-12 h-12 flex items-center justify-center rounded-full bg-primary text-white font-bold text-lg"
                >
                    4
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm h-full">
                    <img
                        src="https://readdy.ai/api/search-image?query=A%20person%20sharing%20a%20wishlist%20with%20friends%20via%20social%20media%20or%20email%2C%20shown%20with%20sharing%20interface%20and%20multiple%20devices%2C%20modern%20clean%20desk%20setup%20with%20minimalist%20aesthetic%2C%20soft%20lighting%2C%20high%20quality%20detailed%20image&width=400&height=300&seq=step4&orientation=landscape"
                        alt="Share"
                        class="w-full h-40 object-cover rounded mb-4"
                    />
                    <h3 class="text-lg font-semibold text-gray-900">Share</h3>
                    <p class="mt-2 text-gray-600">
                        Share your wishlist with friends and family through multiple
                        channels.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Wishlists Counter Section -->
<section class="py-20 bg-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">
            Our Wishlists inspire
        </h2>
        <p class="text-gray-600 text-lg mb-10">
            Every day there are more and more Wishlists. Let yourself be enchanted and create your own now.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-8 mb-10 text-pink-700 font-semibold text-2xl">
            <div>
                <p>149.618</p>
                <p class="text-sm text-gray-500 font-normal">Wishlists</p>
            </div>
            <div>
                <p>1.864.641</p>
                <p class="text-sm text-gray-500 font-normal">Wishes</p>
            </div>
            <div>
                <p>605.858</p>
                <p class="text-sm text-gray-500 font-normal">Fulfilled wishes</p>
            </div>
        </div>
        <a href="#" class="inline-block bg-primary hover:bg-blue-800 text-white text-lg font-semibold py-3 px-6 rounded shadow">
            Create Wishlist
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <a href="#" class="font-['Pacifico'] text-white text-2xl"
                >WishKeeper</a
                >
                <p class="mt-4 text-gray-400 text-sm">
                    The easiest way to create, organize, and share your wishlists.
                </p>
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-700"
                        >
                            <i class="ri-facebook-fill"></i>
                        </div>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-700"
                        >
                            <i class="ri-twitter-x-fill"></i>
                        </div>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-700"
                        >
                            <i class="ri-instagram-fill"></i>
                        </div>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-700"
                        >
                            <i class="ri-pinterest-fill"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <h3
                    class="text-sm font-semibold text-gray-300 uppercase tracking-wider"
                >
                    Product
                </h3>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Features</a
                        >
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Pricing</a
                        >
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Browser Extension</a
                        >
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Mobile App</a
                        >
                    </li>
                </ul>
            </div>
            <div>
                <h3
                    class="text-sm font-semibold text-gray-300 uppercase tracking-wider"
                >
                    Support
                </h3>
                <ul class="mt-4 space-y-2">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Help Center</a
                        >
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Contact Us</a
                        >
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Privacy Policy</a
                        >
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white text-sm"
                        >Terms of Service</a
                        >
                    </li>
                </ul>
            </div>
            <div>
                <h3
                    class="text-sm font-semibold text-gray-300 uppercase tracking-wider"
                >
                    Stay Updated
                </h3>
                <p class="mt-4 text-gray-400 text-sm">
                    Subscribe to our newsletter for tips and updates.
                </p>
                <form class="mt-4">
                    <div class="flex">
                        <input
                            type="email"
                            placeholder="Your email"
                            class="px-4 py-2 w-full bg-white rounded-l-button text-gray-900 text-sm border-none focus:outline-none focus:ring-2 focus:ring-primary"
                        />
                        <button
                            type="submit"
                            class="bg-primary px-4 py-2 rounded-r-button text-white text-sm font-medium hover:bg-opacity-90 whitespace-nowrap"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div
            class="mt-12 pt-8 border-t border-gray-700 text-center text-gray-400 text-sm"
        >
            <p>© {{ date("Y") }} WishKeeper. All rights reserved.</p>
        </div>
    </div>
</footer>

@RegisterServiceWorkerScript
</body>
</html>
