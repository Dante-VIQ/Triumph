<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Triumph Ministry') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        * {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Merriweather', serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .triumph-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #a855f7 100%);
        }

        .spiritual-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
        }

        .mental-gradient {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        }

        .economic-gradient {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
        }

        .outreach-gradient {
            background: linear-gradient(135deg, #ef4444 0%, #f87171 100%);
        }

        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .service-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }

        .spiritual-card {
            border-left-color: #4f46e5;
        }

        .mental-card {
            border-left-color: #10b981;
        }

        .economic-card {
            border-left-color: #f59e0b;
        }

        .outreach-card {
            border-left-color: #ef4444;
        }

        .schedule-day {
            position: relative;
            padding-left: 2rem;
        }

        .schedule-day::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .spiritual-schedule::before {
            background-color: #4f46e5;
        }

        .mental-schedule::before {
            background-color: #10b981;
        }

        .economic-schedule::before {
            background-color: #f59e0b;
        }

        .outreach-schedule::before {
            background-color: #ef4444;
        }

        .service-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            margin-bottom: 1.5rem;
        }

        .service-filter-btn {
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            border: 2px solid #e5e7eb;
            background: white;
            color: #4b5563;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .service-filter-btn:hover {
            transform: translateY(-2px);
        }

        .service-filter-btn.active {
            border-color: transparent;
            color: white;
        }

        .service-filter-btn.all.active {
            background: linear-gradient(135deg, #4f46e5 0%, #a855f7 100%);
        }

        .service-filter-btn.spiritual.active {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
        }

        .service-filter-btn.mental.active {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        }

        .service-filter-btn.economic.active {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
        }

        .service-filter-btn.outreach.active {
            background: linear-gradient(135deg, #ef4444 0%, #f87171 100%);
        }

        .service-item {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.5s ease;
        }

        .service-item.hidden {
            opacity: 0;
            transform: translateY(20px);
            height: 0;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .calendar-day {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .calendar-day.active {
            background: linear-gradient(135deg, #4f46e5 0%, #a855f7 100%);
            color: white;
        }

        .calendar-day.has-event {
            position: relative;
        }

        .calendar-day.has-event::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #4f46e5;
        }

        .calendar-day.active.has-event::after {
            background-color: white;
        }

        .event-category {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .event-spiritual {
            background-color: #e0e7ff;
            color: #4f46e5;
        }

        .event-mental {
            background-color: #d1fae5;
            color: #065f46;
        }

        .event-economic {
            background-color: #fef3c7;
            color: #92400e;
        }

        .event-outreach {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .registration-form input,
        .registration-form select,
        .registration-form textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
        }

        .registration-form input:focus,
        .registration-form select:focus,
        .registration-form textarea:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }


        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .product-card {
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }

        .category-btn.active {
            background-color: #3b82f6;
            color: white;
        }

        .cart-notification {
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .triumph-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #a855f7 100%);
        }

        .triumph-gradient-reverse {
            background: linear-gradient(135deg, #a855f7 0%, #7c3aed 50%, #4f46e5 100%);
        }

        .spiritual-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #6366f1 100%);
        }

        .mental-gradient {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        }

        .economic-gradient {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
        }

        .scripture-highlight {
            background: linear-gradient(120deg, #fef3c7 0%, #fef3c7 100%);
            background-repeat: no-repeat;
            background-size: 100% 40%;
            background-position: 0 90%;
        }

        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .mission-card {
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }

        .mission-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }

        .pillar-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto;
            position: relative;
        }

        .pillar-icon::after {
            content: '';
            position: absolute;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: -1;
        }

        .testimonial-card {
            position: relative;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 120px;
            font-family: 'Merriweather', serif;
            color: rgba(79, 70, 229, 0.1);
            line-height: 1;
        }

        .impact-number {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #4f46e5 0%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .parallax-section {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .tab-button {
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            background: #f3f4f6;
            color: #4b5563;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-button.active {
            background: linear-gradient(135deg, #4f46e5 0%, #a855f7 100%);
            color: white;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .parallax-section {
                background-attachment: scroll;
            }
        }

        .healing-gradient {
            background: linear-gradient(135deg, #10b981 0%, #34d399 50%, #6ee7b7 100%);
        }

        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .crisis-banner {
            animation: pulse 2s infinite;
            position: relative;
            overflow: hidden;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
            }
        }

        .resource-card {
            border-left: 4px solid transparent;
            transition: all 0.3s ease;
        }

        .resource-card:hover {
            transform: translateX(5px);
        }

        .support-group-card {
            position: relative;
            overflow: hidden;
        }

        .support-group-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
        }

        .anxiety-card::before {
            background: linear-gradient(90deg, #8b5cf6, #a78bfa);
        }

        .depression-card::before {
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
        }

        .grief-card::before {
            background: linear-gradient(90deg, #10b981, #34d399);
        }

        .addiction-card::before {
            background: linear-gradient(90deg, #f59e0b, #fbbf24);
        }

        .trauma-card::before {
            background: linear-gradient(90deg, #ef4444, #f87171);
        }

        .wellness-card::before {
            background: linear-gradient(90deg, #06b6d4, #22d3ee);
        }

        .testimonial-slide {
            opacity: 0;
            transform: translateX(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .testimonial-slide.active {
            opacity: 1;
            transform: translateX(0);
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .prayer-request-form textarea {
            min-height: 120px;
            resize: vertical;
        }

        .counselor-card {
            transition: all 0.3s ease;
        }

        .counselor-card:hover .counselor-img {
            transform: scale(1.05);
        }

        .counselor-img {
            transition: transform 0.3s ease;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .tab-btn.active {
            background-color: #10b981;
            color: white;
        }

        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .contact-card {
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }

        .contact-form input,
        .contact-form select,
        .contact-form textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form select:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .contact-tab {
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            background: #f3f4f6;
            color: #4b5563;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .contact-tab.active {
            background: linear-gradient(135deg, #4f46e5 0%, #a855f7 100%);
            color: white;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .map-container {
            border-radius: 1rem;
            overflow: hidden;
            height: 400px;
            position: relative;
        }

        .map-placeholder {
            background: linear-gradient(135deg, #e0e7ff 0%, #ede9fe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hours-day {
            padding: 0.75rem 0;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hours-day:last-child {
            border-bottom: none;
        }

        .hours-day.today {
            background-color: #f0f9ff;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            margin: 0 -1rem;
        }

        .staff-card {
            transition: all 0.3s ease;
        }

        .staff-card:hover {
            transform: translateY(-5px);
        }

        .staff-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e0e7ff 0%, #ede9fe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .emergency-banner {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'hotel-gold': '#D4AF37',
                        'hotel-navy': '#1E3A5F',
                        'hotel-cream': '#F8F4E9',
                        'hotel-brown': '#8B7355',
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-hotel-cream font-sans">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>
    </div>

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
                    <p class="text-gray-400">Bringing spiritual renewal, mental healing, and economic empowerment
                        through Christ's love.</p>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Our Mission</h4>
                    <ul class="space-y-3">
                        <li><button class="text-gray-400 hover:text-white transition pillar-link"
                                data-pillar="spiritual">Spiritual Triumph</button></li>
                        <li><button class="text-gray-400 hover:text-white transition pillar-link"
                                data-pillar="mental">Mental Triumph</button></li>
                        <li><button class="text-gray-400 hover:text-white transition pillar-link"
                                data-pillar="economic">Economic Triumph</button></li>
                        <li><a href="#impact" class="text-gray-400 hover:text-white transition">Our Impact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Get Involved</h4>
                    <ul class="space-y-3">
                        <li><a href="index.html#contact" class="text-gray-400 hover:text-white transition">Volunteer</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Donate</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white transition">Shop
                                Marketplace</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Connect</h4>
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
                <p>&copy; 2026 Triumph Ministry. A 501(c)(3) non-profit organization.</p>
                <p class="mt-2 text-sm">"Now thanks be to God who always leads us in triumph in Christ." — 2
                    Corinthians 2:14</p>
            </div>
        </div>
    </footer>
    @livewireScripts
    <scripts>
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
    </scripts>
</body>

</html>
