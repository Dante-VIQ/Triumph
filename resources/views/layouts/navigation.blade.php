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


