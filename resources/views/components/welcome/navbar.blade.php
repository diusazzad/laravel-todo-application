<nav class="flex items-center justify-between p-6 bg-blue-500">
    <div class="flex items-center">
        <!-- ToDo App Logo SVG -->
        <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 5l-1 1m0 0l-1-1m1 1v14m-1-1l1 1m0 0l1-1m-1 1H5m1-1l-1-1m0 0l1 1m-1-1V7m1 1l-1-1m0 0l-1 1m1-1h14m-1 1l1 1m0 0l-1-1m1 1v6m-1-1l1 1m0 0l1-1m-1 1H7" />
        </svg>

        <!-- ToDo App Text -->
        <a href="#" class="text-white text-lg font-semibold ml-2">ToDo App</a>
    </div>
    <div class="hidden md:flex items-center space-x-4">
        @if (Route::has('login'))
        <div class="">
            @auth
            <a href="{{ url('/user/dashboard') }}" class="nav-link">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="nav-link">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-link">Register</a>
            @endif
            @endauth
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Features</a>
            <a href="#" class="nav-link">Contact</a>
        </div>
        @endif
    </div>

    <div class="md:hidden">
        <button id="menuButton" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-6 w-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</nav>

<div id="menu" class="hidden md:hidden">
    @if (Route::has('login'))
    <a href="{{ route('login') }}" class="block px-6 py-2 text-sm text-blue-500">Login</a>
    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="block px-6 py-2 text-sm text-blue-500">Register</a>
    @endif
    @endif
    <a href="#" class="block px-6 py-2 text-sm text-blue-500">Home</a>
    <a href="#" class="block px-6 py-2 text-sm text-blue-500">Features</a>
    <a href="#" class="block px-6 py-2 text-sm text-blue-500">Contact</a>
</div>



<script>
    document.getElementById('menuButton').addEventListener('click', function() {
  var menu = document.getElementById('menu');
  if (menu.style.display === 'block') {
    menu.style.display = 'none';
  } else {
    menu.style.display = 'block';
  }
});

</script>


<style>
    .nav-link {
        color: #fff;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #ccc;
    }
</style>
