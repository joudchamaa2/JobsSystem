<div class="flex">

  <!-- Sidebar -->
  <aside
    class="fixed top-12 left-0 w-64 h-full bg-gray-900 border-r border-gray-800 p-6 z-40">

    <!-- User Info -->
    <div class="mb-8 text-center">
      <img src="/assets/images/{{ Auth::user()->profile_image }}"
           class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">

      <h3 class="mt-3 text-white font-semibold">
        {{ Auth::user()->name }}
      </h3>
    </div>

    <!-- Links -->
    <nav class="space-y-3">
      <a href="{{ route('profilePage', Auth::id()) }}"
         class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">
        👤 Profile
      </a>

      <a href="{{ route('MyPostPage') }}"
         class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">
        💼 My Posts
      </a>

      

      <a href="{{ route('NewPost') }}"
         class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">
        ➕ New Post
      </a>

      <a href="{{ route('JobsPage') }}"
         class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">
        📓 Jobs
      </a><br><br>
      <a href="{{ route('SubscribePreniumPage') }}"
         class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">
        ⭐ Subscribe Prenium
      </a>
    </nav>

    <!-- Logout -->
    <form action="{{ route('logout') }}" method="GET">
      <button
        class="w-full mt-10 px-4 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700">
        Logout
      </button>
    </form>

  </aside>

  <!-- Page Content -->
  <main class="ml-64 w-full min-h-screen bg-gray-950 p-8">
      {{-- Your page content here --}}
  </main>

</div>
