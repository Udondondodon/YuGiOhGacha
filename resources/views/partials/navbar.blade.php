<nav class="fixed w-full z-20 top-0 left-0 border-b border-black" style="background-color: #001427">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/dashboard" class="flex items-center">
      <span class="text-3xl font-semibold tracking-wider text-white">Yu-Gi-Oh!</span>
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
          <button type="submit" class="text-white top-2 relative font-medium rounded-lg text-sm px-4 py-2 text-center bg-blue-600 hover:bg-blue-700 lg:mx-0 mx-20">Log Out</button>
        </form>
      </div>
    </div>
      @endauth
  </div>
</nav>