  @extends('layouts.app')


  @section('content')
   <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 md:pt-32 md:pb-24 px-6 gradient-bg text-white">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Faith. Healing. Empowerment.</h1>
                    <p class="text-xl mb-8 text-blue-100">A holistic ministry dedicated to spiritual growth, mental wellness, and economic empowerment through God's word and community support.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#services" class="bg-white text-blue-700 hover:bg-gray-100 px-8 py-3 rounded-full font-bold text-center transition duration-300">Our Services</a>
                        <a href="#marketplace" class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-8 py-3 rounded-full font-bold text-center transition duration-300">Visit Marketplace</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center">
                            <i class="fas fa-hands-praying text-6xl md:text-8xl text-white/70"></i>
                        </div>
                        <div class="absolute -top-4 -right-4 w-32 h-32 rounded-full bg-yellow-400/20 backdrop-blur-sm flex items-center justify-center">
                            <i class="fas fa-heart text-4xl text-yellow-300"></i>
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-40 h-40 rounded-full bg-green-400/20 backdrop-blur-sm flex items-center justify-center">
                            <i class="fas fa-store text-5xl text-green-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section id="mission" class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Our Threefold Mission</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Inspired by Isaiah 61:1-3, we are called to bring good news, bind up the brokenhearted, and proclaim liberty to the captives.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-8 rounded-2xl shadow-soft hover-lift">
                    <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mb-6">
                        <i class="fas fa-bible text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Spiritual Enlightenment</h3>
                    <p class="text-gray-600">Teaching God's word to transform lives, build faith, and guide individuals in their spiritual journey through Bible studies, worship, and discipleship.</p>
                </div>
                
                <div class="bg-green-50 p-8 rounded-2xl shadow-soft hover-lift">
                    <div class="w-16 h-16 rounded-full bg-green-500 flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Mental Health & Education</h3>
                    <p class="text-gray-600">Providing resources, support groups, and education to destigmatize mental health challenges and promote holistic wellness within a faith context.</p>
                </div>
                
                <div class="bg-purple-50 p-8 rounded-2xl shadow-soft hover-lift">
                    <div class="w-16 h-16 rounded-full bg-purple-500 flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Economic Empowerment</h3>
                    <p class="text-gray-600">Equipping individuals with business skills and providing a marketplace platform to support local entrepreneurs and sustain livelihoods.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Our Services & Programs</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive support for spiritual, mental, and practical needs</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-soft">
                    <div class="text-blue-500 mb-4">
                        <i class="fas fa-church text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Worship Services</h3>
                    <p class="text-gray-600 text-sm">Weekly gatherings for prayer, worship, and biblical teaching.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-soft">
                    <div class="text-green-500 mb-4">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Support Groups</h3>
                    <p class="text-gray-600 text-sm">Safe spaces for mental health support and recovery journeys.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-soft">
                    <div class="text-purple-500 mb-4">
                        <i class="fas fa-graduation-cap text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Business Workshops</h3>
                    <p class="text-gray-600 text-sm">Training on entrepreneurship, finance, and marketing.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-soft">
                    <div class="text-red-500 mb-4">
                        <i class="fas fa-hands-helping text-3xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Community Outreach</h3>
                    <p class="text-gray-600 text-sm">Food drives, counseling, and practical assistance programs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketplace Section -->
    <section id="marketplace" class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center mb-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Community Marketplace</h2>
                    <p class="text-gray-600 mb-6">Support local businesses and artisans from our community. Every purchase helps sustain livelihoods and empowers entrepreneurs.</p>
                    <a href="#" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-800">
                        Visit Our Online Store
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-64 h-64 bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-shopping-bag text-6xl text-blue-500"></i>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-40 h-40 bg-gradient-to-tr from-green-100 to-yellow-100 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-store-alt text-5xl text-green-500"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-soft hover-lift">
                    <div class="h-48 bg-gradient-to-r from-blue-50 to-cyan-50 flex items-center justify-center">
                        <i class="fas fa-tshirt text-6xl text-blue-400"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">Handmade Crafts</h3>
                        <p class="text-gray-600 text-sm mb-4">Beautiful handcrafted items made by local artisans.</p>
                        <span class="text-sm font-medium text-blue-600">From $15</span>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-soft hover-lift">
                    <div class="h-48 bg-gradient-to-r from-green-50 to-emerald-50 flex items-center justify-center">
                        <i class="fas fa-bread-slice text-6xl text-green-400"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">Homemade Foods</h3>
                        <p class="text-gray-600 text-sm mb-4">Delicious baked goods, preserves, and specialty foods.</p>
                        <span class="text-sm font-medium text-green-600">From $8</span>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-soft hover-lift">
                    <div class="h-48 bg-gradient-to-r from-purple-50 to-pink-50 flex items-center justify-center">
                        <i class="fas fa-paint-brush text-6xl text-purple-400"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">Art & Decor</h3>
                        <p class="text-gray-600 text-sm mb-4">Original artwork and home decor created by community members.</p>
                        <span class="text-sm font-medium text-purple-600">From $25</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mental Health Section -->
    <section id="mental-health" class="py-16 px-6 bg-gradient-to-r from-blue-50 to-green-50">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Mental Health Support</h2>
                    <p class="text-gray-600 mb-6">We believe that mental wellness is integral to spiritual health. Our ministry provides faith-informed resources, support groups, and education to help individuals and families navigate mental health challenges.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold">Faith-Based Counseling</h4>
                                <p class="text-gray-600 text-sm">Professional counseling that integrates psychological principles with spiritual wisdom.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold">Support Groups</h4>
                                <p class="text-gray-600 text-sm">Weekly meetings for anxiety, depression, grief, and addiction recovery.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold">Educational Workshops</h4>
                                <p class="text-gray-600 text-sm">Learn about mental health, coping strategies, and how to support loved ones.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 flex justify-center">
                    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md">
                        <h3 class="text-xl font-bold mb-6 text-center">Upcoming Mental Health Events</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-center border-l-4 border-blue-500 pl-4 py-2">
                                <div class="text-center mr-4">
                                    <div class="text-blue-600 font-bold">JUN</div>
                                    <div class="text-2xl font-bold text-gray-800">15</div>
                                </div>
                                <div>
                                    <h4 class="font-bold">Anxiety & Faith Workshop</h4>
                                    <p class="text-gray-600 text-sm">7:00 PM | Community Center</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center border-l-4 border-green-500 pl-4 py-2">
                                <div class="text-center mr-4">
                                    <div class="text-green-600 font-bold">JUN</div>
                                    <div class="text-2xl font-bold text-gray-800">22</div>
                                </div>
                                <div>
                                    <h4 class="font-bold">Grief Support Group</h4>
                                    <p class="text-gray-600 text-sm">6:30 PM | Chapel Room</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center border-l-4 border-purple-500 pl-4 py-2">
                                <div class="text-center mr-4">
                                    <div class="text-purple-600 font-bold">JUN</div>
                                    <div class="text-2xl font-bold text-gray-800">29</div>
                                </div>
                                <div>
                                    <h4 class="font-bold">Mental Health First Aid Training</h4>
                                    <p class="text-gray-600 text-sm">9:00 AM | Fellowship Hall</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#contact" class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-3 rounded-lg font-medium mt-6 transition duration-300">
                            Register for Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 px-6 bg-gray-800 text-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Get Involved</h2>
                <p class="text-gray-300 max-w-2xl mx-auto">Join us in our mission to bring hope, healing, and empowerment to our community.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full bg-blue-500/20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-pray text-2xl text-blue-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Join Our Services</h3>
                    <p class="text-gray-300 mb-4">Sunday Worship: 10:00 AM</p>
                    <p class="text-gray-300">Wednesday Bible Study: 7:00 PM</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-plus text-2xl text-green-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Volunteer</h3>
                    <p class="text-gray-300 mb-4">Help with marketplace, events, or outreach programs.</p>
                    <a href="mailto:volunteer@gracepointministry.org" class="text-green-300 hover:text-green-200 font-medium">volunteer@gracepointministry.org</a>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full bg-purple-500/20 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-store text-2xl text-purple-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Sell in Marketplace</h3>
                    <p class="text-gray-300 mb-4">Apply to feature your products in our community marketplace.</p>
                    <a href="mailto:marketplace@gracepointministry.org" class="text-purple-300 hover:text-purple-200 font-medium">marketplace@gracepointministry.org</a>
                </div>
            </div>
            
            <div class="max-w-2xl mx-auto mt-12 bg-gray-900/50 p-8 rounded-2xl">
                <h3 class="text-2xl font-bold mb-6 text-center">Send Us a Message</h3>
                <form id="contact-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-300 mb-2">Your Name</label>
                            <input type="text" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-gray-300 mb-2">Email Address</label>
                            <input type="email" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500" placeholder="john@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-gray-300 mb-2">Interested In</label>
                        <select class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500">
                            <option value="">Select an option</option>
                            <option value="worship">Worship Services</option>
                            <option value="mental-health">Mental Health Support</option>
                            <option value="business">Business Workshops</option>
                            <option value="marketplace">Community Marketplace</option>
                            <option value="volunteer">Volunteering</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-gray-300 mb-2">Message</label>
                        <textarea rows="4" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500" placeholder="Your message..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    @endsection

     @push('scripts')
        <script>
        // Mobile menu toggle
        document.getElementById('menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const icon = this.querySelector('i');
            
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
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuBtn = document.getElementById('menu-btn');
                    const menuIcon = menuBtn.querySelector('i');
                    
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('fa-times');
                        menuIcon.classList.add('fa-bars');
                    }
                }
            });
        });
        
        // Form submission (basic - you'll want to connect to your backend)
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    </script>
     @endpush