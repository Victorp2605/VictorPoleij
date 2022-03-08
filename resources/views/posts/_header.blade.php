<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Welcome to this blog
        @auth
        ,{{ auth()->user()->name }}!
        @endauth
    </h1>


        <div class="relative flex lg:inline-flex items-center mt-6">
            <form method="GET" action="/">
                <input type="text"
                       name="search"
                       placeholder="Search on post or author"
                       class="bg-transparent placeholder-black border-solid border-2
                       border-gray-400 font-semibold text-sm bg-gray-100 rounded-xl px-6 py-2"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>