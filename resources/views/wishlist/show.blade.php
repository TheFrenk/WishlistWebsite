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
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .drag-handle {
            cursor: grab;
        }
        .dragging {
            opacity: 0.5;
            border: 2px dashed #4f46e5;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
<header class="bg-white shadow-sm">
    <div
        class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between"
    >
        <div class="flex items-center space-x-4">
            <a href="{{ route('main.index') }}" class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-primary transition-colors">
                <i class="ri-arrow-left-line ri-lg"></i>
            </a>
            <h1 class="text-2xl font-semibold text-gray-800">Create Wishlist</h1>
        </div>
        <a href="#" class="font-['Pacifico'] text-primary text-2xl">WishKeeper</a>
    </div>
</header>

<main class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <p class="text-gray-600 mb-6">
            Create your wishlist without an account. You'll receive a unique link
            to access and share your wishlist.
        </p>

        <form id="wishlistForm">
            <div class="mb-6">
                <label for="wishlistTitle" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input
                    type="text"
                    id="wishlistTitle"
                    placeholder="e.g. name, nickname, abbreviation, ..."
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"
                />
            </div>

            <div class="mb-6">
                <label for="wishlistTitle" class="block text-sm font-medium text-gray-700 mb-1">Wishlist Title</label>
                <input
                    type="text"
                    id="wishlistTitle"
                    placeholder="Enter Wishlist Name"
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"
                />
            </div>

            <div class="mb-6">
                <label for="wishlistDescription" class="block text-sm font-medium text-gray-700 mb-1">Description (optional)</label>
                <textarea
                    id="wishlistDescription"
                    rows="3"
                    placeholder="Add a description for your wishlist"
                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"
                ></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Privacy Settings</label>
                    <div class="flex items-center bg-gray-100 rounded-full p-1 w-fit">
                        <button type="button" class="privacy-option selected px-4 py-2 rounded-full bg-white shadow text-gray-800 whitespace-nowrap !rounded-button">
                            Public
                        </button>
                        <button type="button" class="privacy-option px-4 py-2 rounded-full text-gray-600 whitespace-nowrap !rounded-button">
                            Private
                        </button>
                    </div>
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category (optional)</label>
                    <div class="relative">
                        <button
                            type="button"
                            id="categoryButton"
                            class="w-full flex items-center justify-between px-4 py-3 border border-gray-300 rounded bg-white text-left focus:ring-2 focus:ring-primary focus:border-primary outline-none transition !rounded-button"
                        >
                            <span id="selectedCategory">Select a category</span>
                            <span class="w-5 h-5 flex items-center justify-center">
                    <i class="ri-arrow-down-s-line"></i>
                  </span>
                        </button>
                        <div
                            id="categoryDropdown"
                            class="hidden absolute z-10 mt-1 w-full bg-white border border-gray-200 rounded shadow-lg"
                        >
                            <div class="py-1 max-h-60 overflow-y-auto">
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Birthday
                                </button>
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Wedding
                                </button>
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Baby Shower
                                </button>
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Holiday
                                </button>
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Graduation
                                </button>
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Housewarming
                                </button>
                                <button
                                    type="button"
                                    class="category-option block w-full px-4 py-2 text-left hover:bg-gray-100 whitespace-nowrap"
                                >
                                    Other
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Wishlist Items</h2>
            <div class="flex items-center space-x-2">
                <button
                    id="previewButton"
                    class="flex items-center px-4 py-2 text-gray-600 border border-gray-300 rounded hover:bg-gray-50 transition whitespace-nowrap !rounded-button"
                >
              <span class="w-5 h-5 flex items-center justify-center mr-2">
                <i class="ri-eye-line"></i>
              </span>
                    Preview
                </button>
            </div>
        </div>

        <div id="itemsList" class="space-y-4">
            <div class="item-entry bg-gray-50 rounded-lg p-4 border border-gray-200" data-index="${index}">
                <div class="flex items-start gap-3">
                    <div class="drag-handle w-6 h-6 flex items-center justify-center text-gray-400 mt-3">
                        <i class="ri-drag-move-line"></i>
                    </div>
                    <div class="flex-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Item Name*</label>
                                <input type="text" placeholder="Enter item name" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Price (optional)</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500">$</span>
                                    </div>
                                    <input type="number" placeholder="0.00" min="0" step="0.01"
                                           class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Link (optional)</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                              <span class="w-5 h-5 flex items-center justify-center text-gray-500">
                                                  <i class="ri-link"></i>
                                              </span>
                                </div>
                                <input type="url" placeholder="https://example.com/product"
                                       class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Notes (optional)</label>
                            <textarea rows="2" placeholder="Add any details or specifications"
                                      class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"></textarea>
                        </div>

                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                                <div class="flex items-center bg-white rounded-full border border-gray-300 p-1">
                                    <button type="button" class="priority-option px-3 py-1 rounded-full text-gray-600 text-sm whitespace-nowrap !rounded-button">Low</button>
                                    <button type="button" class="priority-option selected px-3 py-1 rounded-full bg-primary text-white text-sm whitespace-nowrap !rounded-button">Medium</button>
                                    <button type="button" class="priority-option px-3 py-1 rounded-full text-gray-600 text-sm whitespace-nowrap !rounded-button">High</button>
                                </div>
                            </div>

                            <button type="button" class="remove-item text-gray-500 hover:text-red-500 transition flex items-center">
                                          <span class="w-5 h-5 flex items-center justify-center mr-1">
                                              <i class="ri-delete-bin-line"></i>
                                          </span>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button
            id="addItemButton"
            class="mt-6 flex items-center justify-center w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-primary hover:bg-gray-50 transition !rounded-button"
        >
          <span class="w-6 h-6 flex items-center justify-center mr-2">
            <i class="ri-add-line ri-lg"></i>
          </span>
            Add Item
        </button>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Share Options</h2>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">Shareable Link</label>
                <div class="flex">
                    <input
                        type="text"
                        value="https://wishlist.example.com/s/abcd1234"
                        readonly
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-l focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"
                    />
                    <button type="button" class="px-4 py-3 bg-gray-100 border border-gray-300 border-l-0 rounded-r hover:bg-gray-200 transition !rounded-button">
                <span class="w-5 h-5 flex items-center justify-center">
                  <i class="ri-file-copy-line"></i>
                </span>
                    </button>
                </div>
            </div>
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">Edit Link</label>
                <div class="flex">
                    <input
                        type="text"
                        value="https://wishlist.example.com/s/abcd1234"
                        readonly
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-l focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"
                    />
                    <button type="button" class="px-4 py-3 bg-gray-100 border border-gray-300 border-l-0 rounded-r hover:bg-gray-200 transition !rounded-button">
                <span class="w-5 h-5 flex items-center justify-center">
                  <i class="ri-file-copy-line"></i>
                </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <button
            type="button"
            class="order-3 md:order-1 text-gray-600 hover:text-gray-800 transition whitespace-nowrap"
        >
            Cancel
        </button>

        <div class="order-2 flex flex-col sm:flex-row gap-4 w-full md:w-auto">
            <button
                type="button"
                id="saveDraftButton"
                class="px-6 py-3 border border-gray-300 rounded bg-white text-gray-700 hover:bg-gray-50 transition whitespace-nowrap !rounded-button"
            >
                Save as Draft
            </button>
            <button
                type="button"
                id="createWishlistButton"
                class="px-6 py-3 bg-primary text-white rounded hover:bg-primary/90 transition whitespace-nowrap !rounded-button"
            >
                Create Wishlist
            </button>
        </div>
    </div>
</main>

<footer class="bg-white border-t border-t-gray-200 mt-12">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div
            class="flex flex-col md:flex-row justify-between items-center gap-4"
        >
            <p class="text-gray-600 text-sm">
                By creating a wishlist, you agree to our
                <a href="#" class="text-primary hover:underline">Terms of Use</a>.
            </p>
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-600 hover:text-primary transition"
                >Create an Account</a
                >
                <a href="#" class="text-gray-600 hover:text-primary transition"
                >Help & FAQ</a
                >
            </div>
        </div>
        <div class="mt-8 text-center text-gray-500 text-sm">
            <p>© 2025 Wishlist Service. All rights reserved.</p>
        </div>
    </div>
</footer>

<script id="itemTemplate">
    function createItemTemplate(index) {
        return `
                      <div class="item-entry bg-gray-50 rounded-lg p-4 border border-gray-200" data-index="${index}">
                          <div class="flex items-start gap-3">
                              <div class="drag-handle w-6 h-6 flex items-center justify-center text-gray-400 mt-3">
                                  <i class="ri-drag-move-line"></i>
                              </div>
                              <div class="flex-1">
                                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                      <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-1">Item Name*</label>
                                          <input type="text" placeholder="Enter item name" required
                                              class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                      </div>
                                      <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-1">Price (optional)</label>
                                          <div class="relative">
                                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                  <span class="text-gray-500">$</span>
                                              </div>
                                              <input type="number" placeholder="0.00" min="0" step="0.01"
                                                  class="w-full pl-8 pr-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="mb-4">
                                      <label class="block text-sm font-medium text-gray-700 mb-1">Link (optional)</label>
                                      <div class="relative">
                                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                              <span class="w-5 h-5 flex items-center justify-center text-gray-500">
                                                  <i class="ri-link"></i>
                                              </span>
                                          </div>
                                          <input type="url" placeholder="https://example.com/product"
                                              class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition">
                                      </div>
                                  </div>

                                  <div class="mb-4">
                                      <label class="block text-sm font-medium text-gray-700 mb-1">Notes (optional)</label>
                                      <textarea rows="2" placeholder="Add any details or specifications"
                                          class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary outline-none transition"></textarea>
                                  </div>

                                  <div class="flex flex-wrap items-center justify-between gap-4">
                                      <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                                          <div class="flex items-center bg-white rounded-full border border-gray-300 p-1">
                                              <button type="button" class="priority-option px-3 py-1 rounded-full text-gray-600 text-sm whitespace-nowrap !rounded-button">Low</button>
                                              <button type="button" class="priority-option selected px-3 py-1 rounded-full bg-primary text-white text-sm whitespace-nowrap !rounded-button">Medium</button>
                                              <button type="button" class="priority-option px-3 py-1 rounded-full text-gray-600 text-sm whitespace-nowrap !rounded-button">High</button>
                                          </div>
                                      </div>

                                      <button type="button" class="remove-item text-gray-500 hover:text-red-500 transition flex items-center">
                                          <span class="w-5 h-5 flex items-center justify-center mr-1">
                                              <i class="ri-delete-bin-line"></i>
                                          </span>
                                          Remove
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  `;
    }
</script>

<script id="privacyToggleScript">
    document.addEventListener("DOMContentLoaded", function () {
        const privacyOptions = document.querySelectorAll(".privacy-option");

        privacyOptions.forEach((option) => {
            option.addEventListener("click", function () {
                privacyOptions.forEach((opt) => {
                    opt.classList.remove("selected", "bg-white", "shadow", "text-gray-800");
                    opt.classList.add("text-gray-600");
                });

                this.classList.add("selected", "bg-white", "shadow", "text-gray-800");
                this.classList.remove("text-gray-600");
            });
        });
    });
</script>

<script id="categoryDropdownScript">
    document.addEventListener("DOMContentLoaded", function () {
        const categoryButton = document.getElementById("categoryButton");
        const categoryDropdown = document.getElementById("categoryDropdown");
        const categoryOptions = document.querySelectorAll(".category-option");
        const selectedCategory = document.getElementById("selectedCategory");

        categoryButton.addEventListener("click", function () {
            categoryDropdown.classList.toggle("hidden");
        });

        categoryOptions.forEach((option) => {
            option.addEventListener("click", function () {
                selectedCategory.textContent = this.textContent;
                categoryDropdown.classList.add("hidden");
            });
        });

        document.addEventListener("click", function (event) {
            if (
                !categoryButton.contains(event.target) &&
                !categoryDropdown.contains(event.target)
            ) {
                categoryDropdown.classList.add("hidden");
            }
        });
    });
</script>

<script id="itemManagementScript">
    document.addEventListener("DOMContentLoaded", function () {
        const itemsList = document.getElementById("itemsList");
        const addItemButton = document.getElementById("addItemButton");
        let itemCount = 0;

        // Add initial item
        addNewItem();

        addItemButton.addEventListener("click", addNewItem);

        function addNewItem() {
            const newItem = document.createElement("div");
            newItem.innerHTML = createItemTemplate(itemCount++);
            itemsList.appendChild(newItem.firstElementChild);

            // Setup priority selection for the new item
            setupPrioritySelection(newItem.firstElementChild);

            // Setup remove button
            const removeButton =
                newItem.firstElementChild.querySelector(".remove-item");
            removeButton.addEventListener("click", function () {
                if (itemsList.children.length > 1) {
                    this.closest(".item-entry").remove();
                } else {
                    alert("You need at least one item in your wishlist.");
                }
            });
        }

        function setupPrioritySelection(itemElement) {
            const priorityOptions = itemElement.querySelectorAll(".priority-option");

            priorityOptions.forEach((option) => {
                option.addEventListener("click", function () {
                    priorityOptions.forEach((opt) => {
                        opt.classList.remove("selected", "bg-primary", "text-white");
                        opt.classList.add("text-gray-600");
                    });

                    this.classList.add("selected", "bg-primary", "text-white");
                    this.classList.remove("text-gray-600");
                });
            });
        }
    });
</script>

<script id="dragAndDropScript">
    document.addEventListener("DOMContentLoaded", function () {
        const itemsList = document.getElementById("itemsList");

        let draggedItem = null;

        document.addEventListener("mousedown", function (e) {
            if (
                e.target.classList.contains("drag-handle") ||
                e.target.closest(".drag-handle")
            ) {
                draggedItem = e.target.closest(".item-entry");
                draggedItem.classList.add("dragging");

                document.addEventListener("mousemove", onMouseMove);
                document.addEventListener("mouseup", onMouseUp);

                // Prevent text selection during drag
                e.preventDefault();
            }
        });

        function onMouseMove(e) {
            if (!draggedItem) return;

            const itemEntries = Array.from(
                itemsList.querySelectorAll(".item-entry:not(.dragging)"),
            );

            // Find the element we're hovering over
            const nextItem = itemEntries.find((item) => {
                const box = item.getBoundingClientRect();
                return e.clientY < box.top + box.height / 2;
            });

            if (nextItem) {
                itemsList.insertBefore(draggedItem, nextItem);
            } else {
                itemsList.appendChild(draggedItem);
            }
        }

        function onMouseUp() {
            if (draggedItem) {
                draggedItem.classList.remove("dragging");
                draggedItem = null;
            }

            document.removeEventListener("mousemove", onMouseMove);
            document.removeEventListener("mouseup", onMouseUp);
        }
    });
</script>

<script id="formSubmissionScript">
    document.addEventListener("DOMContentLoaded", function () {
        const saveDraftButton = document.getElementById("saveDraftButton");
        const createWishlistButton = document.getElementById("createWishlistButton");
        const wishlistForm = document.getElementById("wishlistForm");

        // Auto-save functionality
        let autoSaveTimeout;
        const formInputs = document.querySelectorAll("input, textarea, select");

        formInputs.forEach((input) => {
            input.addEventListener("input", function () {
                clearTimeout(autoSaveTimeout);
                autoSaveTimeout = setTimeout(function () {
                    saveFormData("autosave");
                }, 3000);
            });
        });

        saveDraftButton.addEventListener("click", function () {
            saveFormData("draft");
        });

        createWishlistButton.addEventListener("click", function () {
            if (validateForm()) {
                saveFormData("final");
                alert(
                    "Your wishlist has been created! You can now share it with others.",
                );
            }
        });

        function validateForm() {
            const title = document.getElementById("wishlistTitle").value.trim();
            if (!title) {
                alert("Please enter a wishlist title.");
                return false;
            }

            const itemEntries = document.querySelectorAll(".item-entry");
            let valid = true;

            itemEntries.forEach((item) => {
                const itemName = item
                    .querySelector('input[placeholder="Enter item name"]')
                    .value.trim();
                if (!itemName) {
                    alert("Please enter a name for all items.");
                    valid = false;
                }
            });

            return valid;
        }

        function saveFormData(saveType) {
            // In a real application, this would save to localStorage or send to a server
            console.log(`Saving wishlist data (${saveType})`);

            if (saveType === "draft") {
                // Show confirmation for manual save
                const saveConfirmation = document.createElement("div");
                saveConfirmation.className =
                    "fixed bottom-4 right-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-lg";
                saveConfirmation.innerHTML = `
                              <div class="flex items-center">
                                  <span class="w-6 h-6 flex items-center justify-center mr-2">
                                      <i class="ri-check-line"></i>
                                  </span>
                                  <p>Draft saved successfully!</p>
                              </div>
                          `;
                document.body.appendChild(saveConfirmation);

                setTimeout(() => {
                    saveConfirmation.remove();
                }, 3000);
            }
        }
    });
</script>

<script id="previewScript">
    document.addEventListener("DOMContentLoaded", function () {
        const previewButton = document.getElementById("previewButton");

        previewButton.addEventListener("click", function () {
            // In a real application, this would show a preview modal or navigate to a preview page
            alert(
                "Preview functionality would show how your wishlist appears to others.",
            );
        });
    });
</script>
</body>
</html>
@RegisterServiceWorkerScript
</html>
