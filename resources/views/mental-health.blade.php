@extends('layouts.app')

@section('content')
    <!-- Crisis Banner -->
    <div id="crisis" class="pt-24 md:pt-28 px-6">
        <div class="container mx-auto">
            <div class="crisis-banner bg-gradient-to-r from-red-500 to-red-600 text-white p-6 rounded-xl shadow-lg">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-exclamation-triangle text-2xl mr-3"></i>
                            <h3 class="text-xl font-bold">In Crisis? Immediate Help Available</h3>
                        </div>
                        <p class="text-red-100">You are not alone. Speak with someone who cares, right now.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="tel:+15551234567" class="bg-white text-red-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-bold text-center transition duration-300">
                            <i class="fas fa-phone-alt mr-2"></i>Call Now: (555) 123-4567
                        </a>
                        <a href="tel:988" class="bg-red-700 hover:bg-red-800 text-white px-6 py-3 rounded-lg font-bold text-center transition duration-300">
                            <i class="fas fa-life-ring mr-2"></i>988 Suicide & Crisis Lifeline
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="py-16 px-6">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">Mental Health & Faith</h1>
                    <p class="text-xl text-gray-600 mb-8">Finding healing, hope, and wholeness through Christ-centered support and professional care. Your mental health matters to God, and it matters to us.</p>

                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#support-groups" class="healing-gradient hover:opacity-90 text-white px-8 py-3 rounded-full font-bold text-center transition duration-300">
                            Find Support Groups
                        </a>
                        <a href="#counseling" class="border-2 border-green-500 text-green-600 hover:bg-green-500 hover:text-white px-8 py-3 rounded-full font-bold text-center transition duration-300">
                            Counseling Services
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-64 h-64 md:w-80 md:h-80 rounded-full healing-gradient flex items-center justify-center shadow-xl">
                            <i class="fas fa-hands-heart text-7xl md:text-8xl text-white"></i>
                        </div>
                        <div class="absolute -top-4 -right-4 w-32 h-32 rounded-full bg-blue-100 flex items-center justify-center shadow-lg">
                            <i class="fas fa-brain text-4xl text-blue-500"></i>
                        </div>
                        <div class="absolute -bottom-6 -left-6 w-40 h-40 rounded-full bg-purple-100 flex items-center justify-center shadow-lg">
                            <i class="fas fa-pray text-5xl text-purple-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Biblical Perspective -->
    <section class="py-16 px-6 bg-gradient-to-r from-green-50 to-blue-50">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">A Biblical Perspective on Mental Health</h2>
                    <p class="text-gray-600">Scripture speaks to our whole being—mind, body, and spirit.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-soft">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <div class="flex items-start mb-6">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-bible text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Psalm 34:17-18</h3>
                                    <p class="text-gray-600">"The righteous cry out, and the Lord hears them; he delivers them from all their troubles. The Lord is close to the brokenhearted and saves those who are crushed in spirit."</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-hands-praying text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Philippians 4:6-7</h3>
                                    <p class="text-gray-600">"Do not be anxious about anything, but in every situation, by prayer and petition, with thanksgiving, present your requests to God. And the peace of God, which transcends all understanding, will guard your hearts and your minds in Christ Jesus."</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="bg-gray-50 p-6 rounded-xl">
                                <h3 class="text-lg font-bold text-gray-800 mb-4">Our Approach</h3>
                                <p class="text-gray-600 mb-4">At Triumph Ministry, we believe mental health is not separate from spiritual health. We integrate:</p>

                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-700">Evidence-based psychological practices</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-700">Biblical wisdom and spiritual guidance</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-700">Prayer and spiritual disciplines</span>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span class="text-gray-700">Community support and accountability</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Groups -->
    <section id="support-groups" class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Support Groups & Communities</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Find understanding, connection, and hope in our faith-based support communities</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div class="support-group-card anxiety-card bg-white p-6 rounded-xl shadow-soft hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                            <i class="fas fa-wind text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Anxiety & Peace</h3>
                            <p class="text-gray-500 text-sm">Finding calm in the storm</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Learn biblical and practical tools for managing anxiety while growing in faith.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Tuesdays, 7 PM
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-800 font-medium text-sm">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="support-group-card depression-card bg-white p-6 rounded-xl shadow-soft hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                            <i class="fas fa-cloud text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Depression & Hope</h3>
                            <p class="text-gray-500 text-sm">Light in the darkness</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">A safe space to share struggles and discover hope through Christ and community.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Wednesdays, 6 PM
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="support-group-card grief-card bg-white p-6 rounded-xl shadow-soft hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                            <i class="fas fa-heart-crack text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Grief & Healing</h3>
                            <p class="text-gray-500 text-sm">Mourning with hope</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Navigating loss while holding onto the hope we have in Christ's resurrection.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Thursdays, 7 PM
                        </div>
                        <a href="#" class="text-green-600 hover:text-green-800 font-medium text-sm">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="support-group-card addiction-card bg-white p-6 rounded-xl shadow-soft hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mr-4">
                            <i class="fas fa-shield-heart text-amber-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Addiction Recovery</h3>
                            <p class="text-gray-500 text-sm">Freedom in Christ</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">12-step program integrated with biblical principles for lasting recovery.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Fridays, 7 PM
                        </div>
                        <a href="#" class="text-amber-600 hover:text-amber-800 font-medium text-sm">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="support-group-card trauma-card bg-white p-6 rounded-xl shadow-soft hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mr-4">
                            <i class="fas fa-hand-holding-heart text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Trauma Recovery</h3>
                            <p class="text-gray-500 text-sm">Healing from pain</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Specialized support for those healing from traumatic experiences.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Saturdays, 10 AM
                        </div>
                        <a href="#" class="text-red-600 hover:text-red-800 font-medium text-sm">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <div class="support-group-card wellness-card bg-white p-6 rounded-xl shadow-soft hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-cyan-100 flex items-center justify-center mr-4">
                            <i class="fas fa-spa text-cyan-600"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Mental Wellness</h3>
                            <p class="text-gray-500 text-sm">Proactive care</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Building resilience and maintaining mental health through spiritual practices.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i> Mondays, 6 PM
                        </div>
                        <a href="#" class="text-cyan-600 hover:text-cyan-800 font-medium text-sm">
                            Join Group <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="inline-flex items-center healing-gradient text-white px-8 py-3 rounded-full font-bold transition duration-300 hover:opacity-90">
                    <i class="fas fa-calendar-plus mr-2"></i> View All Group Schedules
                </a>
            </div>
        </div>
    </section>

    <!-- Counseling Services -->
    <section id="counseling" class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Professional Counseling Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Licensed Christian counselors integrating faith and professional expertise</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <!-- Counselor Tabs -->
                <div class="flex flex-wrap justify-center gap-2 mb-8">
                    <button class="tab-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-green-50 transition active" data-tab="individual">Individual Therapy</button>
                    <button class="tab-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-green-50 transition" data-tab="couples">Couples Counseling</button>
                    <button class="tab-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-green-50 transition" data-tab="family">Family Therapy</button>
                    <button class="tab-btn px-6 py-2 rounded-full border border-gray-300 hover:bg-green-50 transition" data-tab="teen">Teen Counseling</button>
                </div>

                <!-- Tab Contents -->
                <div id="individual" class="tab-content active">
                    <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/2 p-8">
                                <h3 class="text-2xl font-bold mb-4 text-gray-800">Individual Therapy</h3>
                                <p class="text-gray-600 mb-6">One-on-one sessions with a licensed Christian counselor who integrates biblical wisdom with evidence-based therapeutic approaches.</p>

                                <div class="space-y-4 mb-6">
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Cognitive Behavioral Therapy (CBT)</h4>
                                            <p class="text-gray-600 text-sm">Identifying and changing negative thought patterns</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Faith Integration</h4>
                                            <p class="text-gray-600 text-sm">Applying Scripture and prayer to the healing process</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Trauma-Informed Care</h4>
                                            <p class="text-gray-600 text-sm">Safe, compassionate approach for healing from trauma</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-green-50 p-4 rounded-lg mb-6">
                                    <div class="flex items-center">
                                        <i class="fas fa-dollar-sign text-green-600 mr-3"></i>
                                        <div>
                                            <p class="font-medium">Sliding Scale Fees Available</p>
                                            <p class="text-sm text-gray-600">We believe everyone deserves access to care</p>
                                        </div>
                                    </div>
                                </div>

                                <a href="#appointment" class="block w-full healing-gradient text-white text-center py-3 rounded-lg font-bold transition duration-300 hover:opacity-90">
                                    Schedule Appointment
                                </a>
                            </div>
                            <div class="md:w-1/2 bg-gradient-to-br from-green-100 to-blue-100 flex items-center justify-center p-8">
                                <i class="fas fa-user-md text-8xl text-green-500 opacity-70"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="couples" class="tab-content">
                    <!-- Similar structure for couples counseling -->
                </div>

                <!-- Counselors -->
                <div class="mt-16">
                    <h3 class="text-2xl font-bold mb-8 text-center text-gray-800">Meet Our Counselors</h3>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="counselor-card bg-white rounded-xl shadow-soft overflow-hidden hover-lift">
                            <div class="h-48 bg-gradient-to-r from-green-200 to-teal-200 overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-user-md text-7xl text-green-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-bold mb-1">Dr. Sarah Johnson</h4>
                                <p class="text-green-600 text-sm font-medium mb-3">Licensed Clinical Psychologist</p>
                                <p class="text-gray-600 text-sm mb-4">Specializes in anxiety, depression, and faith integration. 15+ years experience.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-clock mr-2"></i>
                                    <span>Mon, Wed, Fri: 9 AM - 5 PM</span>
                                </div>
                            </div>
                        </div>

                        <div class="counselor-card bg-white rounded-xl shadow-soft overflow-hidden hover-lift">
                            <div class="h-48 bg-gradient-to-r from-blue-200 to-indigo-200 overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-user-nurse text-7xl text-blue-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-bold mb-1">Michael Rodriguez</h4>
                                <p class="text-blue-600 text-sm font-medium mb-3">Licensed Marriage & Family Therapist</p>
                                <p class="text-gray-600 text-sm mb-4">Specializes in couples counseling, family systems, and trauma recovery.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-clock mr-2"></i>
                                    <span>Tue, Thu: 10 AM - 7 PM</span>
                                </div>
                            </div>
                        </div>

                        <div class="counselor-card bg-white rounded-xl shadow-soft overflow-hidden hover-lift">
                            <div class="h-48 bg-gradient-to-r from-purple-200 to-pink-200 overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-hands-helping text-7xl text-purple-600"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="text-xl font-bold mb-1">Grace Williams</h4>
                                <p class="text-purple-600 text-sm font-medium mb-3">Licensed Clinical Social Worker</p>
                                <p class="text-gray-600 text-sm mb-4">Specializes in grief counseling, addiction recovery, and teen mental health.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-clock mr-2"></i>
                                    <span>Mon-Fri: 1 PM - 9 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources -->
    <section id="resources" class="py-16 px-6 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Mental Health Resources</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Tools, guides, and materials to support your mental health journey</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="resource-card bg-gray-50 p-6 rounded-xl border-l-green-500 hover-lift">
                    <div class="text-green-500 mb-4">
                        <i class="fas fa-book-open text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Mental Health & Faith Guide</h3>
                    <p class="text-gray-600 mb-4">A comprehensive PDF guide on integrating mental health care with spiritual practices.</p>
                    <a href="#" class="text-green-600 hover:text-green-800 font-medium inline-flex items-center">
                        Download Guide
                        <i class="fas fa-download ml-2"></i>
                    </a>
                </div>

                <div class="resource-card bg-gray-50 p-6 rounded-xl border-l-blue-500 hover-lift">
                    <div class="text-blue-500 mb-4">
                        <i class="fas fa-video text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Video Library</h3>
                    <p class="text-gray-600 mb-4">Recorded workshops, testimonies, and teachings on mental health from a Christian perspective.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Watch Videos
                        <i class="fas fa-play-circle ml-2"></i>
                    </a>
                </div>

                <div class="resource-card bg-gray-50 p-6 rounded-xl border-l-purple-500 hover-lift">
                    <div class="text-purple-500 mb-4">
                        <i class="fas fa-podcast text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Podcast: Faithful Minds</h3>
                    <p class="text-gray-600 mb-4">Weekly conversations about mental health, faith, and finding hope in difficult times.</p>
                    <a href="#" class="text-purple-600 hover:text-purple-800 font-medium inline-flex items-center">
                        Listen Now
                        <i class="fas fa-headphones ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Tips -->
            <div class="max-w-4xl mx-auto bg-gradient-to-r from-green-50 to-blue-50 p-8 rounded-2xl">
                <h3 class="text-2xl font-bold mb-6 text-center text-gray-800">Quick Mental Health Tips</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <i class="fas fa-pray text-green-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">Start Your Day with Prayer</h4>
                        </div>
                        <p class="text-gray-600">Begin each morning with 5 minutes of prayer and Scripture reading to set a positive tone.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-walking text-blue-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">Take a Gratitude Walk</h4>
                        </div>
                        <p class="text-gray-600">Combine physical exercise with mindfulness by noticing things you're thankful for during a walk.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                <i class="fas fa-users text-purple-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">Connect with Community</h4>
                        </div>
                        <p class="text-gray-600">Isolation worsens mental health. Reach out to a friend or attend a support group this week.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center mr-4">
                                <i class="fas fa-journal-whills text-amber-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">Keep a Prayer Journal</h4>
                        </div>
                        <p class="text-gray-600">Write down your worries, prayers, and God's answers to track His faithfulness.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prayer Request & Appointment -->
    <section id="appointment" class="py-16 px-6 bg-gray-50">
        <div class="container mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Prayer Request Form -->
                    <div class="bg-white p-8 rounded-2xl shadow-soft">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Submit a Prayer Request</h3>
                        <p class="text-gray-600 mb-6">Our prayer team is ready to lift up your needs. All requests are kept confidential.</p>

                        <form class="prayer-request-form space-y-6">
                            <div>
                                <label class="block text-gray-700 mb-2">Your Name (Optional)</label>
                                <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500" placeholder="Name">
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Prayer Request</label>
                                <textarea class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500" placeholder="Share your prayer need..."></textarea>
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" id="anonymous" class="mr-3">
                                <label for="anonymous" class="text-gray-700">Submit anonymously</label>
                            </div>

                            <button type="submit" class="w-full bg-purple-500 hover:bg-purple-600 text-white font-bold py-3 rounded-lg transition duration-300">
                                Submit for Prayer
                            </button>
                        </form>
                    </div>

                    <!-- Appointment Form -->
                    <div class="bg-white p-8 rounded-2xl shadow-soft">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Schedule Counseling Appointment</h3>
                        <p class="text-gray-600 mb-6">Take the first step toward healing. We'll contact you within 24 hours.</p>

                        <form class="space-y-6">
                            <div>
                                <label class="block text-gray-700 mb-2">Full Name *</label>
                                <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500" placeholder="Your name" required>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Email Address *</label>
                                <input type="email" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500" placeholder="you@example.com" required>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500" placeholder="(555) 123-4567">
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Type of Support Needed</label>
                                <select class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-green-500">
                                    <option value="">Select an option</option>
                                    <option value="individual">Individual Therapy</option>
                                    <option value="couples">Couples Counseling</option>
                                    <option value="family">Family Therapy</option>
                                    <option value="support-group">Support Group</option>
                                    <option value="unsure">Not Sure - Need Guidance</option>
                                </select>
                            </div>

                            <button type="submit" class="w-full healing-gradient text-white font-bold py-3 rounded-lg transition duration-300 hover:opacity-90">
                                Request Appointment
                            </button>

                            <p class="text-center text-sm text-gray-500">All inquiries are confidential. Sliding scale fees available.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 px-6 bg-gradient-to-r from-green-50 to-teal-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Stories of Hope & Healing</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Real people finding real healing through Christ-centered mental health support</p>
            </div>

            <div class="max-w-4xl mx-auto relative">
                <div id="testimonial-slider" class="overflow-hidden">
                    <div class="testimonial-slide active bg-white p-8 rounded-2xl shadow-soft">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <i class="fas fa-user text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Mark T.</h4>
                                <p class="text-gray-600 text-sm">Anxiety Support Group Member</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic text-lg mb-4">"For years I struggled with panic attacks and thought I just needed more faith. Triumph Ministry showed me that God cares about my mental health too. The support group gave me practical tools and spiritual encouragement. I'm learning to manage my anxiety while growing closer to God."</p>
                        <div class="text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-slide bg-white p-8 rounded-2xl shadow-soft">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-user text-blue-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Jennifer L.</h4>
                                <p class="text-gray-600 text-sm">Counseling Client</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic text-lg mb-4">"After losing my husband, I felt completely lost. The grief support group at Triumph Ministry saved my life. Being with others who understood my pain, while also pointing me to Christ's comfort, gave me hope to keep going. I'm still grieving, but now I'm grieving with hope."</p>
                        <div class="text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-slide bg-white p-8 rounded-2xl shadow-soft">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                <i class="fas fa-user text-purple-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">David & Maria R.</h4>
                                <p class="text-gray-600 text-sm">Couples Counseling</p>
                            </div>
                        </div>
                        <p class="text-gray-700 italic text-lg mb-4">"Our marriage was on the brink of collapse. Through Christian counseling at Triumph Ministry, we learned to communicate with love and respect. Our counselor helped us see how our faith could be the foundation of our marriage, not just another thing we argued about. We're grateful for this ministry."</p>
                        <div class="text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-8 space-x-4">
                    <button id="prev-testimonial" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-100 transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="next-testimonial" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-green-100 transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
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

        // Tab functionality
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.dataset.tab;

                // Update active button
                tabButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Show corresponding content
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === tabId) {
                        content.classList.add('active');
                    }
                });
            });
        });

        // Testimonial slider
        const testimonials = document.querySelectorAll('.testimonial-slide');
        const prevBtn = document.getElementById('prev-testimonial');
        const nextBtn = document.getElementById('next-testimonial');
        let currentTestimonial = 0;

        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.classList.remove('active');
                if (i === index) {
                    testimonial.classList.add('active');
                }
            });
        }

        nextBtn.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        });

        prevBtn.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            showTestimonial(currentTestimonial);
        });

        // Auto-rotate testimonials
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 8000);

        // Form submissions
        document.querySelector('.prayer-request-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for sharing your prayer request. Our prayer team will lift this up.');
            e.target.reset();
        });

        document.querySelector('#appointment form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for requesting an appointment. Our counseling team will contact you within 24 hours.');
            e.target.reset();
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

        // Add fade-in class to cards
        document.addEventListener('DOMContentLoaded', () => {
            const resourceCards = document.querySelectorAll('.resource-card');
            const supportGroupCards = document.querySelectorAll('.support-group-card');
            const counselorCards = document.querySelectorAll('.counselor-card');

            resourceCards.forEach(card => card.classList.add('fade-in'));
            supportGroupCards.forEach(card => card.classList.add('fade-in'));
            counselorCards.forEach(card => card.classList.add('fade-in'));
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
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    const menuBtn = document.getElementById('menu-btn');

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
