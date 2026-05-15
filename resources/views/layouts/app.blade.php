<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="description" content="Techsure Solutions - One Stop Solution for All Industrial Needs">
    <meta name="theme-color" content="#3498DB">
    <title>Techsure Solutions | Industrial Products & Services</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FAF8F3',
                        secondary: '#F5F1E8',
                        accent: '#3498DB',
                        dark: '#2C3E50',
                        text: '#333333',
                        textlight: '#666666'
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        cursive: ['"Dancing Script"', 'cursive']
                    },
                    animation: {
                        'slide': 'slide 40s linear infinite',
                        'slide-slow': 'slide 60s linear infinite',
                        'bounce': 'bounce 2s infinite',
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'fade-up': 'fadeUp 0.8s ease-out',
                    },
                    keyframes: {
                        slide: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        bounce: {
                            '0%, 20%, 50%, 80%, 100%': { transform: 'translateY(0)' },
                            '40%': { transform: 'translateY(-10px)' },
                            '60%': { transform: 'translateY(-5px)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    screens: {
                        'xs': '375px',
                        'sm': '640px',
                        'md': '768px',
                        'lg': '1024px',
                        'xl': '1280px',
                        '2xl': '1536px',
                        '3xl': '1920px',
                    }
                }
            }
        }
    </script>
    <style>
    /* Additional CSS to ensure equal spacing */
    .animate-slide-slow {
        display: flex;
        animation: slide 60s linear infinite;
    }
    
    @keyframes slide {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    
    /* Ensure all client boxes have equal dimensions */
    .flex-shrink-0 {
        flex-shrink: 0;
    }
</style>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    @stack('styles')
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
</head>
<body class="font-poppins bg-primary text-text">
<!-- Header -->
<header class="fixed top-0 w-full z-50 shadow-md bg-white">
    <div class="container mx-auto px-6 flex items-center justify-between py-3">
        <!-- Logo with Cursive Company Name -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <img src="{{ asset('logo.png') }}" alt="Techsure Solutions" class="w-20">
            <!-- Company Name in Cursive - Now visible on mobile -->
            <span class="font-cursive text-2xl font-bold text-blue-700 italic tracking-wide">
                Techsure Solutions
            </span>
        </a>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex">
            <ul class="flex gap-10 font-semibold text-[18px] tracking-wide">
                <li><a href="{{ url('/') }}#home" class="hover:text-blue-600 duration-200">Home</a></li>
                <li><a href="{{ url('/') }}#about" class="hover:text-blue-600 duration-200">About</a></li>
                <li><a href="{{ url('/') }}#partners" class="hover:text-blue-600 duration-200">Partners</a></li>
                <li><a href="{{ url('/services') }}" class="hover:text-blue-600 duration-200">Services</a></li>
                <li><a href="{{ url('/products') }}" class="hover:text-blue-600 duration-200">Products</a></li>
                <li><a href="{{ url('/') }}#clients" class="hover:text-blue-600 duration-200">Clients</a></li>
                <li><a href="{{ url('/') }}#contact" class="hover:text-blue-600 duration-200">Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-700 text-3xl" onclick="toggleMenu()">
            ☰
        </button>
    </div>

    <!-- Mobile Dropdown -->
    <div id="mobileMenu" class="hidden bg-white shadow-md md:hidden">
        <ul class="flex flex-col text-lg font-medium text-gray-800">
            <li><a href="{{ url('/') }}#home" class="block px-6 py-3 border-b">Home</a></li>
            <li><a href="{{ url('/') }}#about" class="block px-6 py-3 border-b">About</a></li>
            <li><a href="{{ url('/') }}#partners" class="block px-6 py-3 border-b">Partners</a></li>
            <li><a href="{{ url('/services') }}" class="block px-6 py-3 border-b">Services</a></li>
            <li><a href="{{ url('/products') }}" class="block px-6 py-3 border-b">Products</a></li>
            <li><a href="{{ url('/') }}#clients" class="block px-6 py-3 border-b">Clients</a></li>
            <li><a href="{{ url('/') }}#contact" class="block px-6 py-3">Contact</a></li>
        </ul>
    </div>
</header>

<script>
    function toggleMenu() {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    }
</script>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

<!-- Footer (Same as landing page) -->
    <footer class="bg-dark text-white py-8 sm:py-10 lg:py-12">
        <div class="container mx-auto px-3 sm:px-4 lg:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 mb-6 sm:mb-8">
                <div>
                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold mb-3 sm:mb-4">Techsure Solutions</h3>
                    <p class="text-gray-300 mb-3 sm:mb-4 text-xs sm:text-sm">One Stop Solution for All Industrial Needs</p>
                    <div class="flex space-x-3 sm:space-x-4">
                        <a href="#" class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-accent transition-all duration-300 text-sm sm:text-base">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-8 h-8 sm:w-10 sm:h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-accent transition-all duration-300 text-sm sm:text-base">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://wa.me/919460476041" target="_blank" class="w-8 h-8 sm:w-10 sm:h-10 bg-green-500 rounded-full flex items-center justify-center hover:bg-green-600 transition-all duration-300 text-sm sm:text-base">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-base sm:text-lg font-bold mb-3 sm:mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-xs sm:text-sm">
                        <li><a href="{{ url('/') }}#home" class="text-gray-300 hover:text-accent transition-colors">Home</a></li>
                        <li><a href="{{ url('/') }}#about" class="text-gray-300 hover:text-accent transition-colors">About Us</a></li>
                        <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-accent transition-colors">Services</a></li>
                        <li><a href="{{ url('/products') }}" class="text-gray-300 hover:text-accent transition-colors">Products</a></li>
                        <li><a href="{{ url('/') }}#contact" class="text-gray-300 hover:text-accent transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-base sm:text-lg font-bold mb-3 sm:mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-300 text-xs sm:text-sm">
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-phone text-accent mt-1 flex-shrink-0"></i>
                            <span class="break-words">+91-9460476041</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-phone text-accent mt-1 flex-shrink-0"></i>
                            <span class="break-words">+91-8690406041</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-envelope text-accent mt-1 flex-shrink-0"></i>
                            <span class="break-words">techsure2020@gmail.com</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-map-marker-alt text-accent mt-1 flex-shrink-0"></i>
                            <span>Chittorgarh, Rajasthan</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-base sm:text-lg font-bold mb-3 sm:mb-4">Business Details</h4>
                    <ul class="space-y-2 text-gray-300 text-xs sm:text-sm">
                        <li><strong>Type:</strong> Manufacturing | Services</li>
                        <li><strong>GSTIN:</strong> 08AROPN9499H1ZQ</li>
                        <li><strong>Certification:</strong> MSME Certified</li>
                        <li><strong>PAN:</strong> AROPN9499H</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-6 sm:pt-8 text-center text-gray-400 text-xs sm:text-sm">
                <p>&copy; <span id="current-year"></span> Techsure Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scroll-top" 
            class="fixed bottom-6 right-6 sm:bottom-8 sm:right-8 w-10 h-10 sm:w-12 sm:h-12 bg-accent text-white rounded-full shadow-lg hover:shadow-xl hover:bg-blue-600 transition-all duration-300 hidden z-40 flex items-center justify-center">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919460476041" 
       target="_blank" 
       class="fixed bottom-6 left-6 sm:bottom-8 sm:left-8 w-12 h-12 sm:w-14 sm:h-14 bg-green-500 text-white rounded-full shadow-lg hover:shadow-xl hover:bg-green-600 transition-all duration-300 flex items-center justify-center z-40 animate-pulse">
        <i class="fab fa-whatsapp text-xl sm:text-2xl"></i>
    </a>

    <!-- Custom JavaScript -->
    @stack('scripts')
</body>
</html>
