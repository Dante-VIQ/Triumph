@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="contact" class="pt-24 pb-16 md:pt-32 md:pb-24 px-6 triumph-gradient text-white">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Get In Touch</h1>
                <p class="text-xl mb-8 text-purple-100">We're here to help, support, and connect with you. Reach out to us
                    for spiritual guidance, service information, or community support.</p>
                <div class="inline-flex flex-wrap justify-center gap-4">
                    <a href="tel:+15559876543"
                        class="bg-white text-purple-600 hover:bg-gray-100 px-6 py-3 rounded-full font-bold transition duration-300">
                        <i class="fas fa-phone-alt mr-2"></i>Call Us
                    </a>
                    <a href="mailto:info@triumphministry.org"
                        class="border-2 border-white text-white hover:bg-white hover:text-purple-600 px-6 py-3 rounded-full font-bold transition duration-300">
                        <i class="fas fa-envelope mr-2"></i>Email Us
                    </a>
                    <a href="#visit"
                        class="border-2 border-white text-white hover:bg-white hover:text-purple-600 px-6 py-3 rounded-full font-bold transition duration-300">
                        <i class="fas fa-map-marker-alt mr-2"></i>Visit Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Banner -->
    <div id="emergency" class="px-6 -mt-8 mb-12">
        <div class="container mx-auto">
            <div class="emergency-banner bg-gradient-to-r from-red-500 to-red-600 text-white p-6 rounded-xl shadow-lg">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-exclamation-triangle text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold">Emergency Contact Information</h3>
                        </div>
                        <p class="text-red-100">If you or someone you know is in immediate danger or crisis</p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="tel:911"
                            class="bg-white text-red-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-bold text-center transition duration-300">
                            <i class="fas fa-ambulance mr-2"></i>Call 911
                        </a>
                        <a href="tel:988"
                            class="bg-red-700 hover:bg-red-800 text-white px-6 py-3 rounded-lg font-bold text-center transition duration-300">
                            <i class="fas fa-life-ring mr-2"></i>988 Crisis Lifeline
                        </a>
                        <a href="tel:+15551234567"
                            class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-6 py-3 rounded-lg font-bold text-center transition duration-300">
                            <i class="fas fa-phone-alt mr-2"></i>Ministry Crisis Line
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Options -->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Multiple Ways to Connect</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose the contact method that works best for you. We're here to
                    help.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Phone Card -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-soft border-t-blue-500 hover-lift">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-phone-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Phone Support</h3>
                    <p class="text-gray-600 text-center mb-6">Speak directly with our ministry team during office hours.</p>
                    <div class="text-center">
                        <a href="tel:+15559876543" class="text-blue-600 hover:text-blue-800 font-bold text-lg">(555)
                            987-6543</a>
                        <p class="text-gray-500 text-sm mt-2">Mon-Fri, 9am-5pm EST</p>
                    </div>
                    <div class="mt-6">
                        <a href="tel:+15559876543"
                            class="block w-full bg-blue-500 hover:bg-blue-600 text-white text-center py-2 rounded-lg font-medium transition duration-300">
                            Call Now
                        </a>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-soft border-t-green-500 hover-lift">
                    <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Email Us</h3>
                    <p class="text-gray-600 text-center mb-6">Send us a message and we'll respond within 24 hours.</p>
                    <div class="text-center">
                        <a href="mailto:info@triumphministry.org"
                            class="text-green-600 hover:text-green-800 font-bold text-lg">info@triumphministry.org</a>
                        <p class="text-gray-500 text-sm mt-2">General Inquiries</p>
                    </div>
                    <div class="mt-6">
                        <a href="mailto:info@triumphministry.org"
                            class="block w-full bg-green-500 hover:bg-green-600 text-white text-center py-2 rounded-lg font-medium transition duration-300">
                            Send Email
                        </a>
                    </div>
                </div>

                <!-- Visit Card -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-soft border-t-purple-500 hover-lift">
                    <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Visit Our Campus</h3>
                    <p class="text-gray-600 text-center mb-6">Join us for services or stop by during office hours.</p>
                    <div class="text-center">
                        <p class="text-gray-700 font-medium">456 Victory Lane</p>
                        <p class="text-gray-500">Hope City, HC 12345</p>
                    </div>
                    <div class="mt-6">
                        <a href="#visit"
                            class="block w-full bg-purple-500 hover:bg-purple-600 text-white text-center py-2 rounded-lg font-medium transition duration-300">
                            Get Directions
                        </a>
                    </div>
                </div>

                <!-- Social Card -->
                <div class="contact-card bg-white p-8 rounded-2xl shadow-soft border-t-pink-500 hover-lift">
                    <div class="w-16 h-16 rounded-full bg-pink-100 flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-share-alt text-pink-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center text-gray-800">Social Media</h3>
                    <p class="text-gray-600 text-center mb-6">Connect with us online for updates and community.</p>
                    <div class="flex justify-center space-x-4 mb-6">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white hover:bg-blue-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white hover:bg-purple-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-white hover:bg-red-600 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="#"
                            class="block w-full bg-pink-500 hover:bg-pink-600 text-white text-center py-2 rounded-lg font-medium transition duration-300">
                            Follow Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Department Contacts -->
            <div class="max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold mb-6 text-center text-gray-800">Department Contacts</h3>
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-brain text-blue-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-1">Mental Health</h4>
                            <a href="mailto:mentalhealth@triumphministry.org"
                                class="text-blue-600 hover:text-blue-800 text-sm">mentalhealth@triumphministry.org</a>
                            <p class="text-gray-500 text-xs mt-1">(555) 987-6544</p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-handshake text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-1">Marketplace</h4>
                            <a href="mailto:marketplace@triumphministry.org"
                                class="text-green-600 hover:text-green-800 text-sm">marketplace@triumphministry.org</a>
                            <p class="text-gray-500 text-xs mt-1">(555) 987-6545</p>
                        </div>

                        <div class="text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-hands-helping text-purple-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-1">Volunteer</h4>
                            <a href="mailto:volunteer@triumphministry.org"
                                class="text-purple-600 hover:text-purple-800 text-sm">volunteer@triumphministry.org</a>
                            <p class="text-gray-500 text-xs mt-1">(555) 987-6546</p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-donate text-amber-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-1">Donations</h4>
                            <a href="mailto:give@triumphministry.org"
                                class="text-amber-600 hover:text-amber-800 text-sm">give@triumphministry.org</a>
                            <p class="text-gray-500 text-xs mt-1">(555) 987-6547</p>
                        </div>

                        <div class="text-center">
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-utensils text-red-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-1">Outreach</h4>
                            <a href="mailto:outreach@triumphministry.org"
                                class="text-red-600 hover:text-red-800 text-sm">outreach@triumphministry.org</a>
                            <p class="text-gray-500 text-xs mt-1">(555) 987-6548</p>
                        </div>

                        <div class="text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-pray text-indigo-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-1">Prayer Requests</h4>
                            <a href="mailto:prayer@triumphministry.org"
                                class="text-indigo-600 hover:text-indigo-800 text-sm">prayer@triumphministry.org</a>
                            <p class="text-gray-500 text-xs mt-1">(555) 987-6549</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Send Us a Message</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Fill out the form below and we'll get back to you as soon as
                        possible.</p>
                </div>

                <!-- Form Tabs -->
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button class="contact-tab active" data-tab="general-tab">
                        <i class="fas fa-envelope mr-2"></i>General Inquiry
                    </button>
                    <button class="contact-tab" data-tab="prayer-tab">
                        <i class="fas fa-pray mr-2"></i>Prayer Request
                    </button>
                    <button class="contact-tab" data-tab="counseling-tab">
                        <i class="fas fa-user-md mr-2"></i>Counseling Request
                    </button>
                    <button class="contact-tab" data-tab="volunteer-tab">
                        <i class="fas fa-hands-helping mr-2"></i>Volunteer
                    </button>
                    <button class="contact-tab" data-tab="marketplace-tab">
                        <i class="fas fa-store mr-2"></i>Marketplace
                    </button>
                </div>

                <!-- Tab Contents -->
                <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                    <!-- General Inquiry Form -->
                    <div id="general-tab" class="tab-content active p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">General Inquiry</h3>
                        <form class="contact-form space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="general-name" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" id="general-email" required>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="general-phone">
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Subject *</label>
                                <select id="general-subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="service-info">Service Information</option>
                                    <option value="event-info">Event Information</option>
                                    <option value="partnership">Partnership Inquiry</option>
                                    <option value="media">Media Inquiry</option>
                                    <option value="facility">Facility Rental</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Message *</label>
                                <textarea id="general-message" rows="5" required></textarea>
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" id="general-newsletter" class="mr-3">
                                <label for="general-newsletter" class="text-gray-700">Subscribe to ministry
                                    updates</label>
                            </div>

                            <button type="submit"
                                class="w-full triumph-gradient text-white py-3 rounded-lg font-bold transition duration-300 hover:opacity-90">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Prayer Request Form -->
                    <div id="prayer-tab" class="tab-content p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Prayer Request</h3>
                        <p class="text-gray-600 mb-6">Our prayer team is ready to lift up your needs. All requests are
                            confidential.</p>

                        <form class="contact-form space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Your Name (Optional)</label>
                                    <input type="text" id="prayer-name">
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2">Email (Optional)</label>
                                    <input type="email" id="prayer-email">
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Prayer Category</label>
                                <select id="prayer-category">
                                    <option value="">Select a category</option>
                                    <option value="health">Health & Healing</option>
                                    <option value="family">Family & Relationships</option>
                                    <option value="financial">Financial Needs</option>
                                    <option value="guidance">Guidance & Direction</option>
                                    <option value="salvation">Salvation</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Prayer Request *</label>
                                <textarea id="prayer-request" rows="5" placeholder="Please share your prayer need..." required></textarea>
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" id="prayer-anonymous" class="mr-3">
                                <label for="prayer-anonymous" class="text-gray-700">Submit anonymously</label>
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" id="prayer-call" class="mr-3">
                                <label for="prayer-call" class="text-gray-700">I would like a prayer partner to call
                                    me</label>
                            </div>

                            <button type="submit"
                                class="w-full bg-purple-500 hover:bg-purple-600 text-white py-3 rounded-lg font-bold transition duration-300">
                                Submit Prayer Request
                            </button>
                        </form>
                    </div>

                    <!-- Counseling Request Form -->
                    <div id="counseling-tab" class="tab-content p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Counseling Request</h3>
                        <p class="text-gray-600 mb-6">Take the first step toward healing. Our counseling team will contact
                            you within 24 hours.</p>

                        <form class="contact-form space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="counseling-name" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" id="counseling-email" required>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="counseling-phone" required>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Type of Support Needed *</label>
                                <select id="counseling-type" required>
                                    <option value="">Select an option</option>
                                    <option value="individual">Individual Therapy</option>
                                    <option value="couples">Couples Counseling</option>
                                    <option value="family">Family Therapy</option>
                                    <option value="group">Support Group</option>
                                    <option value="crisis">Crisis Support</option>
                                    <option value="unsure">Not Sure</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Preferred Days/Times</label>
                                <input type="text" id="counseling-time"
                                    placeholder="e.g., Monday evenings, Saturday mornings">
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Brief Description (Optional)</label>
                                <textarea id="counseling-description" rows="3" placeholder="Briefly describe what you'd like to address..."></textarea>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-info-circle text-blue-500 mr-3"></i>
                                    <div>
                                        <p class="font-medium text-blue-800">Sliding Scale Fees Available</p>
                                        <p class="text-blue-700 text-sm">We believe everyone deserves access to care</p>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-lg font-bold transition duration-300">
                                Request Counseling Appointment
                            </button>
                        </form>
                    </div>

                    <!-- Volunteer Form -->
                    <div id="volunteer-tab" class="tab-content p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Volunteer Application</h3>
                        <p class="text-gray-600 mb-6">Join our team of dedicated volunteers making a difference in our
                            community.</p>

                        <form class="contact-form space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="volunteer-name" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" id="volunteer-email" required>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="volunteer-phone" required>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Areas of Interest *</label>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="volunteer-outreach" class="mr-3">
                                        <label for="volunteer-outreach" class="text-gray-700">Community Outreach</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="volunteer-marketplace" class="mr-3">
                                        <label for="volunteer-marketplace" class="text-gray-700">Marketplace
                                            Support</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="volunteer-worship" class="mr-3">
                                        <label for="volunteer-worship" class="text-gray-700">Worship Ministry</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="volunteer-youth" class="mr-3">
                                        <label for="volunteer-youth" class="text-gray-700">Youth Ministry</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="volunteer-admin" class="mr-3">
                                        <label for="volunteer-admin" class="text-gray-700">Administrative Support</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="volunteer-other" class="mr-3">
                                        <label for="volunteer-other" class="text-gray-700">Other</label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Availability *</label>
                                <select id="volunteer-availability" required>
                                    <option value="">Select availability</option>
                                    <option value="weekdays">Weekdays</option>
                                    <option value="weekends">Weekends</option>
                                    <option value="evenings">Evenings</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Skills/Experience (Optional)</label>
                                <textarea id="volunteer-skills" rows="3"
                                    placeholder="Tell us about your skills, experience, or why you want to volunteer..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-bold transition duration-300">
                                Submit Volunteer Application
                            </button>
                        </form>
                    </div>

                    <!-- Marketplace Form -->
                    <div id="marketplace-tab" class="tab-content p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Marketplace Inquiry</h3>
                        <p class="text-gray-600 mb-6">Interested in selling your products or learning about our business
                            training programs?</p>

                        <form class="contact-form space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="marketplace-name" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2">Business Name</label>
                                    <input type="text" id="marketplace-business">
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="marketplace-email" required>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Inquiry Type *</label>
                                <select id="marketplace-type" required>
                                    <option value="">Select an option</option>
                                    <option value="seller">Become a Seller</option>
                                    <option value="training">Business Training</option>
                                    <option value="mentorship">Business Mentorship</option>
                                    <option value="purchasing">Purchasing Questions</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Product/Service Description</label>
                                <textarea id="marketplace-description" rows="3" placeholder="Briefly describe your products or services..."></textarea>
                            </div>

                            <div class="bg-amber-50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-amber-500 mr-3"></i>
                                    <div>
                                        <p class="font-medium text-amber-800">Seller Benefits</p>
                                        <p class="text-amber-700 text-sm">No listing fees · Professional photography · Keep
                                            100% of your profits</p>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-amber-500 hover:bg-amber-600 text-white py-3 rounded-lg font-bold transition duration-300">
                                Submit Marketplace Inquiry
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Hours -->
    <section id="visit" class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Visit Our Campus</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">We'd love to welcome you to our ministry campus</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Location Info -->
                    <div>
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-6 text-gray-800">Location & Directions</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-purple-600 mt-1 mr-3"></i>
                                    <div>
                                        <p class="font-bold text-gray-800">Triumph Ministry Campus</p>
                                        <p class="text-gray-600">456 Victory Lane<br>Hope City, HC 12345</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <i class="fas fa-car text-blue-600 mt-1 mr-3"></i>
                                    <div>
                                        <p class="font-bold text-gray-800">Parking Information</p>
                                        <p class="text-gray-600">Free parking available in our main lot. Accessible parking
                                            spaces located near the main entrance.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <i class="fas fa-bus text-green-600 mt-1 mr-3"></i>
                                    <div>
                                        <p class="font-bold text-gray-800">Public Transportation</p>
                                        <p class="text-gray-600">Bus routes 15, 23, and 47 stop within one block of our
                                            campus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div>
                            <h3 class="text-2xl font-bold mb-6 text-gray-800">Hours of Operation</h3>
                            <div class="bg-gray-50 rounded-xl p-6">
                                <div class="space-y-1">
                                    <!-- Hours will be populated by JavaScript -->
                                    <div id="hours-list"></div>
                                </div>

                                <div class="mt-6 pt-6 border-t border-gray-200">
                                    <p class="text-sm text-gray-600">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        Holiday hours may vary. Check our social media for updates.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div>
                        <div class="map-container shadow-soft">
                            <div class="map-placeholder w-full h-full">
                                <div class="text-center">
                                    <i class="fas fa-map-marked-alt text-6xl text-purple-400 mb-4"></i>
                                    <h4 class="text-xl font-bold text-gray-800 mb-2">Triumph Ministry Campus</h4>
                                    <p class="text-gray-600 mb-4">456 Victory Lane, Hope City</p>
                                    <a href="https://maps.google.com/?q=456+Victory+Lane+Hope+City+HC+12345"
                                        target="_blank"
                                        class="inline-flex items-center triumph-gradient text-white px-6 py-2 rounded-lg font-medium transition duration-300 hover:opacity-90">
                                        <i class="fas fa-directions mr-2"></i>Get Directions
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Campus Features -->
                        <div class="mt-8 grid grid-cols-2 gap-4">
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-wifi text-purple-600 mr-2"></i>
                                    <h4 class="font-bold text-gray-800">Free Wi-Fi</h4>
                                </div>
                                <p class="text-sm text-gray-600">Available throughout campus</p>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-wheelchair text-blue-600 mr-2"></i>
                                    <h4 class="font-bold text-gray-800">Accessible</h4>
                                </div>
                                <p class="text-sm text-gray-600">Fully wheelchair accessible</p>
                            </div>

                            <div class="bg-green-50 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-child text-green-600 mr-2"></i>
                                    <h4 class="font-bold text-gray-800">Children's Area</h4>
                                </div>
                                <p class="text-sm text-gray-600">Supervised play area</p>
                            </div>

                            <div class="bg-amber-50 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-coffee text-amber-600 mr-2"></i>
                                    <h4 class="font-bold text-gray-800">Café</h4>
                                </div>
                                <p class="text-sm text-gray-600">Coffee & refreshments available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Contacts -->
    <section class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Meet Our Leadership Team</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our dedicated staff is here to serve you and the community</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="staff-card bg-white p-6 rounded-xl shadow-soft text-center hover-lift">
                    <div class="staff-image">
                        <i class="fas fa-user text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-1 text-gray-800">Pastor Michael Johnson</h3>
                    <p class="text-purple-600 font-medium mb-3">Senior Pastor</p>
                    <p class="text-gray-600 text-sm mb-4">Leads our spiritual direction and vision</p>
                    <a href="mailto:pastor@triumphministry.org"
                        class="text-purple-600 hover:text-purple-800 text-sm font-medium">
                        pastor@triumphministry.org
                    </a>
                </div>

                <div class="staff-card bg-white p-6 rounded-xl shadow-soft text-center hover-lift">
                    <div class="staff-image">
                        <i class="fas fa-user text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-1 text-gray-800">Sarah Williams</h3>
                    <p class="text-green-600 font-medium mb-3">Mental Health Director</p>
                    <p class="text-gray-600 text-sm mb-4">Oversees counseling and support services</p>
                    <a href="mailto:sarah@triumphministry.org"
                        class="text-green-600 hover:text-green-800 text-sm font-medium">
                        sarah@triumphministry.org
                    </a>
                </div>

                <div class="staff-card bg-white p-6 rounded-xl shadow-soft text-center hover-lift">
                    <div class="staff-image">
                        <i class="fas fa-user text-amber-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-1 text-gray-800">David Chen</h3>
                    <p class="text-amber-600 font-medium mb-3">Economic Development Director</p>
                    <p class="text-gray-600 text-sm mb-4">Manages marketplace and business training</p>
                    <a href="mailto:david@triumphministry.org"
                        class="text-amber-600 hover:text-amber-800 text-sm font-medium">
                        david@triumphministry.org
                    </a>
                </div>

                <div class="staff-card bg-white p-6 rounded-xl shadow-soft text-center hover-lift">
                    <div class="staff-image">
                        <i class="fas fa-user text-red-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-1 text-gray-800">Maria Rodriguez</h3>
                    <p class="text-red-600 font-medium mb-3">Outreach Coordinator</p>
                    <p class="text-gray-600 text-sm mb-4">Coordinates community service programs</p>
                    <a href="mailto:maria@triumphministry.org"
                        class="text-red-600 hover:text-red-800 text-sm font-medium">
                        maria@triumphministry.org
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Response Time Info -->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto bg-gradient-to-r from-purple-50 to-indigo-50 p-8 rounded-2xl shadow-soft">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">What to Expect After Contacting Us</h3>
                    <p class="text-gray-600">Our commitment to timely responses and excellent service</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-green-600"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Response Time</h4>
                        <p class="text-gray-600 text-sm">We respond to all inquiries within 24 hours during business days
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-check text-blue-600"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Personalized Attention</h4>
                        <p class="text-gray-600 text-sm">Your inquiry will be handled by the appropriate ministry
                            specialist</p>
                    </div>

                    <div class="text-center">
                        <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-purple-600"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Confidentiality</h4>
                        <p class="text-gray-600 text-sm">All personal information and requests are kept confidential</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-6">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-10 h-10 rounded-full triumph-gradient flex items-center justify-center">
                            <i class="fas fa-crown text-white"></i>
                        </div>
                        <span class="text-xl font-bold">Triumph Ministry</span>
                    </div>
                    <p class="text-gray-400">A holistic ministry dedicated to spiritual growth, mental healing, economic
                        empowerment, and community outreach.</p>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="mission.html" class="text-gray-400 hover:text-white transition">Mission</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Resources</h4>
                    <ul class="space-y-3">
                        <li><a href="mental-health.html" class="text-gray-400 hover:text-white transition">Mental Health
                                Resources</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white transition">Marketplace</a></li>
                        <li><a href="services.html#schedule" class="text-gray-400 hover:text-white transition">Service
                                Schedule</a></li>
                        <li><a href="#emergency" class="text-gray-400 hover:text-white transition">Emergency Contacts</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <div class="space-y-3">
                        <p class="text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i> 456 Victory Lane, Hope City
                        </p>
                        <p class="text-gray-400">
                            <i class="fas fa-phone mr-2"></i> (555) 987-6543
                        </p>
                        <p class="text-gray-400">
                            <i class="fas fa-envelope mr-2"></i> info@triumphministry.org
                        </p>
                        <p class="text-gray-400">
                            <i class="far fa-clock mr-2"></i> Mon-Fri: 9am-5pm
                        </p>
                    </div>

                    <div class="flex space-x-4 mt-6">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-purple-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-400 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-red-600 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Triumph Ministry. A 501(c)(3) non-profit organization.</p>
                <p class="mt-2 text-sm">"Let us then approach God's throne of grace with confidence, so that we may receive
                    mercy and find grace to help us in our time of need." — Hebrews 4:16</p>
            </div>
        </div>
    </footer>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-6 text-center">
            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-600 text-2xl"></i>
            </div>
            <h3 id="success-title" class="text-2xl font-bold mb-4 text-gray-800">Message Sent!</h3>
            <p id="success-message" class="text-gray-600 mb-6">Thank you for contacting us. We'll get back to you as soon
                as possible.</p>
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

        // Contact form tabs
        const contactTabs = document.querySelectorAll('.contact-tab');
        const tabContents = document.querySelectorAll('.tab-content');
        
        contactTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const tabId = tab.dataset.tab;
                
                // Update active tab
                contactTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                // Show corresponding content
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === tabId) {
                        content.classList.add('active');
                    }
                });
            });
        });

        // Hours of operation
        const hoursList = document.getElementById('hours-list');
        const today = new Date();
        const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        const todayName = days[today.getDay()];
        
        const hours = [
            { day: 'Sunday', hours: '8:00 AM - 1:00 PM', note: 'Worship Services' },
            { day: 'Monday', hours: '9:00 AM - 5:00 PM', note: 'Office Hours' },
            { day: 'Tuesday', hours: '9:00 AM - 5:00 PM', note: 'Office Hours' },
            { day: 'Wednesday', hours: '9:00 AM - 5:00 PM', note: 'Office Hours' },
            { day: 'Thursday', hours: '9:00 AM - 5:00 PM', note: 'Office Hours' },
            { day: 'Friday', hours: '9:00 AM - 5:00 PM', note: 'Office Hours' },
            { day: 'Saturday', hours: '10:00 AM - 2:00 PM', note: 'Community Services' }
        ];
        
        hours.forEach(hour => {
            const hourDiv = document.createElement('div');
            hourDiv.className = `hours-day ${hour.day === todayName ? 'today' : ''}`;
            hourDiv.innerHTML = `
                <span class="font-medium ${hour.day === todayName ? 'text-blue-600' : 'text-gray-800'}">${hour.day}</span>
                <div class="text-right">
                    <span class="font-bold text-gray-800">${hour.hours}</span>
                    <div class="text-sm text-gray-500">${hour.note}</div>
                </div>
            `;
            hoursList.appendChild(hourDiv);
        });

        // Form submissions
        const forms = document.querySelectorAll('.contact-form');
        const successModal = document.getElementById('success-modal');
        const successTitle = document.getElementById('success-title');
        const successMessage = document.getElementById('success-message');
        const closeSuccessModal = document.getElementById('close-success-modal');
        
        forms.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Get form type based on parent tab id
                const tabId = form.closest('.tab-content').id;
                let title = 'Message Sent!';
                let message = 'Thank you for contacting us. We\'ll get back to you as soon as possible.';
                
                // Customize success message based on form type
                switch(tabId) {
                    case 'prayer-tab':
                        title = 'Prayer Request Received';
                        message = 'Thank you for sharing your prayer need. Our prayer team will lift this up.';
                        break;
                    case 'counseling-tab':
                        title = 'Counseling Request Received';
                        message = 'Thank you for reaching out. Our counseling team will contact you within 24 hours.';
                        break;
                    case 'volunteer-tab':
                        title = 'Volunteer Application Submitted';
                        message = 'Thank you for your interest in volunteering! We\'ll contact you about next steps.';
                        break;
                    case 'marketplace-tab':
                        title = 'Marketplace Inquiry Sent';
                        message = 'Thank you for your interest in our marketplace. We\'ll contact you with more information.';
                        break;
                }
                
                // Show success modal
                successTitle.textContent = title;
                successMessage.textContent = message;
                successModal.classList.remove('hidden');
                
                // Reset form
                form.reset();
            });
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

        // Add fade-in class to contact cards
        document.addEventListener('DOMContentLoaded', () => {
            const contactCards = document.querySelectorAll('.contact-card');
            const staffCards = document.querySelectorAll('.staff-card');
            
            contactCards.forEach(card => {
                card.classList.add('fade-in');
            });
            
            staffCards.forEach(card => {
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

        // Auto-format phone numbers on input
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        
        phoneInputs.forEach(input => {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                
                if (value.length > 3 && value.length <= 6) {
                    value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
                } else if (value.length > 6) {
                    value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6, 10);
                }
                
                e.target.value = value;
            });
        });
    </script>
@endpush