<x-guest-layout>
    <!-- Header -->
    <div class="min-h-screen flex flex-col">
        <div class="bg-gray-900 text-white">
            <div class="container mx-auto flex items-center justify-between p-5">
                <!-- Logo on the left -->
                <a href="{{route('home')}}" class="text-xl font-bold">
                    <x-application-mark class="block h-9 w-auto" />
                </a>

                <!-- Login and Register buttons on the right -->
                <div class="space-x-4">
                    <a href="{{route('login')}}" class="text-gray-200 hover:text-gray-100 hover:underline hover:animate-pulse hover:duration-100 hover:delay-75">Login</a>
                    <a href="{{route('register')}}" class="text-gray-200 hover:text-gray-100 hover:underline hover:animate-pulse hover:duration-100 hover:delay-75">Register</a>
                </div>
            </div>
        </div>

        <!-- Hero Section -->
        <div class="flex-1 flex items-center bg-gray-100 py-16">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to our Chat Application</h1>
                <p class="text-lg text-gray-600">Connect, chat, and share moments in real-time with our secure and user-friendly chat platform.</p>
                <a href="{{route('register')}}" class="mt-6 inline-block bg-blue-500 text-white font-semibold px-6 py-3 rounded-full hover:bg-blue-600 transition duration-300 ease-in-out">Get Started</a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-8">
            <div class="container mx-auto text-center">
                <p class="text-sm">&copy; 2023 Your Chat Application. All rights reserved.</p>
            </div>
        </footer>
    </div>
</x-guest-layout>
