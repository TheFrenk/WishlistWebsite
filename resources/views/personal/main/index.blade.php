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
<body>
    <header class="bg-white shadow-sm">
        <div class="max-w-8xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="{{ route('main.index') }}" class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-primary transition-colors">
                    <i class="ri-arrow-left-line ri-lg"></i>
                </a>
                <h1 class="text-2xl font-semibold text-gray-800">Personal</h1>
            </div>
            <a href="#" class="font-['Pacifico'] text-primary text-2xl">WishKeeper</a>
        </div>
    </header>
    <!-- Wishlist Creation Page (Hidden by default) -->
    <div id="wishlist-page" class="min-h-screen bg-gray-50">
        <div class="flex h-[calc(100vh-4rem)]">
            <!-- Left Sidebar -->
            <div class="w-64 bg-white shadow-sm p-4 hidden md:block">
                <h3 class="font-medium text-gray-900 mb-4">Categories</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center text-white px-3 py-2 rounded-md bg-primary bg-opacity-10">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-home-line"></i>
                            </div>
                            <span>All Wishlists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary px-3 py-2 rounded-md hover:bg-gray-50">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-gift-line"></i>
                            </div>
                            <span>Birthday</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary px-3 py-2 rounded-md hover:bg-gray-50">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-shopping-bag-line"></i>
                            </div>
                            <span>Shopping</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary px-3 py-2 rounded-md hover:bg-gray-50">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-home-heart-line"></i>
                            </div>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary px-3 py-2 rounded-md hover:bg-gray-50">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-book-line"></i>
                            </div>
                            <span>Books</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-700 hover:text-primary px-3 py-2 rounded-md hover:bg-gray-50">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-t-shirt-line"></i>
                            </div>
                            <span>Fashion</span>
                        </a>
                    </li>
                </ul>
                <h3 class="font-medium text-gray-900 mt-8 mb-4">Filters</h3>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                            <input type="checkbox" id="public-only" class="sr-only peer" />
                            <div class="w-10 h-5 bg-gray-200 rounded-full peer peer-checked:bg-primary peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all">

                            </div>
                        </div>
                        <label for="public-only" class="text-sm text-gray-700">Public only</label>
                    </div>
                    <div class="flex items-center">
                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                            <input type="checkbox" id="shared-only" class="sr-only peer" />
                            <div class="w-10 h-5 bg-gray-200 rounded-full peer peer-checked:bg-primary peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all">

                            </div>
                        </div>
                        <label for="shared-only" class="text-sm text-gray-700">Shared only</label>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="flex-1 overflow-auto p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-900">My Wishlists</h1>
                    <div class="flex space-x-3">
                        <div class="relative">
                            <button id="view-toggle" class="bg-white border border-gray-300 rounded-button px-3 py-2 text-gray-700 text-sm font-medium hover:bg-gray-50 whitespace-nowrap !rounded-button flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-1">
                                    <i class="ri-grid-line"></i>
                                </div>
                                Grid View
                                <div class="w-5 h-5 flex items-center justify-center ml-1">
                                    <i class="ri-arrow-down-s-line"></i>
                                </div>
                            </button>
                        </div>
                        <button id="create-wishlist-btn" class="bg-primary text-white px-4 py-2 rounded-button text-sm font-medium hover:bg-opacity-90 whitespace-nowrap !rounded-button flex items-center">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-add-line"></i>
                            </div>
                            Create Wishlist
                        </button>
                    </div>
                </div>
                <!-- Wishlist Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Wishlist Card 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-40 bg-gray-200 relative">
                            <img
                                src="https://readdy.ai/api/search-image?query=A%20collection%20of%20tech%20gadgets%20including%20headphones%2C%20smartphone%2C%20tablet%2C%20and%20smartwatch%20arranged%20neatly%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish1&orientation=landscape"
                                alt="Tech Wishlist"
                                class="w-full h-full object-cover"
                            />
                            <div
                                class="absolute top-3 right-3 bg-white rounded-full p-1 shadow-sm"
                            >
                                <div
                                    class="w-6 h-6 flex items-center justify-center text-gray-700 hover:text-primary"
                                >
                                    <i class="ri-more-2-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900">Tech Gadgets</h3>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-eye-line"></i>
                                    </div>
                                    Public
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2">
                                My collection of must-have tech for 2025
                            </p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="text-sm text-gray-500">12 items</div>
                                <a
                                    href="https://readdy.ai/home/17b99109-c37b-4404-be04-98e553b9e8c1/553ba0a7-c697-499d-bd95-d45cd7132a48"
                                    data-readdy="true"
                                    class="text-primary text-sm font-medium hover:text-primary-dark"
                                >View List</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- Wishlist Card 2 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-40 bg-gray-200 relative">
                            <img
                                src="https://readdy.ai/api/search-image?query=A%20collection%20of%20books%20neatly%20arranged%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20featuring%20fiction%20and%20non-fiction%20titles%20with%20attractive%20covers%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish2&orientation=landscape"
                                alt="Books Wishlist"
                                class="w-full h-full object-cover"
                            />
                            <div
                                class="absolute top-3 right-3 bg-white rounded-full p-1 shadow-sm"
                            >
                                <div
                                    class="w-6 h-6 flex items-center justify-center text-gray-700 hover:text-primary"
                                >
                                    <i class="ri-more-2-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900">Reading List</h3>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-lock-line"></i>
                                    </div>
                                    Private
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2">
                                Books I want to read this summer
                            </p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="text-sm text-gray-500">8 items</div>
                                <a
                                    href="https://readdy.ai/home/17b99109-c37b-4404-be04-98e553b9e8c1/553ba0a7-c697-499d-bd95-d45cd7132a48"
                                    data-readdy="true"
                                    class="text-primary text-sm font-medium hover:text-primary-dark"
                                >View List</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- Wishlist Card 3 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-40 bg-gray-200 relative">
                            <img
                                src="https://readdy.ai/api/search-image?query=A%20collection%20of%20home%20decor%20items%20including%20vases%2C%20candles%2C%20throw%20pillows%2C%20and%20small%20decorative%20objects%20arranged%20neatly%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish3&orientation=landscape"
                                alt="Home Decor Wishlist"
                                class="w-full h-full object-cover"
                            />
                            <div
                                class="absolute top-3 right-3 bg-white rounded-full p-1 shadow-sm"
                            >
                                <div
                                    class="w-6 h-6 flex items-center justify-center text-gray-700 hover:text-primary"
                                >
                                    <i class="ri-more-2-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900">Home Decor</h3>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-share-line"></i>
                                    </div>
                                    Shared
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2">
                                Ideas for our new apartment
                            </p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="text-sm text-gray-500">15 items</div>
                                <a
                                    href="https://readdy.ai/home/17b99109-c37b-4404-be04-98e553b9e8c1/553ba0a7-c697-499d-bd95-d45cd7132a48"
                                    data-readdy="true"
                                    class="text-primary text-sm font-medium hover:text-primary-dark"
                                >View List</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- Wishlist Card 4 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-40 bg-gray-200 relative">
                            <img
                                src="https://readdy.ai/api/search-image?query=A%20collection%20of%20birthday%20gift%20ideas%20including%20wrapped%20presents%2C%20gift%20cards%2C%20and%20celebration%20items%20arranged%20neatly%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish4&orientation=landscape"
                                alt="Birthday Wishlist"
                                class="w-full h-full object-cover"
                            />
                            <div
                                class="absolute top-3 right-3 bg-white rounded-full p-1 shadow-sm"
                            >
                                <div
                                    class="w-6 h-6 flex items-center justify-center text-gray-700 hover:text-primary"
                                >
                                    <i class="ri-more-2-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900">Birthday Wishlist</h3>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-share-line"></i>
                                    </div>
                                    Shared
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2">
                                My birthday is on July 15th!
                            </p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="text-sm text-gray-500">7 items</div>
                                <a
                                    href="https://readdy.ai/home/17b99109-c37b-4404-be04-98e553b9e8c1/553ba0a7-c697-499d-bd95-d45cd7132a48"
                                    data-readdy="true"
                                    class="text-primary text-sm font-medium hover:text-primary-dark"
                                >View List</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- Wishlist Card 5 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="h-40 bg-gray-200 relative">
                            <img
                                src="https://readdy.ai/api/search-image?query=A%20collection%20of%20fashion%20items%20including%20clothing%2C%20shoes%2C%20and%20accessories%20arranged%20neatly%20on%20a%20clean%20surface%20with%20soft%20lighting%20and%20minimalist%20aesthetic%2C%20high%20quality%20detailed%20image&width=400&height=200&seq=wish5&orientation=landscape"
                                alt="Fashion Wishlist"
                                class="w-full h-full object-cover"
                            />
                            <div
                                class="absolute top-3 right-3 bg-white rounded-full p-1 shadow-sm"
                            >
                                <div
                                    class="w-6 h-6 flex items-center justify-center text-gray-700 hover:text-primary"
                                >
                                    <i class="ri-more-2-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-gray-900">Summer Fashion</h3>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                                        <i class="ri-eye-line"></i>
                                    </div>
                                    Public
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mt-2">
                                Outfit ideas for summer 2025
                            </p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="text-sm text-gray-500">20 items</div>
                                <a
                                    href="https://readdy.ai/home/17b99109-c37b-4404-be04-98e553b9e8c1/553ba0a7-c697-499d-bd95-d45cd7132a48"
                                    data-readdy="true"
                                    class="text-primary text-sm font-medium hover:text-primary-dark"
                                >View List</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar -->
            <div class="w-64 bg-white shadow-sm p-4 hidden lg:block">
                <h3 class="font-medium text-gray-900 mb-4">Quick Stats</h3>
                <div class="space-y-4">
                    <div class="bg-gray-50 p-3 rounded">
                        <div class="text-sm text-gray-500">Total Wishlists</div>
                        <div class="text-2xl font-semibold text-gray-900">5</div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <div class="text-sm text-gray-500">Total Items</div>
                        <div class="text-2xl font-semibold text-gray-900">62</div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <div class="text-sm text-gray-500">Shared Lists</div>
                        <div class="text-2xl font-semibold text-gray-900">2</div>
                    </div>
                </div>
                <h3 class="font-medium text-gray-900 mt-8 mb-4">Recent Activity</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 flex-shrink-0 mr-3"
                        >
                            <i class="ri-add-line"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-900">
                                You added a new item to
                                <span class="font-medium">Tech Gadgets</span>
                            </p>
                            <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-green-100 text-green-600 flex-shrink-0 mr-3"
                        >
                            <i class="ri-share-line"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-900">
                                You shared <span class="font-medium">Home Decor</span> with 3
                                people
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Yesterday</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-100 text-purple-600 flex-shrink-0 mr-3"
                        >
                            <i class="ri-price-tag-3-line"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-900">
                                Price drop alert on item in
                                <span class="font-medium">Tech Gadgets</span>
                            </p>
                            <p class="text-xs text-gray-500 mt-1">2 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Wishlist Modal -->
    <div
        id="create-wishlist-modal"
        class="hidden fixed inset-0 z-50 flex items-center bg-black/50 justify-center"
    >
        <div class="modal-overlay absolute inset-0"></div>
        <div
            class="modal-container bg-white w-full max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto"
        >
            <div class="modal-content py-4 text-left px-6">
                <div class="flex justify-between items-center pb-3 border-b border-b-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Create New Wishlist
                    </h3>
                    <button
                        id="modal-close"
                        class="modal-close text-gray-500 hover:text-gray-700"
                    >
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-close-line"></i>
                        </div>
                    </button>
                </div>
                <div class="my-6">
                    <form id="wishlist-form">
                        <div class="mb-4">
                            <label
                                for="wishlist-name"
                                class="block text-sm font-medium text-gray-700 mb-1"
                            >Wishlist Name*</label
                            >
                            <input
                                type="text"
                                id="wishlist-name"
                                class="w-full px-3 py-2 border border-gray-300 rounded text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="Enter wishlist name"
                                required
                            />
                        </div>
                        <div class="mb-4">
                            <label
                                for="wishlist-description"
                                class="block text-sm font-medium text-gray-700 mb-1"
                            >Description (optional)</label
                            >
                            <textarea
                                id="wishlist-description"
                                rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="Add a description"
                            ></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1"
                            >Privacy Setting</label
                            >
                            <div class="flex space-x-4">
                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        id="privacy-public"
                                        name="privacy"
                                        value="public"
                                        class="sr-only peer"
                                        checked
                                    />
                                    <label
                                        for="privacy-public"
                                        class="peer-checked:bg-primary peer-checked:text-white px-3 py-2 rounded-button text-sm border border-gray-300 cursor-pointer whitespace-nowrap !rounded-button"
                                    >Public</label
                                    >
                                </div>
                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        id="privacy-private"
                                        name="privacy"
                                        value="private"
                                        class="sr-only peer"
                                    />
                                    <label
                                        for="privacy-private"
                                        class="peer-checked:bg-primary peer-checked:text-white px-3 py-2 rounded-button text-sm border border-gray-300 cursor-pointer whitespace-nowrap !rounded-button"
                                    >Private</label
                                    >
                                </div>
                                <div class="flex items-center">
                                    <input
                                        type="radio"
                                        id="privacy-shared"
                                        name="privacy"
                                        value="shared"
                                        class="sr-only peer"
                                    />
                                    <label
                                        for="privacy-shared"
                                        class="peer-checked:bg-primary peer-checked:text-white px-3 py-2 rounded-button text-sm border border-gray-300 cursor-pointer whitespace-nowrap !rounded-button"
                                    >Shared</label
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label
                                for="wishlist-category"
                                class="block text-sm font-medium text-gray-700 mb-1"
                            >Category</label
                            >
                            <div class="relative">
                                <select
                                    id="wishlist-category"
                                    class="appearance-none w-full px-3 py-2 border border-gray-300 rounded text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary pr-8"
                                >
                                    <option value="">Select a category</option>
                                    <option value="birthday">Birthday</option>
                                    <option value="shopping">Shopping</option>
                                    <option value="home">Home</option>
                                    <option value="books">Books</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="tech">Tech</option>
                                    <option value="other">Other</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                                >
                                    <div class="w-5 h-5 flex items-center justify-center">
                                        <i class="ri-arrow-down-s-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1"
                            >Cover Image (optional)</label
                            >
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded"
                            >
                                <div class="space-y-1 text-center">
                                    <div
                                        class="w-12 h-12 mx-auto flex items-center justify-center text-gray-400"
                                    >
                                        <i class="ri-image-add-line ri-2x"></i>
                                    </div>
                                    <div class="flex text-sm text-gray-600">
                                        <label
                                            for="file-upload"
                                            class="relative cursor-pointer bg-white rounded font-medium text-primary hover:text-primary focus-within:outline-none"
                                        >
                                            <span>Upload a file</span>
                                            <input
                                                id="file-upload"
                                                name="file-upload"
                                                type="file"
                                                class="sr-only"
                                            />
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="flex justify-end pt-3 border-t border-t-gray-200">
                    <button
                        id="modal-cancel"
                        class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-button text-sm font-medium hover:bg-gray-50 mr-2 whitespace-nowrap !rounded-button"
                    >
                        Cancel
                    </button>
                    <button
                        id="modal-create"
                        class="bg-primary text-white px-4 py-2 rounded-button text-sm font-medium hover:bg-opacity-90 whitespace-nowrap !rounded-button"
                    >
                        Create Wishlist
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script id="page-navigation">
        document.addEventListener("DOMContentLoaded", function () {
            const createWishlistBtn = document.getElementById("create-wishlist-btn");
            const landingPage = document.querySelector(
                "body > :not(#wishlist-page):not(#create-wishlist-modal)",
            );
            const wishlistPage = document.getElementById("wishlist-page");
            const getStartedBtn = document.querySelector(".hero-section .bg-primary");
            // For demo purposes, show wishlist page when "Get Started" is clicked
            if (getStartedBtn) {
                getStartedBtn.addEventListener("click", function () {
                    document
                        .querySelectorAll(
                            "body > :not(#wishlist-page):not(#create-wishlist-modal)",
                        )
                        .forEach((el) => {
                            el.classList.add("hidden");
                        });
                    wishlistPage.classList.remove("hidden");
                });
            }
            // For demo purposes, show landing page when logo is clicked
            const logo = document.querySelector("nav .font-['Pacifico']");
            if (logo) {
                logo.addEventListener("click", function (e) {
                    e.preventDefault();
                    wishlistPage.classList.add("hidden");
                    document
                        .querySelectorAll(
                            "body > :not(#wishlist-page):not(#create-wishlist-modal)",
                        )
                        .forEach((el) => {
                            el.classList.remove("hidden");
                        });
                });
            }
        });
    </script>
    <script id="modal-functionality">
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("create-wishlist-modal");
            const modalClose = document.getElementById("modal-close");
            const modalCancel = document.getElementById("modal-cancel");
            const modalCreate = document.getElementById("modal-create");
            const createWishlistBtn = document.getElementById("create-wishlist-btn");
            // Open modal
            if (createWishlistBtn) {
                createWishlistBtn.addEventListener("click", function () {
                    modal.classList.add("active");
                    document.body.style.overflow = "hidden";
                });
            }
            // Close modal functions
            const closeModal = function () {
                modal.classList.remove("active");
                document.body.style.overflow = "";
            };
            if (modalClose) modalClose.addEventListener("click", closeModal);
            if (modalCancel) modalCancel.addEventListener("click", closeModal);
            // Close when clicking outside the modal content
            modal.addEventListener("click", function (e) {
                if (e.target === modal || e.target.classList.contains("modal-overlay")) {
                    closeModal();
                }
            });
            // Form submission
            if (modalCreate) {
                modalCreate.addEventListener("click", function (e) {
                    e.preventDefault();
                    const nameInput = document.getElementById("wishlist-name");
                    // Simple validation
                    if (!nameInput.value.trim()) {
                        nameInput.classList.add("border-red-500");
                        nameInput.focus();
                        return;
                    }
                    // Here you would normally submit the form data
                    // For demo purposes, just close the modal
                    closeModal();
                    // Show a success message
                    const successMessage = document.createElement("div");
                    successMessage.className =
                        "fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg";
                    successMessage.textContent = "Wishlist created successfully!";
                    document.body.appendChild(successMessage);
                    // Remove the message after 3 seconds
                    setTimeout(() => {
                        successMessage.remove();
                    }, 3000);
                });
            }
        });
    </script>
    <script id="form-interactions">
        document.addEventListener("DOMContentLoaded", function () {
            // Reset validation styling on input
            const nameInput = document.getElementById("wishlist-name");
            if (nameInput) {
                nameInput.addEventListener("input", function () {
                    if (this.value.trim()) {
                        this.classList.remove("border-red-500");
                    }
                });
            }
            // File upload preview
            const fileUpload = document.getElementById("file-upload");
            if (fileUpload) {
                fileUpload.addEventListener("change", function (e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (event) {
                            const uploadArea = fileUpload.closest("div.border-dashed");
                            // Clear existing content
                            uploadArea.innerHTML = "";
                            // Create image preview
                            const img = document.createElement("img");
                            img.src = event.target.result;
                            img.className = "h-32 w-auto mx-auto object-cover";
                            // Create remove button
                            const removeBtn = document.createElement("button");
                            removeBtn.className = "mt-2 text-sm text-red-500 hover:text-red-700";
                            removeBtn.textContent = "Remove";
                            removeBtn.onclick = function (e) {
                                e.preventDefault();
                                // Reset the file input
                                fileUpload.value = "";
                                // Restore the original upload area
                                uploadArea.innerHTML = `
      <div class="space-y-1 text-center">
      <div class="w-12 h-12 mx-auto flex items-center justify-center text-gray-400">
      <i class="ri-image-add-line ri-2x"></i>
      </div>
      <div class="flex text-sm text-gray-600">
      <label for="file-upload" class="relative cursor-pointer bg-white rounded font-medium text-primary hover:text-primary focus-within:outline-none">
      <span>Upload a file</span>
      <input id="file-upload" name="file-upload" type="file" class="sr-only">
      </label>
      <p class="pl-1">or drag and drop</p>
      </div>
      <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
      </div>
      `;
                            };
                            // Add elements to the upload area
                            uploadArea.appendChild(img);
                            uploadArea.appendChild(removeBtn);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>
</body>
