 <!-- Navbar -->
 <nav class="bg-gradient-to-b from-blue-500 to-blue-600 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-semibold text-lg">{{config('app.name')}}</a>
        <ul class="flex space-x-4">
            <li><a href="register" class="text-white hover:text-gray-400">Register</a></li>
            <li><a href="login" class="text-white hover:text-gray-400">Login</a></li>
            <li><x-avatar></x-avatar></li>
        </ul>
    </div>
</nav>