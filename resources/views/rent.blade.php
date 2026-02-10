     @extends('layouts.app')

     @section('content')
         <!-- Hero Section -->
         <section class="pt-24 pb-16 md:pt-32 md:pb-24 px-6 bg-gradient-to-r from-blue-50 to-purple-50">
             <div class="container mx-auto">
                 <div class="flex flex-col md:flex-row items-center">
                     <div class="md:w-1/2 mb-12 md:mb-0">
                         <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">Community Marketplace</h1>
                         <p class="text-xl text-gray-600 mb-8">Support local artisans and entrepreneurs from our community.
                             Every purchase helps sustain livelihoods and empowers families.</p>

                         <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                             <a href="#categories"
                                 class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-bold text-center transition duration-300">Shop
                                 Now</a>
                             <a href="#sell-with-us"
                                 class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-3 rounded-full font-bold text-center transition duration-300">Become
                                 a Seller</a>
                         </div>

                         <div class="mt-8 flex items-center space-x-6">
                             <div class="text-center">
                                 <div class="text-2xl font-bold text-blue-600">150+</div>
                                 <div class="text-gray-600">Local Artisans</div>
                             </div>
                             <div class="text-center">
                                 <div class="text-2xl font-bold text-green-600">500+</div>
                                 <div class="text-gray-600">Products</div>
                             </div>
                             <div class="text-center">
                                 <div class="text-2xl font-bold text-purple-600">100%</div>
                                 <div class="text-gray-600">Direct to Artisan</div>
                             </div>
                         </div>
                     </div>
                     <div class="md:w-1/2 flex justify-center">
                         <div class="relative">
                             <div
                                 class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-gradient-to-br from-blue-100 to-purple-100 flex items-center justify-center shadow-xl">
                                 <i class="fas fa-shopping-bag text-7xl md:text-8xl text-blue-400"></i>
                             </div>
                             <div
                                 class="absolute -top-4 -right-4 w-32 h-32 rounded-full bg-yellow-100 flex items-center justify-center shadow-lg">
                                 <i class="fas fa-tshirt text-4xl text-yellow-500"></i>
                             </div>
                             <div
                                 class="absolute -bottom-6 -left-6 w-40 h-40 rounded-full bg-green-100 flex items-center justify-center shadow-lg">
                                 <i class="fas fa-gift text-5xl text-green-500"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Categories Section -->
         <section id="categories" class="py-16 px-6 bg-white">
             <div class="container mx-auto">
                 <div class="text-center mb-12">
                     <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Shop by Category</h2>
                     <p class="text-gray-600 max-w-2xl mx-auto">Discover unique handmade products across different
                         categories</p>
                 </div>

                 <div class="flex flex-wrap justify-center gap-4 mb-12" id="category-filters">
                     <button
                         class="category-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-blue-50 hover:border-blue-300 transition active"
                         data-category="all">All Products</button>
                     <button
                         class="category-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-green-50 hover:border-green-300 transition"
                         data-category="crafts">Handmade Crafts</button>
                     <button
                         class="category-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-yellow-50 hover:border-yellow-300 transition"
                         data-category="food">Homemade Foods</button>
                     <button
                         class="category-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-purple-50 hover:border-purple-300 transition"
                         data-category="art">Art & Decor</button>
                     <button
                         class="category-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-red-50 hover:border-red-300 transition"
                         data-category="clothing">Clothing</button>
                     <button
                         class="category-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-indigo-50 hover:border-indigo-300 transition"
                         data-category="jewelry">Jewelry</button>
                 </div>

                 <!-- Search Bar -->
                 <div class="max-w-xl mx-auto mb-12">
                     <div class="relative">
                         <input type="text" id="search-input" placeholder="Search products..."
                             class="w-full px-6 py-3 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                         <button class="absolute right-3 top-3 text-gray-400 hover:text-blue-600">
                             <i class="fas fa-search"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Products Grid -->
         <section class="py-8 px-6 bg-gray-50">
             <div class="container mx-auto">
                 <div id="products-container" class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                     <!-- Products will be loaded here by JavaScript -->
                 </div>

                 <!-- Loading Indicator -->
                 <div id="loading-indicator" class="text-center py-12">
                     <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-500">
                     </div>
                     <p class="mt-4 text-gray-600">Loading products...</p>
                 </div>

                 <!-- No Results Message -->
                 <div id="no-results" class="hidden text-center py-12">
                     <i class="fas fa-search text-4xl text-gray-300 mb-4"></i>
                     <h3 class="text-xl font-bold text-gray-700 mb-2">No products found</h3>
                     <p class="text-gray-600">Try adjusting your search or filter</p>
                 </div>

                 <!-- Load More Button -->
                 <div class="text-center mt-12">
                     <button id="load-more"
                         class="bg-white hover:bg-gray-100 text-blue-600 font-bold px-8 py-3 rounded-full border border-blue-300 transition duration-300">
                         Load More Products
                     </button>
                 </div>
             </div>
         </section>

         <!-- Featured Artisans -->
         <section id="artisans" class="py-16 px-6 bg-white">
             <div class="container mx-auto">
                 <div class="text-center mb-12">
                     <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Meet Our Artisans</h2>
                     <p class="text-gray-600 max-w-2xl mx-auto">The talented individuals behind our products</p>
                 </div>

                 <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                     <div class="bg-gray-50 p-6 rounded-xl shadow-soft text-center hover-lift">
                         <div
                             class="w-24 h-24 rounded-full bg-gradient-to-r from-blue-200 to-purple-200 mx-auto mb-4 flex items-center justify-center">
                             <i class="fas fa-user text-4xl text-blue-500"></i>
                         </div>
                         <h3 class="font-bold text-lg mb-1">Sarah Johnson</h3>
                         <p class="text-blue-600 text-sm mb-3">Handmade Jewelry</p>
                         <p class="text-gray-600 text-sm">Single mother creating beautiful jewelry to support her family</p>
                     </div>

                     <div class="bg-gray-50 p-6 rounded-xl shadow-soft text-center hover-lift">
                         <div
                             class="w-24 h-24 rounded-full bg-gradient-to-r from-green-200 to-teal-200 mx-auto mb-4 flex items-center justify-center">
                             <i class="fas fa-user text-4xl text-green-500"></i>
                         </div>
                         <h3 class="font-bold text-lg mb-1">Miguel Rodriguez</h3>
                         <p class="text-green-600 text-sm mb-3">Woodworking</p>
                         <p class="text-gray-600 text-sm">Retired carpenter creating custom furniture and home decor</p>
                     </div>

                     <div class="bg-gray-50 p-6 rounded-xl shadow-soft text-center hover-lift">
                         <div
                             class="w-24 h-24 rounded-full bg-gradient-to-r from-yellow-200 to-orange-200 mx-auto mb-4 flex items-center justify-center">
                             <i class="fas fa-user text-4xl text-yellow-500"></i>
                         </div>
                         <h3 class="font-bold text-lg mb-1">Grace Williams</h3>
                         <p class="text-yellow-600 text-sm mb-3">Baked Goods</p>
                         <p class="text-gray-600 text-sm">Home baker specializing in gluten-free and diabetic-friendly
                             treats</p>
                     </div>

                     <div class="bg-gray-50 p-6 rounded-xl shadow-soft text-center hover-lift">
                         <div
                             class="w-24 h-24 rounded-full bg-gradient-to-r from-purple-200 to-pink-200 mx-auto mb-4 flex items-center justify-center">
                             <i class="fas fa-user text-4xl text-purple-500"></i>
                         </div>
                         <h3 class="font-bold text-lg mb-1">David Chen</h3>
                         <p class="text-purple-600 text-sm mb-3">Digital Art Prints</p>
                         <p class="text-gray-600 text-sm">College student creating inspirational digital artwork</p>
                     </div>
                 </div>
             </div>
         </section>

         <!-- How It Works -->
         <section id="how-it-works" class="py-16 px-6 bg-gradient-to-r from-blue-50 to-green-50">
             <div class="container mx-auto">
                 <div class="text-center mb-12">
                     <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">How Our Marketplace Works</h2>
                     <p class="text-gray-600 max-w-2xl mx-auto">Supporting our community through ethical commerce</p>
                 </div>

                 <div class="grid md:grid-cols-3 gap-8">
                     <div class="text-center p-6">
                         <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-6">
                             <div
                                 class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-xl">
                                 1</div>
                         </div>
                         <h3 class="text-xl font-bold mb-4">Artisans Create</h3>
                         <p class="text-gray-600">Local community members create handmade products using their skills and
                             talents.</p>
                     </div>

                     <div class="text-center p-6">
                         <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                             <div
                                 class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-bold text-xl">
                                 2</div>
                         </div>
                         <h3 class="text-xl font-bold mb-4">We List & Market</h3>
                         <p class="text-gray-600">Our ministry handles photography, listings, marketing, and customer
                             service.</p>
                     </div>

                     <div class="text-center p-6">
                         <div class="w-20 h-20 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-6">
                             <div
                                 class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold text-xl">
                                 3</div>
                         </div>
                         <h3 class="text-xl font-bold mb-4">You Support Directly</h3>
                         <p class="text-gray-600">100% of profits go to the artisans. We only cover minimal processing
                             fees.</p>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Sell With Us -->
         <section id="sell-with-us" class="py-16 px-6 bg-white">
             <div class="container mx-auto">
                 <div
                     class="max-w-4xl mx-auto bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8 md:p-12 shadow-soft">
                     <div class="flex flex-col md:flex-row items-center">
                         <div class="md:w-1/2 mb-8 md:mb-0">
                             <h2 class="text-3xl font-bold mb-6 text-gray-800">Want to Sell With Us?</h2>
                             <p class="text-gray-600 mb-6">Join our community of artisans and entrepreneurs. We handle the
                                 marketing and sales so you can focus on creating.</p>

                             <div class="space-y-4">
                                 <div class="flex items-start">
                                     <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                     <div>
                                         <h4 class="font-bold">No Listing Fees</h4>
                                         <p class="text-gray-600 text-sm">List your products for free</p>
                                     </div>
                                 </div>

                                 <div class="flex items-start">
                                     <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                     <div>
                                         <h4 class="font-bold">Professional Photography</h4>
                                         <p class="text-gray-600 text-sm">We'll professionally photograph your products</p>
                                     </div>
                                 </div>

                                 <div class="flex items-start">
                                     <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                     <div>
                                         <h4 class="font-bold">Keep Your Profits</h4>
                                         <p class="text-gray-600 text-sm">You receive 100% of your product's price</p>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="md:w-1/2">
                             <div class="bg-white p-8 rounded-xl shadow-md">
                                 <h3 class="text-xl font-bold mb-6 text-center">Apply to Become a Seller</h3>
                                 <form id="seller-form" class="space-y-4">
                                     <div>
                                         <label class="block text-gray-700 mb-2">Full Name</label>
                                         <input type="text"
                                             class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500"
                                             placeholder="Your name" required>
                                     </div>

                                     <div>
                                         <label class="block text-gray-700 mb-2">Email Address</label>
                                         <input type="email"
                                             class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500"
                                             placeholder="you@example.com" required>
                                     </div>

                                     <div>
                                         <label class="block text-gray-700 mb-2">Product Category</label>
                                         <select
                                             class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500">
                                             <option value="">Select a category</option>
                                             <option value="crafts">Handmade Crafts</option>
                                             <option value="food">Homemade Foods</option>
                                             <option value="art">Art & Decor</option>
                                             <option value="clothing">Clothing</option>
                                             <option value="jewelry">Jewelry</option>
                                             <option value="other">Other</option>
                                         </select>
                                     </div>

                                     <div>
                                         <label class="block text-gray-700 mb-2">Tell us about your products</label>
                                         <textarea rows="3"
                                             class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-500"
                                             placeholder="Brief description of what you create..."></textarea>
                                     </div>

                                     <button type="submit"
                                         class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-300">
                                         Apply Now
                                     </button>

                                     <p class="text-center text-sm text-gray-500 mt-4">We'll contact you within 2 business
                                         days</p>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>


         <!-- Cart Notification -->
         <div id="cart-notification"
             class="fixed top-20 right-4 bg-green-500 text-white p-4 rounded-lg shadow-xl z-50 cart-notification hidden">
             <div class="flex items-center">
                 <i class="fas fa-check-circle mr-3 text-xl"></i>
                 <div>
                     <p class="font-bold">Added to cart!</p>
                     <p class="text-sm">Item added to your shopping cart</p>
                 </div>
             </div>
         </div>
     @endsection

     @push('scripts')
    <script>
        // Product Data (In a real app, this would come from a backend)
        const products = [
            {
                id: 1,
                name: "Handwoven Prayer Shawl",
                description: "Beautifully crafted shawl with inspirational embroidery",
                price: 45.99,
                category: "crafts",
                artisan: "Sarah Johnson",
                rating: 4.8,
                image: "fas fa-pray",
                color: "from-blue-100 to-blue-200",
                iconColor: "text-blue-500"
            },
            {
                id: 2,
                name: "Artisan Wooden Cross",
                description: "Hand-carved oak cross with intricate details",
                price: 32.50,
                category: "crafts",
                artisan: "Miguel Rodriguez",
                rating: 5.0,
                image: "fas fa-cross",
                color: "from-amber-100 to-amber-200",
                iconColor: "text-amber-600"
            },
            {
                id: 3,
                name: "Homemade Honey & Jam Set",
                description: "Local honey and seasonal fruit jam gift set",
                price: 24.99,
                category: "food",
                artisan: "Grace Williams",
                rating: 4.7,
                image: "fas fa-jar",
                color: "from-yellow-100 to-yellow-200",
                iconColor: "text-yellow-500"
            },
            {
                id: 4,
                name: "Inspirational Canvas Print",
                description: '"Be Still" print with calming mountain scene',
                price: 28.75,
                category: "art",
                artisan: "David Chen",
                rating: 4.9,
                image: "fas fa-mountain",
                color: "from-purple-100 to-purple-200",
                iconColor: "text-purple-500"
            },
            {
                id: 5,
                name: "Handmade Beaded Necklace",
                description: "Elegant necklace with semi-precious stones",
                price: 38.00,
                category: "jewelry",
                artisan: "Sarah Johnson",
                rating: 4.6,
                image: "fas fa-gem",
                color: "from-pink-100 to-pink-200",
                iconColor: "text-pink-500"
            },
            {
                id: 6,
                name: "Organic Lavender Sachets",
                description: "Calming lavender sachets for drawers and closets",
                price: 12.99,
                category: "crafts",
                artisan: "Grace Williams",
                rating: 4.5,
                image: "fas fa-spa",
                color: "from-lavender-100 to-lavender-200",
                iconColor: "text-purple-400"
            },
            {
                id: 7,
                name: "Custom Bible Cover",
                description: "Hand-stitched leather Bible cover with cross design",
                price: 42.50,
                category: "clothing",
                artisan: "Miguel Rodriguez",
                rating: 4.9,
                image: "fas fa-book",
                color: "from-brown-100 to-brown-200",
                iconColor: "text-brown-600"
            },
            {
                id: 8,
                name: "Hand-painted Coffee Mugs",
                description: "Set of 2 mugs with inspirational messages",
                price: 22.00,
                category: "crafts",
                artisan: "David Chen",
                rating: 4.7,
                image: "fas fa-mug-hot",
                color: "from-red-100 to-red-200",
                iconColor: "text-red-500"
            }
        ];

        // Cart State
        let cart = [];
        let currentFilter = 'all';
        let displayedProducts = 4;

        // DOM Elements
        const productsContainer = document.getElementById('products-container');
        const categoryButtons = document.querySelectorAll('.category-btn');
        const searchInput = document.getElementById('search-input');
        const cartCount = document.getElementById('cart-count');
        const mobileCartCount = document.getElementById('mobile-cart-count');
        const cartSidebar = document.getElementById('cart-sidebar');
        const cartOverlay = document.getElementById('cart-overlay');
        const cartBtn = document.getElementById('cart-btn');
        const mobileCartBtn = document.getElementById('mobile-cart-btn');
        const closeCartBtn = document.getElementById('close-cart');
        const cartItems = document.getElementById('cart-items');
        const emptyCartMessage = document.getElementById('empty-cart-message');
        const cartSubtotal = document.getElementById('cart-subtotal');
        const checkoutBtn = document.getElementById('checkout-btn');
        const loadMoreBtn = document.getElementById('load-more');
        const loadingIndicator = document.getElementById('loading-indicator');
        const noResults = document.getElementById('no-results');
        const cartNotification = document.getElementById('cart-notification');
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            renderProducts();
            updateCartDisplay();
            
            // Simulate loading
            setTimeout(() => {
                loadingIndicator.classList.add('hidden');
            }, 1000);
        });

        // Render Products
        function renderProducts() {
            productsContainer.innerHTML = '';
            
            const filteredProducts = products.filter(product => {
                const matchesCategory = currentFilter === 'all' || product.category === currentFilter;
                const searchTerm = searchInput.value.toLowerCase();
                const matchesSearch = !searchTerm || 
                    product.name.toLowerCase().includes(searchTerm) ||
                    product.description.toLowerCase().includes(searchTerm) ||
                    product.artisan.toLowerCase().includes(searchTerm);
                
                return matchesCategory && matchesSearch;
            });
            
            if (filteredProducts.length === 0) {
                noResults.classList.remove('hidden');
                loadMoreBtn.classList.add('hidden');
                return;
            } else {
                noResults.classList.add('hidden');
            }
            
            const productsToShow = filteredProducts.slice(0, displayedProducts);
            
            productsToShow.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card bg-white rounded-xl shadow-soft overflow-hidden fade-in';
                productCard.innerHTML = `
                    <div class="h-48 ${product.color} flex items-center justify-center">
                        <i class="${product.image} ${product.iconColor} text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg">${product.name}</h3>
                            <span class="bg-blue-100 text-blue-600 text-xs font-bold px-2 py-1 rounded">$${product.price.toFixed(2)}</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">${product.description}</p>
                        
                        <div class="flex justify-between items-center mb-4">
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-user"></i> ${product.artisan}
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400 mr-1"></i>
                                <span class="text-sm">${product.rating}</span>
                            </div>
                        </div>
                        
                        <button class="add-to-cart w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium transition duration-300" data-id="${product.id}">
                            Add to Cart
                        </button>
                    </div>
                `;
                productsContainer.appendChild(productCard);
            });
            
            // Show/hide load more button
            if (displayedProducts >= filteredProducts.length) {
                loadMoreBtn.classList.add('hidden');
            } else {
                loadMoreBtn.classList.remove('hidden');
            }
        }

        // Category Filtering
        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active button
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Apply filter
                currentFilter = button.dataset.category;
                displayedProducts = 4;
                renderProducts();
                
                // Scroll to products
                document.getElementById('categories').scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // Search Functionality
        searchInput.addEventListener('input', () => {
            displayedProducts = 4;
            renderProducts();
        });

        // Load More Products
        loadMoreBtn.addEventListener('click', () => {
            displayedProducts += 4;
            renderProducts();
        });

        // Cart Functions
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            const existingItem = cart.find(item => item.id === productId);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    ...product,
                    quantity: 1
                });
            }
            
            updateCartDisplay();
            showCartNotification();
        }

        function updateCartDisplay() {
            // Update cart counts
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            mobileCartCount.textContent = totalItems;
            
            // Update cart sidebar
            if (cart.length === 0) {
                emptyCartMessage.classList.remove('hidden');
                checkoutBtn.disabled = true;
                cartSubtotal.textContent = '$0.00';
            } else {
                emptyCartMessage.classList.add('hidden');
                checkoutBtn.disabled = false;
                
                // Calculate subtotal
                const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
                cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
                
                // Render cart items
                cartItems.innerHTML = '';
                cart.forEach(item => {
                    const cartItem = document.createElement('div');
                    cartItem.className = 'flex items-center border-b pb-4';
                    cartItem.innerHTML = `
                        <div class="w-16 h-16 ${item.color} rounded-lg flex items-center justify-center mr-4">
                            <i class="${item.image} ${item.iconColor} text-2xl"></i>
                        </div>
                        <div class="flex-grow">
                            <h4 class="font-bold">${item.name}</h4>
                            <p class="text-sm text-gray-600">${item.artisan}</p>
                            <div class="flex justify-between items-center mt-2">
                                <div class="flex items-center">
                                    <button class="quantity-btn decrease w-6 h-6 rounded-full border flex items-center justify-center" data-id="${item.id}">
                                        <i class="fas fa-minus text-xs"></i>
                                    </button>
                                    <span class="mx-2 font-medium">${item.quantity}</span>
                                    <button class="quantity-btn increase w-6 h-6 rounded-full border flex items-center justify-center" data-id="${item.id}">
                                        <i class="fas fa-plus text-xs"></i>
                                    </button>
                                </div>
                                <span class="font-bold">$${(item.price * item.quantity).toFixed(2)}</span>
                            </div>
                        </div>
                        <button class="remove-item ml-4 text-gray-400 hover:text-red-500" data-id="${item.id}">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    cartItems.appendChild(cartItem);
                });
            }
        }

        function showCartNotification() {
            cartNotification.classList.remove('hidden');
            setTimeout(() => {
                cartNotification.classList.add('hidden');
            }, 3000);
        }

        // Event Delegation for Add to Cart buttons
        document.addEventListener('click', (e) => {
            // Add to cart
            if (e.target.classList.contains('add-to-cart') || e.target.closest('.add-to-cart')) {
                const button = e.target.classList.contains('add-to-cart') ? e.target : e.target.closest('.add-to-cart');
                const productId = parseInt(button.dataset.id);
                addToCart(productId);
            }
            
            // Cart item buttons
            if (e.target.classList.contains('quantity-btn') || e.target.closest('.quantity-btn')) {
                const button = e.target.classList.contains('quantity-btn') ? e.target : e.target.closest('.quantity-btn');
                const productId = parseInt(button.dataset.id);
                const isIncrease = button.classList.contains('increase');
                const isDecrease = button.classList.contains('decrease');
                
                const item = cart.find(item => item.id === productId);
                if (item) {
                    if (isIncrease) {
                        item.quantity += 1;
                    } else if (isDecrease && item.quantity > 1) {
                        item.quantity -= 1;
                    }
                    updateCartDisplay();
                }
            }
            
            // Remove item
            if (e.target.classList.contains('remove-item') || e.target.closest('.remove-item')) {
                const button = e.target.classList.contains('remove-item') ? e.target : e.target.closest('.remove-item');
                const productId = parseInt(button.dataset.id);
                cart = cart.filter(item => item.id !== productId);
                updateCartDisplay();
            }
        });

        // Cart Sidebar Toggle
        cartBtn.addEventListener('click', () => {
            cartSidebar.classList.remove('translate-x-full');
            cartOverlay.classList.remove('hidden');
        });

        mobileCartBtn.addEventListener('click', (e) => {
            e.preventDefault();
            cartSidebar.classList.remove('translate-x-full');
            cartOverlay.classList.remove('hidden');
            
            // Close mobile menu
            mobileMenu.classList.add('hidden');
            menuBtn.querySelector('i').classList.remove('fa-times');
            menuBtn.querySelector('i').classList.add('fa-bars');
        });

        closeCartBtn.addEventListener('click', () => {
            cartSidebar.classList.add('translate-x-full');
            cartOverlay.classList.add('hidden');
        });

        cartOverlay.addEventListener('click', () => {
            cartSidebar.classList.add('translate-x-full');
            cartOverlay.classList.add('hidden');
        });

        // Checkout Button
        checkoutBtn.addEventListener('click', () => {
            if (cart.length > 0) {
                alert('In a real implementation, this would redirect to a checkout page. Cart items: ' + cart.length);
                // Here you would typically redirect to a checkout page
            }
        });

        // Seller Form Submission
        document.getElementById('seller-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your application! We will contact you within 2 business days.');
            e.target.reset();
        });

        // Mobile Menu Toggle
        menuBtn.addEventListener('click', () => {
            const icon = menuBtn.querySelector('i');
            
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                mobileMenu.classList.add('hidden');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's a cart link
                if (href === '#cart-sidebar') return;
                
                // Skip if it's an external link
                if (href.startsWith('http') || href === 'index.html') return;
                
                e.preventDefault();
                
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuBtn.querySelector('i').classList.remove('fa-times');
                        menuBtn.querySelector('i').classList.add('fa-bars');
                    }
                }
            });
        });
    </script>
     @endpush