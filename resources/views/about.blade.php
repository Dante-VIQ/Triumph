     @extends('layouts.app')

     @section('content')
         <!-- Hero Section -->
         <section class="pt-24 pb-16 md:pt-32 md:pb-24 px-6 triumph-gradient text-white relative overflow-hidden">
             <div class="absolute inset-0 opacity-10">
                 <div class="absolute top-10 left-10 text-6xl">✝</div>
                 <div class="absolute bottom-10 right-10 text-6xl">✝</div>
                 <div class="absolute top-1/2 left-1/4 text-8xl">⛪</div>
                 <div class="absolute top-1/3 right-1/4 text-7xl">🙏</div>
             </div>
             <div class="container mx-auto relative z-10">
                 <div class="max-w-4xl mx-auto text-center">
                     <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Our Mission: Threefold Triumph</h1>
                     <p class="text-xl mb-8 text-purple-100">Empowering spiritual growth, mental wellness, and economic
                         stability through God's transformative love.</p>
                     <div class="inline-block scripture-highlight px-4 py-2 rounded-lg">
                         <p class="text-gray-800 italic">"The Spirit of the Lord is upon me, because he has anointed me to
                             proclaim good news to the poor. He has sent me to proclaim liberty to the captives and
                             recovering of sight to the blind, to set at liberty those who are oppressed."</p>
                         <p class="text-purple-700 font-bold mt-2">— Luke 4:18 (ESV)</p>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Mission Overview -->
         <section id="mission" class="py-16 px-6 bg-white">
             <div class="container mx-auto">
                 <div class="text-center mb-16">
                     <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">The Three Pillars of Triumph</h2>
                     <p class="text-gray-600 max-w-3xl mx-auto">Inspired by Christ's ministry to the whole person—spirit,
                         mind, and body—we've built Triumph Ministry on three interconnected pillars that reflect God's
                         complete restoration plan.</p>
                 </div>

                 <div class="grid md:grid-cols-3 gap-8 mb-16">
                     <!-- Pillar 1: Spiritual -->
                     <div class="mission-card bg-white p-8 rounded-2xl shadow-soft border-t-purple-500 hover-lift">
                         <div class="pillar-icon spiritual-gradient mb-6">
                             <i class="fas fa-bible text-3xl text-white"></i>
                         </div>
                         <h3 class="text-2xl font-bold mb-4 text-center text-gray-800">Spiritual Triumph</h3>
                         <p class="text-gray-600 mb-6 text-center">Renewing minds and transforming hearts through God's
                             Word.</p>

                         <div class="space-y-4 mb-8">
                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Biblical Teaching</h4>
                                     <p class="text-gray-600 text-sm">Expository preaching and Bible studies that apply
                                         Scripture to daily life.</p>
                                 </div>
                             </div>

                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Worship Gatherings</h4>
                                     <p class="text-gray-600 text-sm">Weekly services that celebrate God's goodness and
                                         grace.</p>
                                 </div>
                             </div>

                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Discipleship Programs</h4>
                                     <p class="text-gray-600 text-sm">One-on-one and group mentoring for spiritual growth.
                                     </p>
                                 </div>
                             </div>
                         </div>

                         <div class="text-center">
                             <button
                                 class="pillar-details-btn spiritual-gradient hover:opacity-90 text-white px-6 py-2 rounded-full font-medium transition duration-300"
                                 data-pillar="spiritual">
                                 Learn More
                             </button>
                         </div>
                     </div>

                     <!-- Pillar 2: Mental -->
                     <div class="mission-card bg-white p-8 rounded-2xl shadow-soft border-t-green-500 hover-lift">
                         <div class="pillar-icon mental-gradient mb-6">
                             <i class="fas fa-brain text-3xl text-white"></i>
                         </div>
                         <h3 class="text-2xl font-bold mb-4 text-center text-gray-800">Mental Triumph</h3>
                         <p class="text-gray-600 mb-6 text-center">Healing minds and restoring hope through Christ-centered
                             support.</p>

                         <div class="space-y-4 mb-8">
                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Counseling Services</h4>
                                     <p class="text-gray-600 text-sm">Faith-integrated counseling for anxiety, depression,
                                         and trauma.</p>
                                 </div>
                             </div>

                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Support Groups</h4>
                                     <p class="text-gray-600 text-sm">Safe communities for sharing struggles and finding
                                         hope.</p>
                                 </div>
                             </div>

                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Mental Health Education</h4>
                                     <p class="text-gray-600 text-sm">Workshops that destigmatize mental health in faith
                                         communities.</p>
                                 </div>
                             </div>
                         </div>

                         <div class="text-center">
                             <button
                                 class="pillar-details-btn mental-gradient hover:opacity-90 text-white px-6 py-2 rounded-full font-medium transition duration-300"
                                 data-pillar="mental">
                                 Learn More
                             </button>
                         </div>
                     </div>

                     <!-- Pillar 3: Economic -->
                     <div class="mission-card bg-white p-8 rounded-2xl shadow-soft border-t-amber-500 hover-lift">
                         <div class="pillar-icon economic-gradient mb-6">
                             <i class="fas fa-handshake text-3xl text-white"></i>
                         </div>
                         <h3 class="text-2xl font-bold mb-4 text-center text-gray-800">Economic Triumph</h3>
                         <p class="text-gray-600 mb-6 text-center">Empowering livelihoods and building sustainable
                             communities.</p>

                         <div class="space-y-4 mb-8">
                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Business Training</h4>
                                     <p class="text-gray-600 text-sm">Practical workshops on entrepreneurship and financial
                                         stewardship.</p>
                                 </div>
                             </div>

                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Community Marketplace</h4>
                                     <p class="text-gray-600 text-sm">Platform for local artisans to sell products and
                                         sustain families.</p>
                                 </div>
                             </div>

                             <div class="flex items-start">
                                 <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                 <div>
                                     <h4 class="font-bold text-gray-800">Micro-Enterprise Support</h4>
                                     <p class="text-gray-600 text-sm">Resources and mentorship for small business startups.
                                     </p>
                                 </div>
                             </div>
                         </div>

                         <div class="text-center">
                             <button
                                 class="pillar-details-btn economic-gradient hover:opacity-90 text-white px-6 py-2 rounded-full font-medium transition duration-300"
                                 data-pillar="economic">
                                 Learn More
                             </button>
                         </div>
                     </div>
                 </div>

                 <!-- Vision Statement -->
                 <div class="max-w-4xl mx-auto bg-gradient-to-r from-purple-50 to-indigo-50 p-8 rounded-2xl shadow-soft">
                     <div class="text-center mb-6">
                         <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h3>
                         <p class="text-lg text-gray-700 italic mb-4">"To see individuals and communities experience
                             complete triumph—spiritually renewed, mentally whole, and economically empowered—through the
                             transformative power of Christ's love."</p>
                     </div>
                     <div class="grid md:grid-cols-3 gap-6 text-center">
                         <div>
                             <div class="text-4xl font-bold text-purple-600 mb-2">2015</div>
                             <p class="text-gray-600">Year Founded</p>
                         </div>
                         <div>
                             <div class="text-4xl font-bold text-green-600 mb-2">50+</div>
                             <p class="text-gray-600">Weekly Programs</p>
                         </div>
                         <div>
                             <div class="text-4xl font-bold text-amber-600 mb-2">1000+</div>
                             <p class="text-gray-600">Lives Impacted</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Pillar Details Tabs -->
         <section class="py-16 px-6 bg-gray-50">
             <div class="container mx-auto">
                 <div class="text-center mb-12">
                     <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Explore Each Pillar</h2>
                     <p class="text-gray-600 max-w-2xl mx-auto">Click on each tab to learn more about our comprehensive
                         approach</p>
                 </div>

                 <div class="max-w-6xl mx-auto">
                     <!-- Tab Buttons -->
                     <div class="flex flex-wrap justify-center gap-4 mb-8">
                         <button class="tab-button spiritual-gradient text-white" data-tab="spiritual-tab">
                             <i class="fas fa-bible mr-2"></i>Spiritual Triumph
                         </button>
                         <button class="tab-button mental-gradient text-white" data-tab="mental-tab">
                             <i class="fas fa-brain mr-2"></i>Mental Triumph
                         </button>
                         <button class="tab-button economic-gradient text-white" data-tab="economic-tab">
                             <i class="fas fa-handshake mr-2"></i>Economic Triumph
                         </button>
                     </div>

                     <!-- Tab Contents -->
                     <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                         <!-- Spiritual Tab -->
                         <div id="spiritual-tab" class="tab-content active p-8">
                             <div class="grid md:grid-cols-2 gap-8">
                                 <div>
                                     <h3 class="text-2xl font-bold mb-6 text-gray-800">Spiritual Triumph: Deepening Faith
                                     </h3>
                                     <p class="text-gray-600 mb-6">We believe spiritual growth is the foundation for all
                                         other areas of life. Our spiritual programs are designed to help individuals
                                         develop a vibrant, personal relationship with God.</p>

                                     <div class="space-y-6">
                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-church text-purple-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Sunday Worship Services</h4>
                                                 <p class="text-gray-600">10:00 AM Traditional & 6:00 PM Contemporary
                                                     services each Sunday.</p>
                                             </div>
                                         </div>

                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-users text-purple-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Small Group Ministry</h4>
                                                 <p class="text-gray-600">Over 20 home groups meeting weekly for fellowship
                                                     and Bible study.</p>
                                             </div>
                                         </div>

                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-hands-praying text-purple-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Prayer Ministry</h4>
                                                 <p class="text-gray-600">24/7 prayer chain, weekly prayer meetings, and
                                                     personal prayer counseling.</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 <div>
                                     <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-xl h-full">
                                         <h4 class="text-xl font-bold mb-4 text-gray-800">Upcoming Spiritual Events</h4>
                                         <div class="space-y-4">
                                             <div class="bg-white p-4 rounded-lg">
                                                 <div class="flex items-center">
                                                     <div class="text-center mr-4">
                                                         <div class="text-purple-600 font-bold">JUL</div>
                                                         <div class="text-2xl font-bold">7-9</div>
                                                     </div>
                                                     <div>
                                                         <h5 class="font-bold">Spiritual Renewal Weekend</h5>
                                                         <p class="text-gray-600 text-sm">Guest speaker: Pastor Michael
                                                             Johnson</p>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="bg-white p-4 rounded-lg">
                                                 <div class="flex items-center">
                                                     <div class="text-center mr-4">
                                                         <div class="text-purple-600 font-bold">JUL</div>
                                                         <div class="text-2xl font-bold">15</div>
                                                     </div>
                                                     <div>
                                                         <h5 class="font-bold">Baptism Service</h5>
                                                         <p class="text-gray-600 text-sm">Community pool celebration</p>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="bg-white p-4 rounded-lg">
                                                 <div class="flex items-center">
                                                     <div class="text-center mr-4">
                                                         <div class="text-purple-600 font-bold">JUL</div>
                                                         <div class="text-2xl font-bold">22</div>
                                                     </div>
                                                     <div>
                                                         <h5 class="font-bold">Men's Breakfast & Bible Study</h5>
                                                         <p class="text-gray-600 text-sm">7:00 AM | Fellowship Hall</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <!-- Mental Tab -->
                         <div id="mental-tab" class="tab-content p-8">
                             <div class="grid md:grid-cols-2 gap-8">
                                 <div>
                                     <h3 class="text-2xl font-bold mb-6 text-gray-800">Mental Triumph: Healing Minds</h3>
                                     <p class="text-gray-600 mb-6">We provide Christ-centered mental health support that
                                         integrates professional care with spiritual guidance for complete healing.</p>

                                     <div class="space-y-6">
                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-user-md text-green-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Licensed Christian Counselors
                                                 </h4>
                                                 <p class="text-gray-600">Three on-staff counselors offering sliding-scale
                                                     fees based on income.</p>
                                             </div>
                                         </div>

                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-users text-green-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Support Groups</h4>
                                                 <p class="text-gray-600">Weekly meetings for anxiety, depression, grief,
                                                     and addiction recovery.</p>
                                             </div>
                                         </div>

                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-graduation-cap text-green-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Mental Health Education</h4>
                                                 <p class="text-gray-600">Workshops that destigmatize mental health in
                                                     faith communities.</p>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="mt-8">
                                         <a href="mental-health.html"
                                             class="inline-flex items-center mental-gradient text-white px-6 py-3 rounded-lg font-bold transition duration-300 hover:opacity-90">
                                             Visit Mental Health Page
                                             <i class="fas fa-arrow-right ml-2"></i>
                                         </a>
                                     </div>
                                 </div>

                                 <div>
                                     <div class="bg-gradient-to-br from-green-50 to-teal-50 p-6 rounded-xl h-full">
                                         <h4 class="text-xl font-bold mb-4 text-gray-800">Crisis Support</h4>
                                         <div class="space-y-6">
                                             <div class="bg-white p-5 rounded-lg">
                                                 <div class="flex items-center mb-3">
                                                     <i class="fas fa-phone-alt text-red-500 mr-3"></i>
                                                     <h5 class="font-bold">24/7 Crisis Line</h5>
                                                 </div>
                                                 <a href="tel:+15551234567"
                                                     class="text-red-600 hover:text-red-800 font-bold text-lg">(555)
                                                     123-4567</a>
                                                 <p class="text-gray-600 text-sm mt-2">Immediate support available</p>
                                             </div>

                                             <div class="bg-white p-5 rounded-lg">
                                                 <div class="flex items-center mb-3">
                                                     <i class="fas fa-life-ring text-blue-500 mr-3"></i>
                                                     <h5 class="font-bold">988 Suicide & Crisis Lifeline</h5>
                                                 </div>
                                                 <p class="text-gray-600">Call or text 988 for free, confidential support
                                                 </p>
                                             </div>

                                             <div class="text-center">
                                                 <a href="mental-health.html#crisis"
                                                     class="text-green-600 hover:text-green-800 font-medium">
                                                     View All Crisis Resources →
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <!-- Economic Tab -->
                         <div id="economic-tab" class="tab-content p-8">
                             <div class="grid md:grid-cols-2 gap-8">
                                 <div>
                                     <h3 class="text-2xl font-bold mb-6 text-gray-800">Economic Triumph: Empowering Lives
                                     </h3>
                                     <p class="text-gray-600 mb-6">We believe economic empowerment is practical ministry.
                                         Through business training and marketplace opportunities, we help individuals gain
                                         financial stability and dignity.</p>

                                     <div class="space-y-6">
                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-chart-line text-amber-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Entrepreneurship Academy</h4>
                                                 <p class="text-gray-600">12-week intensive program covering business
                                                     planning, marketing, and finance.</p>
                                             </div>
                                         </div>

                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-store text-amber-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Triumph Marketplace</h4>
                                                 <p class="text-gray-600">Online and physical storefront for community
                                                     artisans to sell products.</p>
                                             </div>
                                         </div>

                                         <div class="flex items-start">
                                             <div
                                                 class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center mr-4 flex-shrink-0">
                                                 <i class="fas fa-hands-helping text-amber-600"></i>
                                             </div>
                                             <div>
                                                 <h4 class="font-bold text-gray-800 mb-2">Micro-Loan Program</h4>
                                                 <p class="text-gray-600">Interest-free startup loans for qualified
                                                     community businesses.</p>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="mt-8">
                                         <a href="products.html"
                                             class="inline-flex items-center economic-gradient text-white px-6 py-3 rounded-lg font-bold transition duration-300 hover:opacity-90">
                                             Visit Our Marketplace
                                             <i class="fas fa-arrow-right ml-2"></i>
                                         </a>
                                     </div>
                                 </div>

                                 <div>
                                     <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-6 rounded-xl h-full">
                                         <h4 class="text-xl font-bold mb-4 text-gray-800">Success Stories</h4>
                                         <div class="space-y-6">
                                             <div class="testimonial-card bg-white p-5 rounded-lg">
                                                 <div class="flex items-center mb-3">
                                                     <div
                                                         class="w-10 h-10 rounded-full bg-amber-200 flex items-center justify-center mr-3">
                                                         <i class="fas fa-user text-amber-600"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="font-bold">Maria Gonzalez</h5>
                                                         <p class="text-gray-600 text-sm">Bakery Owner</p>
                                                     </div>
                                                 </div>
                                                 <p class="text-gray-700 italic">"Through Triumph's business training and
                                                     marketplace, I turned my home baking into a full-time business that
                                                     supports my family."</p>
                                             </div>

                                             <div class="testimonial-card bg-white p-5 rounded-lg">
                                                 <div class="flex items-center mb-3">
                                                     <div
                                                         class="w-10 h-10 rounded-full bg-amber-200 flex items-center justify-center mr-3">
                                                         <i class="fas fa-user text-amber-600"></i>
                                                     </div>
                                                     <div>
                                                         <h5 class="font-bold">James Wilson</h5>
                                                         <p class="text-gray-600 text-sm">Woodworking Artisan</p>
                                                     </div>
                                                 </div>
                                                 <p class="text-gray-700 italic">"After losing my job, Triumph Ministry
                                                     helped me rediscover my woodworking skills and build a sustainable
                                                     business."</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Biblical Foundation -->
         <section class="py-16 px-6 bg-gray-900 text-white parallax-section"
             style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1518834103329-356b95f8c5e1?auto=format&fit=crop&w=1200&q=80');">
             <div class="container mx-auto">
                 <div class="max-w-4xl mx-auto text-center">
                     <h2 class="text-3xl md:text-4xl font-bold mb-8">Biblical Foundation</h2>

                     <div class="grid md:grid-cols-2 gap-8 mb-12">
                         <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover-lift">
                             <div class="text-amber-400 text-4xl mb-4">📖</div>
                             <h3 class="text-xl font-bold mb-3">Isaiah 61:1-3</h3>
                             <p class="text-gray-300 mb-4">"The Spirit of the Sovereign Lord is on me, because the Lord has
                                 anointed me to proclaim good news to the poor..." This passage inspires our holistic
                                 approach to ministry.</p>
                             <button class="text-amber-300 hover:text-amber-200 font-medium read-scripture-btn"
                                 data-ref="Isaiah 61:1-3">
                                 Read Passage →
                             </button>
                         </div>

                         <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl hover-lift">
                             <div class="text-amber-400 text-4xl mb-4">🙌</div>
                             <h3 class="text-xl font-bold mb-3">James 2:14-17</h3>
                             <p class="text-gray-300 mb-4">"Faith by itself, if it is not accompanied by action, is dead."
                                 This compels us to translate spiritual belief into practical community transformation.</p>
                             <button class="text-amber-300 hover:text-amber-200 font-medium read-scripture-btn"
                                 data-ref="James 2:14-17">
                                 Read Passage →
                             </button>
                         </div>
                     </div>

                     <div class="bg-purple-900/50 p-8 rounded-xl border-l-4 border-purple-500">
                         <p class="text-xl italic mb-4">"The thief comes only to steal and kill and destroy; I have come
                             that they may have life, and have it to the full."</p>
                         <p class="text-purple-300 font-bold">— John 10:10 (NIV)</p>
                         <p class="mt-4 text-gray-300">This verse encapsulates our mission: to help people experience the
                             abundant life Jesus promised—spiritually, mentally, and economically.</p>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Impact Section -->
         <section id="impact" class="py-16 px-6 bg-white">
             <div class="container mx-auto">
                 <div class="text-center mb-16">
                     <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Our Impact</h2>
                     <p class="text-gray-600 max-w-2xl mx-auto">Transforming lives through holistic ministry</p>
                 </div>

                 <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                     <div class="text-center">
                         <div class="impact-number mb-2">2,500+</div>
                         <h3 class="text-lg font-bold text-gray-800 mb-2">Meals Served</h3>
                         <p class="text-gray-600 text-sm">Through our community outreach programs</p>
                     </div>

                     <div class="text-center">
                         <div class="impact-number mb-2">150+</div>
                         <h3 class="text-lg font-bold text-gray-800 mb-2">Businesses Launched</h3>
                         <p class="text-gray-600 text-sm">Through our entrepreneurship training</p>
                     </div>

                     <div class="text-center">
                         <div class="impact-number mb-2">75+</div>
                         <h3 class="text-lg font-bold text-gray-800 mb-2">Support Groups</h3>
                         <p class="text-gray-600 text-sm">Weekly meetings for mental health support</p>
                     </div>

                     <div class="text-center">
                         <div class="impact-number mb-2">$500K+</div>
                         <h3 class="text-lg font-bold text-gray-800 mb-2">Artisan Sales</h3>
                         <p class="text-gray-600 text-sm">Generated through our marketplace</p>
                     </div>
                 </div>

                 <!-- Call to Action -->
                 <div class="max-w-4xl mx-auto triumph-gradient text-white p-8 rounded-2xl text-center">
                     <h2 class="text-2xl md:text-3xl font-bold mb-4">Join Our Mission</h2>
                     <p class="text-xl mb-8 text-purple-100">Whether through prayer, volunteering, or financial
                         partnership, you can help bring triumph to more lives.</p>
                     <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                         <a href="index.html#contact"
                             class="bg-white text-purple-600 hover:bg-purple-50 px-8 py-3 rounded-full font-bold transition duration-300">Volunteer</a>
                         <a href="#"
                             class="border-2 border-white text-white hover:bg-white hover:text-purple-600 px-8 py-3 rounded-full font-bold transition duration-300">Partner
                             Financially</a>
                         <a href="#"
                             class="border-2 border-white text-white hover:bg-white hover:text-purple-600 px-8 py-3 rounded-full font-bold transition duration-300">Pray
                             With Us</a>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Contact Section -->
         <section id="contact" class="py-16 px-6 bg-gray-50">
             <div class="container mx-auto">
                 <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-soft">
                     <div class="text-center mb-8">
                         <h2 class="text-3xl font-bold mb-4 text-gray-800">Connect With Us</h2>
                         <p class="text-gray-600">We'd love to hear from you and explore how you can be part of our
                             mission.</p>
                     </div>

                     <div class="grid md:grid-cols-3 gap-8 mb-8">
                         <div class="text-center">
                             <div
                                 class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4">
                                 <i class="fas fa-map-marker-alt text-purple-600"></i>
                             </div>
                             <h3 class="font-bold text-gray-800 mb-2">Visit Us</h3>
                             <p class="text-gray-600">456 Victory Lane<br>Hope City, HC 12345</p>
                         </div>

                         <div class="text-center">
                             <div
                                 class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                                 <i class="fas fa-phone text-green-600"></i>
                             </div>
                             <h3 class="font-bold text-gray-800 mb-2">Call Us</h3>
                             <p class="text-gray-600">(555) 987-6543<br>Mon-Fri, 9am-5pm</p>
                         </div>

                         <div class="text-center">
                             <div
                                 class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mx-auto mb-4">
                                 <i class="fas fa-envelope text-amber-600"></i>
                             </div>
                             <h3 class="font-bold text-gray-800 mb-2">Email Us</h3>
                             <p class="text-gray-600">info@triumphministry.org<br>We respond within 24 hours</p>
                         </div>
                     </div>

                     <div class="text-center">
                         <a href="index.html#contact"
                             class="inline-flex items-center triumph-gradient text-white px-8 py-3 rounded-full font-bold transition duration-300 hover:opacity-90">
                             <i class="fas fa-paper-plane mr-2"></i>Send Us a Message
                         </a>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Scripture Modal -->
         <div id="scripture-modal"
             class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
             <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-y-auto">
                 <div class="p-6">
                     <div class="flex justify-between items-center mb-6">
                         <h3 id="scripture-title" class="text-2xl font-bold text-gray-800">Scripture Passage</h3>
                         <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                             <i class="fas fa-times text-2xl"></i>
                         </button>
                     </div>
                     <div id="scripture-content" class="prose max-w-none">
                         <!-- Scripture content will be inserted here -->
                     </div>
                     <div class="mt-6 text-center">
                         <button id="close-modal-btn"
                             class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-medium">
                             Close
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     @endsection

     @push('scripts')
         <script>
             document.addEventListener('DOMContentLoaded', function() {
                 // Mobile menu toggle
                 const menuBtn = document.getElementById('menu-btn');
                 const mobileMenu = document.getElementById('mobile-menu');

                 if (menuBtn && mobileMenu) {
                     menuBtn.addEventListener('click', function() {
                         mobileMenu.classList.toggle('hidden');
                         const icon = menuBtn.querySelector('i');
                         if (icon) {
                             icon.classList.toggle('fa-bars');
                             icon.classList.toggle('fa-times');
                         }
                     });
                 }

                 // Tab functionality
                 const tabButtons = document.querySelectorAll('.tab-button');
                 const tabContents = document.querySelectorAll('.tab-content');

                 tabButtons.forEach(button => {
                     button.addEventListener('click', () => {
                         const tabId = button.dataset.tab;

                         // Update active button
                         tabButtons.forEach(btn => {
                             btn.classList.remove('active');
                             // Reset to gradient backgrounds
                             if (btn.dataset.tab === 'spiritual-tab') {
                                 btn.className = 'tab-button spiritual-gradient text-white';
                             } else if (btn.dataset.tab === 'mental-tab') {
                                 btn.className = 'tab-button mental-gradient text-white';
                             } else if (btn.dataset.tab === 'economic-tab') {
                                 btn.className = 'tab-button economic-gradient text-white';
                             }
                         });
                         button.classList.add('active');

                         // Show corresponding content
                         tabContents.forEach(content => {
                             content.classList.remove('active');
                             if (content.id === tabId) {
                                 content.classList.add('active');
                             }
                         });

                         // Scroll to tab section safely
                         const activeBtn = document.querySelector('.tab-button.active');
                         if (activeBtn) {
                             activeBtn.scrollIntoView({
                                 behavior: 'smooth',
                                 block: 'center'
                             });
                         }
                     });
                 });

                 // Scripture modal
                 const scriptureModal = document.getElementById('scripture-modal');
                 const scriptureTitle = document.getElementById('scripture-title');
                 const scriptureContent = document.getElementById('scripture-content');
                 const closeModal = document.getElementById('close-modal');
                 const closeModalBtn = document.getElementById('close-modal-btn');
                 const readScriptureBtns = document.querySelectorAll('.read-scripture-btn');

                 if (scriptureModal && closeModal && closeModalBtn) {
                     closeModal.addEventListener('click', () => {
                         scriptureModal.classList.add('hidden');
                         scriptureModal.classList.remove('flex');
                     });

                     closeModalBtn.addEventListener('click', () => {
                         scriptureModal.classList.add('hidden');
                         scriptureModal.classList.remove('flex');
                     });

                     readScriptureBtns.forEach(btn => {
                         btn.addEventListener('click', (e) => {
                             e.preventDefault();
                             const scripture = btn.dataset.scripture;
                             
                             scriptureModal.classList.remove('hidden');
                             scriptureModal.classList.add('flex');
                             
                             if (scriptureTitle) {
                                 scriptureTitle.innerHTML = scripture;
                             }
                         });
                     });
                 }
             });
         </script>
     @endpush

