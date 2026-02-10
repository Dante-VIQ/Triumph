@extends('layouts.app')



@section('content')
    <!-- Hero Section -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 px-6 triumph-gradient text-white">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Our Ministry Services</h1>
                <p class="text-xl mb-8 text-purple-100">Comprehensive programs designed to transform lives through spiritual
                    growth, mental healing, economic empowerment, and community outreach.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#services"
                        class="bg-white text-purple-600 hover:bg-gray-100 px-8 py-3 rounded-full font-bold transition duration-300">Explore
                        Services</a>
                    <a href="#schedule"
                        class="border-2 border-white text-white hover:bg-white hover:text-purple-600 px-8 py-3 rounded-full font-bold transition duration-300">View
                        Schedule</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    <section id="services" class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Ministry Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Browse our comprehensive services designed to meet spiritual,
                    mental, economic, and community needs.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button class="service-filter-btn all active" data-filter="all">
                    <i class="fas fa-th-large mr-2"></i>All Services
                </button>
                <button class="service-filter-btn spiritual" data-filter="spiritual">
                    <i class="fas fa-bible mr-2"></i>Spiritual
                </button>
                <button class="service-filter-btn mental" data-filter="mental">
                    <i class="fas fa-brain mr-2"></i>Mental Health
                </button>
                <button class="service-filter-btn economic" data-filter="economic">
                    <i class="fas fa-handshake mr-2"></i>Economic
                </button>
                <button class="service-filter-btn outreach" data-filter="outreach">
                    <i class="fas fa-hands-helping mr-2"></i>Outreach
                </button>
            </div>

            <!-- Services Grid -->
            <div id="services-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Spiritual Services -->
                <div class="service-item spiritual-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="spiritual">
                    <div class="service-icon spiritual-gradient">
                        <i class="fas fa-church text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Sunday Worship Services</h3>
                    <p class="text-gray-600 mb-4">Join us for inspirational worship, biblical teaching, and community
                        fellowship every Sunday morning and evening.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i> 10:00 AM & 6:00 PM
                        </div>
                        <a href="#registration"
                            class="text-purple-600 hover:text-purple-800 font-medium text-sm register-btn"
                            data-service="Sunday Worship">
                            Register <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item spiritual-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="spiritual">
                    <div class="service-icon spiritual-gradient">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Small Group Bible Studies</h3>
                    <p class="text-gray-600 mb-4">Deepen your faith in intimate group settings. Over 20 groups meeting
                        weekly in homes throughout the community.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Various Times
                        </div>
                        <a href="#registration"
                            class="text-purple-600 hover:text-purple-800 font-medium text-sm register-btn"
                            data-service="Small Group Bible Study">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item spiritual-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="spiritual">
                    <div class="service-icon spiritual-gradient">
                        <i class="fas fa-hands-praying text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Prayer Ministry</h3>
                    <p class="text-gray-600 mb-4">24/7 prayer chain, weekly prayer meetings, and personal prayer counseling.
                        Submit requests online or in person.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="fas fa-headset mr-1"></i> 24/7 Available
                        </div>
                        <a href="#registration"
                            class="text-purple-600 hover:text-purple-800 font-medium text-sm register-btn"
                            data-service="Prayer Ministry">
                            Request Prayer <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Mental Health Services -->
                <div class="service-item mental-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="mental">
                    <div class="service-icon mental-gradient">
                        <i class="fas fa-user-md text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Christian Counseling</h3>
                    <p class="text-gray-600 mb-4">Licensed Christian counselors providing faith-integrated therapy for
                        individuals, couples, and families.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i> By Appointment
                        </div>
                        <a href="mental-health.html#counseling"
                            class="text-green-600 hover:text-green-800 font-medium text-sm">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item mental-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="mental">
                    <div class="service-icon mental-gradient">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Support Groups</h3>
                    <p class="text-gray-600 mb-4">Weekly support groups for anxiety, depression, grief, addiction recovery,
                        and trauma healing.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Various Days
                        </div>
                        <a href="mental-health.html#support-groups"
                            class="text-green-600 hover:text-green-800 font-medium text-sm">
                            View Groups <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item mental-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="mental">
                    <div class="service-icon mental-gradient">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Mental Health Workshops</h3>
                    <p class="text-gray-600 mb-4">Monthly educational workshops on managing stress, building resilience,
                        and maintaining mental wellness.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> 3rd Saturday
                        </div>
                        <a href="#registration"
                            class="text-green-600 hover:text-green-800 font-medium text-sm register-btn"
                            data-service="Mental Health Workshop">
                            Register <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Economic Services -->
                <div class="service-item economic-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="economic">
                    <div class="service-icon economic-gradient">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Entrepreneurship Academy</h3>
                    <p class="text-gray-600 mb-4">12-week intensive business training program covering planning, marketing,
                        finance, and Christian stewardship.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i> 6-8 PM, Tuesdays
                        </div>
                        <a href="#registration"
                            class="text-amber-600 hover:text-amber-800 font-medium text-sm register-btn"
                            data-service="Entrepreneurship Academy">
                            Apply Now <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item economic-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="economic">
                    <div class="service-icon economic-gradient">
                        <i class="fas fa-store text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Business Mentorship</h3>
                    <p class="text-gray-600 mb-4">One-on-one mentorship with experienced entrepreneurs and business
                        professionals from our community.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i> By Appointment
                        </div>
                        <a href="#registration"
                            class="text-amber-600 hover:text-amber-800 font-medium text-sm register-btn"
                            data-service="Business Mentorship">
                            Request Mentor <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item economic-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="economic">
                    <div class="service-icon economic-gradient">
                        <i class="fas fa-file-invoice-dollar text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Financial Stewardship Class</h3>
                    <p class="text-gray-600 mb-4">Biblical principles of money management, budgeting, debt reduction, and
                        generous giving.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> 4-week Course
                        </div>
                        <a href="#registration"
                            class="text-amber-600 hover:text-amber-800 font-medium text-sm register-btn"
                            data-service="Financial Stewardship Class">
                            Enroll <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Outreach Services -->
                <div class="service-item outreach-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="outreach">
                    <div class="service-icon outreach-gradient">
                        <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Community Meals</h3>
                    <p class="text-gray-600 mb-4">Free nutritious meals served every Saturday evening. All are welcome
                        regardless of circumstances.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i> Saturdays, 5 PM
                        </div>
                        <a href="#registration" class="text-red-600 hover:text-red-800 font-medium text-sm register-btn"
                            data-service="Community Meals">
                            Volunteer <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item outreach-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="outreach">
                    <div class="service-icon outreach-gradient">
                        <i class="fas fa-tshirt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Clothing & Essentials Pantry</h3>
                    <p class="text-gray-600 mb-4">Free clothing, hygiene products, and household essentials for families in
                        need. Open every Wednesday.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i> Wednesdays, 10 AM-2 PM
                        </div>
                        <a href="#registration" class="text-red-600 hover:text-red-800 font-medium text-sm register-btn"
                            data-service="Clothing Pantry">
                            Donate Items <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="service-item outreach-card service-card bg-white p-6 rounded-xl shadow-soft hover-lift"
                    data-category="outreach">
                    <div class="service-icon outreach-gradient">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Senior Care Ministry</h3>
                    <p class="text-gray-600 mb-4">Weekly visits, transportation assistance, and practical help for elderly
                        members of our community.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Flexible Schedule
                        </div>
                        <a href="#registration" class="text-red-600 hover:text-red-800 font-medium text-sm register-btn"
                            data-service="Senior Care Ministry">
                            Volunteer <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- No Results Message -->
            <div id="no-services-message" class="hidden text-center py-12">
                <i class="fas fa-search text-4xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-bold text-gray-700 mb-2">No services match your filter</h3>
                <p class="text-gray-600">Try selecting a different category</p>
            </div>
        </div>
    </section>

    <!-- Weekly Schedule -->
    <section id="schedule" class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Weekly Schedule</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Plan your week with our comprehensive ministry schedule. All
                    times are in Eastern Time.</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <!-- Calendar Navigation -->
                <div class="bg-white rounded-xl shadow-soft p-6 mb-8">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">July 2024 Schedule</h3>
                        <div class="flex space-x-4">
                            <button id="prev-week" class="p-2 rounded-full border hover:bg-gray-50">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button id="current-week" class="px-4 py-2 rounded-full border hover:bg-gray-50">
                                This Week
                            </button>
                            <button id="next-week" class="p-2 rounded-full border hover:bg-gray-50">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Calendar Days -->
                    <div class="grid grid-cols-7 gap-2 mb-6">
                        <div class="text-center font-bold text-gray-500 py-2">Sun</div>
                        <div class="text-center font-bold text-gray-500 py-2">Mon</div>
                        <div class="text-center font-bold text-gray-500 py-2">Tue</div>
                        <div class="text-center font-bold text-gray-500 py-2">Wed</div>
                        <div class="text-center font-bold text-gray-500 py-2">Thu</div>
                        <div class="text-center font-bold text-gray-500 py-2">Fri</div>
                        <div class="text-center font-bold text-gray-500 py-2">Sat</div>

                        <!-- Days will be populated by JavaScript -->
                        <div id="calendar-days" class="col-span-7 grid grid-cols-7 gap-2"></div>
                    </div>

                    <!-- Legend -->
                    <div class="flex flex-wrap gap-4 justify-center">
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-purple-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Spiritual</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Mental Health</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-amber-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Economic</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Outreach</span>
                        </div>
                    </div>
                </div>

                <!-- Daily Schedule -->
                <div class="bg-white rounded-xl shadow-soft p-6">
                    <h3 id="selected-date" class="text-2xl font-bold mb-6 text-gray-800">Today's Events</h3>

                    <div id="daily-events" class="space-y-4">
                        <!-- Events will be populated by JavaScript -->
                        <div class="text-center py-8 text-gray-500">
                            <i class="fas fa-calendar-day text-3xl mb-4"></i>
                            <p>Select a date to view events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Statistics -->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-purple-600 mb-2">52</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Weekly Services</h3>
                        <p class="text-gray-600 text-sm">Regularly scheduled programs and meetings</p>
                    </div>

                    <div class="text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">200+</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Volunteers</h3>
                        <p class="text-gray-600 text-sm">Dedicated individuals serving our community</p>
                    </div>

                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-600 mb-2">15</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Ministry Teams</h3>
                        <p class="text-gray-600 text-sm">Specialized groups serving different needs</p>
                    </div>

                    <div class="text-center">
                        <div class="text-4xl font-bold text-red-600 mb-2">100%</div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Free Services</h3>
                        <p class="text-gray-600 text-sm">All our programs are offered at no cost</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section id="registration" class="py-16 px-6 bg-gradient-to-r from-purple-50 to-indigo-50">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2 p-8">
                            <h2 class="text-3xl font-bold mb-6 text-gray-800">Register for Services</h2>
                            <p class="text-gray-600 mb-6">Fill out this form to register for any of our ministry services.
                                We'll contact you with confirmation details.</p>

                            <div class="space-y-6">
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">What happens after registration?</h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                            <span>Confirmation email within 24 hours</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                            <span>Service-specific details and instructions</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                            <span>Follow-up call from our ministry team</span>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2">Need Immediate Help?</h4>
                                    <div class="bg-purple-50 p-4 rounded-lg">
                                        <div class="flex items-center">
                                            <i class="fas fa-phone-alt text-purple-600 mr-3"></i>
                                            <div>
                                                <p class="font-medium">Call us directly</p>
                                                <a href="tel:+15559876543"
                                                    class="text-purple-600 hover:text-purple-800">(555) 987-6543</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:w-1/2 p-8 bg-gray-50">
                            <h3 class="text-xl font-bold mb-6 text-gray-800">Registration Form</h3>

                            <form id="service-registration-form" class="registration-form space-y-4">
                                <div>
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="reg-name" required>
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" id="reg-email" required>
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" id="reg-phone">
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Service Interested In *</label>
                                    <select id="reg-service" required>
                                        <option value="">Select a service</option>
                                        <optgroup label="Spiritual Services">
                                            <option value="Sunday Worship">Sunday Worship Services</option>
                                            <option value="Small Group Bible Study">Small Group Bible Study</option>
                                            <option value="Prayer Ministry">Prayer Ministry</option>
                                        </optgroup>
                                        <optgroup label="Mental Health Services">
                                            <option value="Christian Counseling">Christian Counseling</option>
                                            <option value="Support Groups">Support Groups</option>
                                            <option value="Mental Health Workshop">Mental Health Workshop</option>
                                        </optgroup>
                                        <optgroup label="Economic Services">
                                            <option value="Entrepreneurship Academy">Entrepreneurship Academy</option>
                                            <option value="Business Mentorship">Business Mentorship</option>
                                            <option value="Financial Stewardship Class">Financial Stewardship Class
                                            </option>
                                        </optgroup>
                                        <optgroup label="Outreach Services">
                                            <option value="Community Meals">Community Meals</option>
                                            <option value="Clothing Pantry">Clothing Pantry</option>
                                            <option value="Senior Care Ministry">Senior Care Ministry</option>
                                        </optgroup>
                                        <option value="Other">Other / Not Sure</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Preferred Day/Time</label>
                                    <input type="text" id="reg-time"
                                        placeholder="e.g., Monday evenings, Saturday mornings">
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Additional Information</label>
                                    <textarea id="reg-message" rows="3" placeholder="Any specific needs or questions..."></textarea>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" id="reg-newsletter" class="mr-3">
                                    <label for="reg-newsletter" class="text-gray-700">Receive ministry updates and event
                                        announcements</label>
                                </div>

                                <button type="submit"
                                    class="w-full triumph-gradient text-white py-3 rounded-lg font-bold transition duration-300 hover:opacity-90">
                                    Submit Registration
                                </button>

                                <p class="text-center text-sm text-gray-500">We'll contact you within 24 hours to confirm
                                    registration.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Frequently Asked Questions</h2>
                    <p class="text-gray-600">Common questions about our ministry services</p>
                </div>

                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-xl p-6">
                        <button class="faq-question w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-bold text-gray-800">Are your services really free?</h3>
                            <i class="fas fa-chevron-down text-purple-600"></i>
                        </button>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Yes! All Triumph Ministry services are completely free of charge. We believe that ministry
                                should be accessible to everyone, regardless of financial circumstances. Our services are
                                supported by generous donors and volunteers who believe in our mission.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-xl p-6">
                        <button class="faq-question w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-bold text-gray-800">Do I need to be a Christian to participate?</h3>
                            <i class="fas fa-chevron-down text-purple-600"></i>
                        </button>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>No, our services are open to everyone regardless of religious background. While our programs
                                are Christ-centered, we welcome people of all faiths or no faith. Our mental health
                                services, economic programs, and outreach services are available to anyone in need.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-xl p-6">
                        <button class="faq-question w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-bold text-gray-800">How do I become a volunteer?</h3>
                            <i class="fas fa-chevron-down text-purple-600"></i>
                        </button>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>We'd love to have you join our volunteer team! Simply register through our website, attend a
                                volunteer orientation (held monthly), and indicate which areas you're interested in serving.
                                We'll match your skills and interests with ministry needs.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-xl p-6">
                        <button class="faq-question w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-bold text-gray-800">Can I attend multiple services?</h3>
                            <i class="fas fa-chevron-down text-purple-600"></i>
                        </button>
                        <div class="faq-answer mt-4 text-gray-600 hidden">
                            <p>Absolutely! Many of our participants engage with multiple services. For example, someone
                                might attend Sunday worship, join a support group, and participate in business training. Our
                                holistic approach encourages engagement across spiritual, mental, and economic areas.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <a href="index.html#contact" class="text-purple-600 hover:text-purple-800 font-medium">
                        Have another question? Contact us directly →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-6 text-center">
            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4 text-gray-800">Registration Successful!</h3>
            <p class="text-gray-600 mb-6" id="success-message">Thank you for registering. We'll contact you within 24
                hours with confirmation details.</p>
            <button id="close-success-modal"
                class="w-full triumph-gradient text-white py-3 rounded-lg font-bold transition duration-300 hover:opacity-90">
                Close
            </button>
        </div>
    </div>



@endsection

@push('scripts')
        <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuBtn.addEventListener('click', function() {
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

        // Service Filtering
        const filterButtons = document.querySelectorAll('.service-filter-btn');
        const serviceItems = document.querySelectorAll('.service-item');
        const noServicesMessage = document.getElementById('no-services-message');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                
                // Update active button
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    // Reset to base styling
                    btn.className = 'service-filter-btn ' + btn.dataset.filter;
                });
                button.classList.add('active');
                
                // Filter services
                let visibleCount = 0;
                serviceItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        item.classList.add('hidden');
                    }
                });
                
                // Show/hide no results message
                if (visibleCount === 0) {
                    noServicesMessage.classList.remove('hidden');
                } else {
                    noServicesMessage.classList.add('hidden');
                }
            });
        });

        // Registration form autofill from service cards
        const registerButtons = document.querySelectorAll('.register-btn');
        const serviceSelect = document.getElementById('reg-service');
        
        registerButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const serviceName = button.dataset.service;
                
                // Scroll to registration form
                document.getElementById('registration').scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Set the service in the dropdown
                serviceSelect.value = serviceName;
            });
        });

        // Calendar functionality
        const calendarDays = document.getElementById('calendar-days');
        const selectedDateEl = document.getElementById('selected-date');
        const dailyEvents = document.getElementById('daily-events');
        const prevWeekBtn = document.getElementById('prev-week');
        const nextWeekBtn = document.getElementById('next-week');
        const currentWeekBtn = document.getElementById('current-week');
        
        // Sample events data (in a real app, this would come from a backend)
        const events = {
            '2024-07-15': [
                { title: 'Sunday Worship Service', time: '10:00 AM', category: 'spiritual', location: 'Main Sanctuary' },
                { title: 'Community Lunch', time: '12:30 PM', category: 'outreach', location: 'Fellowship Hall' },
                { title: 'Evening Worship', time: '6:00 PM', category: 'spiritual', location: 'Main Sanctuary' }
            ],
            '2024-07-16': [
                { title: 'Men\'s Breakfast Bible Study', time: '7:00 AM', category: 'spiritual', location: 'Cafeteria' },
                { title: 'Anxiety Support Group', time: '7:00 PM', category: 'mental', location: 'Room 201' }
            ],
            '2024-07-17': [
                { title: 'Clothing Pantry', time: '10:00 AM - 2:00 PM', category: 'outreach', location: 'Outreach Center' },
                { title: 'Entrepreneurship Academy', time: '6:00 PM', category: 'economic', location: 'Conference Room' }
            ],
            '2024-07-18': [
                { title: 'Grief Support Group', time: '6:00 PM', category: 'mental', location: 'Room 201' },
                { title: 'Small Group: Young Adults', time: '7:30 PM', category: 'spiritual', location: 'Various Homes' }
            ],
            '2024-07-19': [
                { title: 'Business Mentorship Meetings', time: 'By Appointment', category: 'economic', location: 'Office' },
                { title: 'Addiction Recovery Group', time: '7:00 PM', category: 'mental', location: 'Room 202' }
            ],
            '2024-07-20': [
                { title: 'Financial Stewardship Class', time: '9:00 AM', category: 'economic', location: 'Room 101' },
                { title: 'Community Meals', time: '5:00 PM', category: 'outreach', location: 'Fellowship Hall' }
            ],
            '2024-07-22': [
                { title: 'Mental Health Workshop', time: '6:30 PM', category: 'mental', location: 'Conference Room' },
                { title: 'Prayer Meeting', time: '7:00 PM', category: 'spiritual', location: 'Chapel' }
            ]
        };
        
        let currentDate = new Date();
        let currentWeekStart = new Date(currentDate);
        currentWeekStart.setDate(currentDate.getDate() - currentDate.getDay()); // Start of week (Sunday)
        
        function renderCalendar() {
            calendarDays.innerHTML = '';
            
            for (let i = 0; i < 7; i++) {
                const date = new Date(currentWeekStart);
                date.setDate(currentWeekStart.getDate() + i);
                
                const dateString = date.toISOString().split('T')[0];
                const dayNumber = date.getDate();
                const hasEvents = events[dateString];
                const isToday = date.toDateString() === new Date().toDateString();
                const isSelected = date.toDateString() === currentDate.toDateString();
                
                const dayElement = document.createElement('div');
                dayElement.className = `calendar-day text-center py-2 ${hasEvents ? 'has-event' : ''} ${isSelected ? 'active' : ''} ${isToday ? 'font-bold' : ''}`;
                dayElement.textContent = dayNumber;
                dayElement.dataset.date = dateString;
                dayElement.dataset.displayDate = date.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' });
                
                if (isSelected) {
                    dayElement.classList.add('active');
                    updateDailyEvents(dateString, date);
                }
                
                dayElement.addEventListener('click', () => {
                    // Update selected date
                    currentDate = date;
                    
                    // Re-render calendar with new selection
                    renderCalendar();
                });
                
                calendarDays.appendChild(dayElement);
            }
        }
        
        function updateDailyEvents(dateString, date) {
            selectedDateEl.textContent = date.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric', year: 'numeric' });
            
            const dayEvents = events[dateString];
            
            if (dayEvents && dayEvents.length > 0) {
                let eventsHTML = '';
                dayEvents.forEach(event => {
                    const categoryClass = `event-${event.category}`;
                    eventsHTML += `
                        <div class="border border-gray-200 rounded-xl p-4 hover-lift">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-bold text-gray-800">${event.title}</h4>
                                <span class="${categoryClass} event-category">${event.category.charAt(0).toUpperCase() + event.category.slice(1)}</span>
                            </div>
                            <div class="flex items-center text-gray-600 text-sm mb-2">
                                <i class="far fa-clock mr-2"></i>
                                <span>${event.time}</span>
                            </div>
                            <div class="flex items-center text-gray-600 text-sm">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>${event.location}</span>
                            </div>
                            <div class="mt-3">
                                <a href="#registration" class="text-purple-600 hover:text-purple-800 font-medium text-sm register-btn" data-service="${event.title}">
                                    Register <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    `;
                });
                dailyEvents.innerHTML = eventsHTML;
            } else {
                dailyEvents.innerHTML = `
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-calendar-plus text-3xl mb-4"></i>
                        <p>No events scheduled for this day</p>
                        <p class="text-sm mt-2">Check our weekly schedule for other events</p>
                    </div>
                `;
            }
            
            // Re-attach register button listeners
            document.querySelectorAll('.register-btn').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const serviceName = button.dataset.service;
                    serviceSelect.value = serviceName;
                    document.getElementById('registration').scrollIntoView({ behavior: 'smooth' });
                });
            });
        }
        
        // Calendar navigation
        prevWeekBtn.addEventListener('click', () => {
            currentWeekStart.setDate(currentWeekStart.getDate() - 7);
            renderCalendar();
        });
        
        nextWeekBtn.addEventListener('click', () => {
            currentWeekStart.setDate(currentWeekStart.getDate() + 7);
            renderCalendar();
        });
        
        currentWeekBtn.addEventListener('click', () => {
            currentDate = new Date();
            currentWeekStart = new Date(currentDate);
            currentWeekStart.setDate(currentDate.getDate() - currentDate.getDay());
            renderCalendar();
        });
        
        // Initialize calendar
        renderCalendar();

        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('i');
                
                // Toggle current answer
                answer.classList.toggle('hidden');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
                
                // Close other answers
                faqQuestions.forEach(otherQuestion => {
                    if (otherQuestion !== question) {
                        const otherAnswer = otherQuestion.nextElementSibling;
                        const otherIcon = otherQuestion.querySelector('i');
                        otherAnswer.classList.add('hidden');
                        otherIcon.classList.remove('fa-chevron-up');
                        otherIcon.classList.add('fa-chevron-down');
                    }
                });
            });
        });

        // Registration Form Submission
        const registrationForm = document.getElementById('service-registration-form');
        const successModal = document.getElementById('success-modal');
        const successMessage = document.getElementById('success-message');
        const closeSuccessModal = document.getElementById('close-success-modal');
        
        registrationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const name = document.getElementById('reg-name').value;
            const service = document.getElementById('reg-service').value;
            
            // Show success modal with personalized message
            successMessage.textContent = `Thank you ${name} for registering for ${service}. We'll contact you within 24 hours with confirmation details.`;
            successModal.classList.remove('hidden');
            
            // Reset form
            registrationForm.reset();
        });
        
        closeSuccessModal.addEventListener('click', () => {
            successModal.classList.add('hidden');
        });
        
        successModal.addEventListener('click', (e) => {
            if (e.target === successModal) {
                successModal.classList.add('hidden');
            }
        });

        // Fade-in animation on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        fadeElements.forEach(el => observer.observe(el));

        // Add fade-in class to service cards
        document.addEventListener('DOMContentLoaded', () => {
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.classList.add('fade-in');
            });
        });

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                if (href === '#') return;
                if (href.startsWith('http') || href.includes('.html')) return;
                
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