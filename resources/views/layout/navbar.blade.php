<nav class="bg-white shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex-shrink-0 flex items-center">
        <a href="{{ route('posts') }}">
        <h2 class="text-2xl font-bold"><span class=" text-green-500">O</span>cp<span class= "text-green-500">M</span>s</h2>
        </a>
        </div>
      <div class="flex items-center">
        @auth
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="hover:bg-green-700 text-black font-bold py-2 px-4 rounded">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18m-7 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
            </span>
          </button>
        </form>
        @endauth
      </div>
    </div>
  </div>
</nav>
