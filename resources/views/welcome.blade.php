<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Programme - Launch Your Career</title>
    <link rel="icon" type="image/png" href="{{ asset('images/okcl logo_HD.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Enhanced keyframes for sophisticated animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(60px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(251, 146, 60, 0.4);
            }

            50% {
                box-shadow: 0 0 40px rgba(251, 146, 60, 0.7);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% center;
            }

            100% {
                background-position: 200% center;
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .fade-in {
            animation: fadeIn 1.5s ease-out forwards;
        }

        .slide-in-left {
            animation: slideInLeft 1s ease-out forwards;
        }

        .slide-in-right {
            animation: slideInRight 1s ease-out forwards;
        }

        .float {
            animation: float 3s ease-in-out infinite;
        }

        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        .shimmer-text {
            background: linear-gradient(90deg,
                    #ffffff,
                    /* white */
                    #ffdd99,
                    /* light orange */
                    #fb923c
                    /* orange */
                );
            background-size: 200% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s linear infinite;
        }

        /* Glass morphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Custom gradient backgrounds - Orange theme */
        .gradient-1 {
            background: linear-gradient(135deg, #fb7316 0%, #facc15 100%);
        }

        .gradient-2 {
            background: linear-gradient(135deg, #f97316 0%, #fbbf24 100%);
        }

        .gradient-3 {
            background: linear-gradient(135deg, #fb923c 0%, #fde047 100%);
        }

        .gradient-4 {
            background: linear-gradient(135deg, #ea580c 0%, #f59e0b 100%);
        }

        /* Hover effects */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card-hover:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 50px rgba(251, 146, 60, 0.2);
        }

        .nav-scrolled {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-scrolled .nav-link,
        .nav-scrolled .logo-text,
        .nav-scrolled .text-xs {
            color: #1f2937 !important;
        }

        .nav-scrolled .nav-link::after {
            background-color: #f97316;
        }

        .nav-scrolled svg {
            color: #f97316;
        }

        .nav-scrolled button {
            color: #1f2937;
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: #FFF7ED;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .logo-text {
            font-weight: 900;
            letter-spacing: -1px;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-sans text-gray-800 bg-gradient-to-br from-orange-50 to-amber-50">
    <!-- Navigation Bar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 glass transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="#home" class="flex items-center space-x-3 group">
                    <!-- Logo Image -->
                    <img src="images/okcl logo_HD.png" alt="OKCL Logo" class="h-12 w-auto">

                    <!-- Text -->
                    <div class="flex items-center space-x-2">
                        <div id="internshipText" class="text-lg font-bold text-white opacity-90">
                            Internship Programme
                        </div>
                    </div>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link text-white font-medium hover:text-yellow-200">Home</a>
                    <a href="#about" class="nav-link text-white font-medium hover:text-yellow-200">About</a>
                    <a href="#program" class="nav-link text-white font-medium hover:text-yellow-200">Programme</a>
                    <a href="https://forms.gle/qA6NEKi8YUeG2Zw46"
                    class="nav-link text-white font-medium hover:text-yellow-200"target="_blank">Apply</a>

                    <a href=""
                       @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal" > Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:from-orange-600 hover:to-red-700 hover:shadow-xl transform hover:scale-105 transition duration-300"> Log in </a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:from-orange-600 hover:to-red-700 hover:shadow-xl transform hover:scale-105 transition duration-300">
                                Register </a>
                        @endif --}}
                    @endauth
                </nav>
            @endif
        </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="#home" class="text-white font-medium hover:text-yellow-200 transition">Home</a>
                    <a href="#about" class="text-white font-medium hover:text-yellow-200 transition">About</a>
                    <a href="#program" class="text-white font-medium hover:text-yellow-200 transition">Programme</a>
                    <a href="https://forms.gle/qA6NEKi8YUeG2Zw46"
                        class="text-white font-medium hover:text-yellow-200 transition">Apply</a>
                    <a href=""
                        class="text-white font-medium hover:text-yellow-200 transition">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Enhanced Banner Section -->
    <section
        class="relative bg-gradient-to-br from-orange-500 via-amber-500 to-yellow-500 text-white min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-10 rounded-full float"
                style="animation-delay: 0s;"></div>
            <div class="absolute top-1/3 right-20 w-24 h-24 bg-yellow-200 opacity-20 rounded-full float"
                style="animation-delay: 1s;"></div>
            <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-orange-200 opacity-15 rounded-full float"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="text-center px-6 z-10 max-w-4xl">

            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight shimmer-text fade-in-up"
                style="animation-delay: 0.3s;">
                Transform Your Future
            </h1>
            <h2 class="text-2xl md:text-3xl font-light mb-8 fade-in-up">
                <span id="typingText" class="font-bold"></span>
            </h2>
            <p class="text-xl md:text-2xl mb-10 opacity-90 fade-in-up" style="animation-delay: 0.9s;">
                Gain real-world experience, elite mentorship, and hands-on training with industry leaders
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up" style="animation-delay: 1.2s;">
              <a href="{{ route('internshipform') }}"target="_blank"class="bg-white text-orange-600 font-bold px-10 py-4 rounded-full shadow-2xl hover:bg-gray-100 transition duration-300 pulse-glow transform hover:scale-105">
                Apply Now
            </a>

                <a href="https://okcl.org/"
                    class="glass text-white font-semibold px-10 py-4 rounded-full hover:bg-white hover:bg-opacity-20 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>
    <!-- Enhanced Welcome Note -->
    <section class="py-20 px-6 md:px-16 bg-gradient-to-r from-orange-50 to-amber-50">
        <div class="max-w-5xl mx-auto text-center">
            <div class="slide-in-left">
                <span
                    class="inline-block bg-gradient-to-r from-orange-500 to-amber-500 text-white px-6 py-3 rounded-full text-sm font-bold mb-8 shadow-lg">
                    ✨ Welcome Future Leaders!
                </span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-500 mb-8 slide-in-right"
                style="animation-delay: 0.3s;">
                Your Journey Starts Here
            </h2>
            <p class="text-xl leading-relaxed text-gray-700 max-w-3xl mx-auto fade-in-up"
                style="animation-delay: 0.6s;">
                We are thrilled to welcome passionate and ambitious students to our <strong>Elite Internship
                    Programme</strong>.
                This is your gateway to enhance your skills, work on groundbreaking projects, and collaborate with
                industry titans.
                Let's build an extraordinary foundation for your career together!
            </p>
        </div>
    </section>

    <!-- Enhanced About Section -->
    <section id="about" class="py-24 px-6 md:px-16 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in-up">
                <h2
                    class="text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-500 mb-4">
                    About the Programme
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-orange-500 to-amber-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="slide-in-left">
                    <div class="relative">
                        <img src="images/program.png" alt="Students collaborating"
                            class="rounded-3xl shadow-2xl w-full h-96 object-cover">
                        <div
                            class="absolute -bottom-6 -right-6 bg-gradient-to-r from-orange-500 to-amber-500 text-white p-6 rounded-2xl shadow-xl">
                            <div class="text-2xl font-bold">100+</div>
                            <div class="text-sm">Success Stories</div>
                        </div>
                    </div>
                </div>

                <div class="slide-in-right" style="animation-delay: 0.3s;">
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">
                        Bridge the Gap Between
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-500">
                            Dreams & Reality
                        </span>
                    </h3>
                    <p class="text-lg mb-8 text-gray-600 leading-relaxed">
                        Our internship programme is designed to bridge the gap between academics and the corporate
                        world.
                        Interns gain unparalleled real-world exposure, elite mentorship, and the opportunity to showcase
                        their creativity while mastering industry-level skills.
                    </p>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div
                            class="flex items-center space-x-3 p-4 bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center text-white font-bold">
                                🚀</div>
                            <div>
                                <div class="font-semibold text-gray-800">Real Projects</div>
                                <div class="text-sm text-gray-600">Live industry challenges</div>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-3 p-4 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                                🎯</div>
                            <div>
                                <div class="font-semibold text-gray-800">Expert Mentors</div>
                                <div class="text-sm text-gray-600">Industry professionals</div>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-3 p-4 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-amber-500 to-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                📈</div>
                            <div>
                                <div class="font-semibold text-gray-800">Skill Building</div>
                                <div class="text-sm text-gray-600">Workshops & training</div>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-3 p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold">
                                🏆</div>
                            <div>
                                <div class="font-semibold text-gray-800">Recognition</div>
                                <div class="text-sm text-gray-600">Certificates & rewards</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Enhanced Benefits Section -->
    <section class="py-24 px-6 md:px-16 bg-gradient-to-br from-orange-50 to-amber-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 fade-in-up">
                <h2
                    class="text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-500 mb-4">
                    Why Choose Our Programme?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Discover what makes our internship experience truly transformational
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="card-hover bg-white rounded-3xl shadow-xl p-8 text-center fade-in-up">
                    <div
                        class="w-20 h-20 gradient-1 rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-6">
                        🔥
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Real-World Impact</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Work on live projects that make you industry-ready with practical knowledge and real impact on
                        businesses.
                    </p>
                    <div
                        class="mt-6 inline-block bg-gradient-to-r from-orange-100 to-amber-100 px-4 py-2 rounded-full text-orange-600 font-medium text-sm">
                        Practical Experience
                    </div>
                </div>

                <div class="card-hover bg-white rounded-3xl shadow-xl p-8 text-center fade-in-up"
                    style="animation-delay: 0.2s;">
                    <div
                        class="w-20 h-20 gradient-2 rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-6">
                        👩‍🏫
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Elite Mentorship</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Learn directly from industry leaders who provide personalized guidance and support for your
                        professional growth.
                    </p>
                    <div
                        class="mt-6 inline-block bg-gradient-to-r from-amber-100 to-yellow-100 px-4 py-2 rounded-full text-amber-600 font-medium text-sm">
                        Expert Guidance
                    </div>
                </div>

                <div class="card-hover bg-white rounded-3xl shadow-xl p-8 text-center fade-in-up"
                    style="animation-delay: 0.4s;">
                    <div
                        class="w-20 h-20 gradient-3 rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-6">
                        🎓
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Career Acceleration</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Get recognized with certificates, recommendations, and a network that will accelerate your
                        career journey.
                    </p>
                    <div
                        class="mt-6 inline-block bg-gradient-to-r from-yellow-100 to-orange-100 px-4 py-2 rounded-full text-yellow-600 font-medium text-sm">
                        Professional Growth
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Enhanced Apply Section -->
    <section id="apply"
        class="py-24 px-6 md:px-16 bg-gradient-to-r from-orange-500 via-amber-500 to-yellow-500 text-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Career?</h2>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Join hundreds of successful interns who have kickstarted their careers with us. The application
                    process is simple and fast.
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left">
                    <h3 class="text-2xl font-bold mb-8">Application Steps</h3>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-white text-orange-600 rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                1</div>
                            <div>
                                <h4 class="font-semibold text-lg mb-2">Complete Application Form</h4>
                                <p class="opacity-90">Fill out our comprehensive online application with your details
                                    and preferences.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-white text-orange-600 rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                2</div>
                            <div>
                                <h4 class="font-semibold text-lg mb-2">Submit Documents</h4>
                                <p class="opacity-90">Upload your resume, cover letter, and portfolio showcasing your
                                    best work.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-white text-orange-600 rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                3</div>
                            <div>
                                <h4 class="font-semibold text-lg mb-2">Begin Your Journey</h4>
                                <p class="opacity-90">Get selected and start your transformational internship
                                    experience with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-in-right" style="animation-delay: 0.3s;">
                    <div class="bg-white bg-opacity-10 glass rounded-3xl p-8 text-center">
                        <div class="mb-8">
                            <div class="text-6xl mb-4">🚀</div>
                            <h3 class="text-2xl font-bold mb-2">Launch Your Career Today</h3>
                            <p class="opacity-90">Join our next cohort starting soon!</p>
                        </div>

                        <div class="mb-8 space-y-4">
                            <div class="flex justify-between items-center">
                                <span>Application Deadline:</span>
                                <span class="font-bold">26th November, 2025</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Programme Duration:</span>
                                <span class="font-bold">6 Months</span>
                            </div>
                            {{-- <div class="flex justify-between items-center">
                                <span>Available Positions:</span>
                                <span class="font-bold">50+ Spots</span>
                            </div> --}}
                        </div>
                        <a href="https://forms.gle/qA6NEKi8YUeG2Zw46"
                            class="inline-block bg-white text-orange-600 font-bold px-12 py-4 rounded-full shadow-2xl hover:bg-gray-100 transition duration-300 transform hover:scale-105 pulse-glow">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Enhanced Footer -->
    <footer class="bg-gray-900 text-white py-16 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-12">
                <div class="fade-in-up">
                    <h3
                        class="font-bold text-2xl mb-4 text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-amber-400">
                        Internship Programme
                    </h3>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Empowering the next generation with skills, mentorship, and unlimited opportunities for growth.
                    </p>
                    <div class="flex space-x-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 cursor-pointer">
                            📧</div>
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-amber-500 to-yellow-500 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 cursor-pointer">
                            📱</div>
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-orange-600 to-red-500 rounded-full flex items-center justify-center hover:scale-110 transition duration-300 cursor-pointer">
                            💼</div>
                    </div>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.2s;">
                    <h3 class="font-bold text-lg mb-6">Quick Links</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-orange-400 transition duration-300">Home</a></li>
                        <li><a href="#about" class="hover:text-orange-400 transition duration-300">About
                                Programme</a></li>
                        <li><a href="#apply" class="hover:text-orange-400 transition duration-300">Apply Now</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition duration-300">Success
                                Stories</a></li>
                    </ul>
                </div>
                <div class="fade-in-up" style="animation-delay: 0.4s;">
                    <h3 class="font-bold text-lg mb-6">Programmes</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-orange-400 transition duration-300">Tech
                                Internship</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition duration-300">Marketing
                                Internship</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition duration-300">Design
                                Internship</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition duration-300">Business
                                Internship</a></li>
                    </ul>
                </div>

                <div class="fade-in-up" style="animation-delay: 0.6s;">
                    <h3 class="font-bold text-lg mb-6">Contact Us</h3>
                    <div class="space-y-4 text-gray-400">
                        <div class="flex items-center space-x-3">
                            <div>
                                <i class="fa-solid fa-envelope text-2xl text-orange-500"></i>
                            </div>
                            <span>help@okcl.org</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div>
                                <i class="fa-solid fa-phone text-2xl text-orange-500"></i>
                            </div>
                            <span>0674 - 3520021/ 3520022</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div>
                                <i class="fa-solid fa-location-dot text-2xl text-orange-500"></i>
                            </div>
                            <span> 3rd Floor, Plot No. 108/3607, Opp. Pal Heights, Bhubaneswar, Khordha, Odisha,
                                751013</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400 fade-in">
                    © 2025 Internship Programme. All rights reserved. |
                </p>
            </div>
        </div>
    </footer>
    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('nav-scrolled');
                navbar.classList.remove('glass');
            } else {
                navbar.classList.remove('nav-scrolled');
                navbar.classList.add('glass');
            }
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
    <script>
        const internshipText = document.getElementById('internshipText');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { // Change 50 to any scroll value you prefer
                internshipText.classList.remove('text-white');
                internshipText.classList.add('text-black');
            } else {
                internshipText.classList.remove('text-black');
                internshipText.classList.add('text-white');
            }
        });
    </script>
    <script>
        const words = ["Build..", "Innovate..", "Learn.."];
        let i = 0;
        let j = 0;
        let currentWord = "";
        let isDeleting = false;
        const typingSpeed = 150;
        const pauseBetweenWords = 1000;
        const typingElement = document.getElementById("typingText");

        function type() {
            if (!isDeleting && j <= words[i].length) {
                // Typing
                currentWord = words[i].substring(0, j++);
                typingElement.textContent = currentWord;
            } else if (isDeleting && j >= 0) {
                // Deleting
                currentWord = words[i].substring(0, j--);
                typingElement.textContent = currentWord;
            }

            if (j === words[i].length + 1) {
                // Pause at the end of the word
                isDeleting = true;
                setTimeout(type, pauseBetweenWords);
                return;
            } else if (isDeleting && j === 0) {
                // Move to next word
                isDeleting = false;
                i = (i + 1) % words.length;
            }

            setTimeout(type, isDeleting ? typingSpeed / 2 : typingSpeed);
        }

        type();
    </script>

</body>

</html>
