    <nav class="fixed w-full bg-white shadow-md z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="index.html" class="flex items-center space-x-2">
                    <div class="w-10 h-10 rounded-full triumph-gradient flex items-center justify-center">
                        <i class="fas fa-crown text-white"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-800">Triumph Ministry</span>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-purple-600 font-medium">Home</a>
                    <a href="/about" class="text-gray-700 hover:text-purple-600 font-medium">Mission</a>
                    <a href="/services" class="text-gray-700 hover:text-purple-600 font-medium">Services</a>
                    <a href="/rent" class="text-gray-700 hover:text-purple-600 font-medium">Marketplace</a>
                    <a href="/health" class="text-gray-700 hover:text-purple-600 font-medium">Mental Health</a>
                    <a href="/contact" class="text-gray-700 hover:text-purple-600 font-medium">Contact</a>
                </div>
                
                <div class="hidden md:block">
                    <a href="#emergency" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full font-medium transition duration-300">
                        <i class="fas fa-phone-alt mr-2"></i>Emergency
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="text-gray-700 hover:text-purple-600 font-medium">Home</a>
                    <a href="/about" class="text-gray-700 hover:text-purple-600 font-medium">Mission</a>
                    <a href="/services" class="text-gray-700 hover:text-purple-600 font-medium">Services</a>
                    <a href="/rent" class="text-gray-700 hover:text-purple-600 font-medium">Marketplace</a>
                    <a href="/health" class="text-gray-700 hover:text-purple-600 font-medium">Mental Health</a>
                    <a href="/contact" class="text-purple-600 font-medium">Contact</a>
                    <a href="#emergency" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-full font-medium text-center transition duration-300">
                        <i class="fas fa-phone-alt mr-2"></i>Emergency Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

       <!-- Cart Sidebar -->
    <div id="cart-sidebar" class="fixed inset-y-0 right-0 w-full md:w-96 bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Your Cart</h2>
                <button id="close-cart" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <div id="cart-items" class="space-y-4 mb-6">
                <!-- Cart items will be inserted here by JavaScript -->
                <div id="empty-cart-message" class="text-center py-12">
                    <i class="fas fa-shopping-cart text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">Your cart is empty</p>
                </div>
            </div>
            
            <div class="border-t pt-4">
                <div class="flex justify-between mb-2">
                    <span class="font-medium">Subtotal</span>
                    <span id="cart-subtotal" class="font-bold">$0.00</span>
                </div>
                <div class="flex justify-between mb-4 text-sm text-gray-600">
                    <span>Shipping</span>
                    <span>Calculated at checkout</span>
                </div>
                <button id="checkout-btn" class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-bold mb-4 transition duration-300 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    Proceed to Checkout
                </button>
                <p class="text-center text-sm text-gray-500 mb-6">Every purchase supports our community artisans</p>
                
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-hands-helping text-blue-500 mr-3"></i>
                        <div>
                            <p class="text-sm font-medium">Community Impact</p>
                            <p class="text-xs text-gray-600">100% of profits go directly to the artisans</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cart-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>
