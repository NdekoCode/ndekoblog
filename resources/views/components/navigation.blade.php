<nav class="px-6 py-4 bg-white shadow">
    <div class="container flex flex-col mx-auto max-w-7xl md:flex-row md:items-center md:justify-between">
        <div class="flex items-center justify-between">
            <div>
                <a href="#" class="text-xl font-bold text-gray-800 md:text-2xl">Ndekoblog</a>
            </div>
            <div>
                <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex-col hidden md:flex md:flex-row md:-mx-4">

            <a href="{{ route('posts.index') }}" class="p-2 my-1 text-gray-800 rounded hover:text-blue-500 md:mx-4 md:my-0">Blog</a>
            <a href="#" class="p-2 my-1 text-gray-800 rounded hover:text-blue-500 md:mx-4 md:my-0">About us</a>@auth
            <a href="{{ route('dashboard') }}" class="p-2 my-1 text-gray-800 rounded hover:text-blue-500 md:mx-4 md:my-0">Dashboard</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="p-2 my-1 text-white transition-all border border-transparent rounded bg-sky-500 hover:bg-transparent hover:text-blue-500 hover:border-sky-500 md:mx-4 md:my-0">Logout</button>
            </form>



            @endauth

            @guest
            <a href="{{ route('register') }}" class="p-2 my-1 text-white transition-all border border-transparent rounded bg-sky-500 hover:bg-transparent hover:text-blue-500 hover:border-sky-500 md:mx-4 md:my-0">Register</a>


            <a href="{{ route('login') }}" class="p-2 my-1 text-white transition-all border border-transparent rounded bg-sky-500 hover:bg-transparent hover:text-blue-500 hover:border-sky-500 md:mx-4 md:my-0">Login</a>

            @endguest


        </div>
    </div>
</nav>
