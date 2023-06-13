<nav class="fixed w-full z-20 top-0 left-0 border-b border-black" style="background-color: #001427">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/dashboard" class="flex items-center">
      <span class="self-center text-3xl font-semibold tracking-wider whitespace-nowrap text-white">Yu-Gi-Oh!</span>
  </a>
    @auth
    <div class="flex md:order-2">
      <div class="flex items-center relative left-9">
        <span class="text-white text-3xl mx-3">{{ intval(auth()->user()->gems) }}</span>
        <img src="/gem.png" alt="" class="mr-2">
      </div>
      <div class="relative left-16">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 top-2 relative focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log Out</button>
        </form>
      </div>
    </div>
      @endauth
  </div>
</nav>