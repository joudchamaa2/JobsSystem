<!-- Toggle Button -->
<button onclick="toggleSidebar()"
  class="fixed top-5 left-5 z-50 px-4 py-2 bg-indigo-600 text-white rounded-lg shadow-lg hover:bg-indigo-700 transition">
  ☰
</button>

<div class="flex">

  <!-- Sidebar -->
  <aside id="sidebar"
    class="fixed top-0 left-0 w-64 h-full bg-gray-900 border-r border-gray-800 p-6
           transform -translate-x-full transition-transform duration-300 z-40">

    <!-- User Info -->
    <div class="mb-8 text-center">
      <div class="w-20 h-20 mx-auto rounded-full bg-gray-700 flex items-center justify-center text-white text-2xl font-bold">
        U
      </div>
      <h3 class="mt-3 text-white font-semibold">User Name</h3>
      <p class="text-gray-400 text-sm">user@email.com</p>
    </div>

    <!-- Links -->
    <nav class="space-y-3">
      <a href="#" class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">👤 Profile</a>
      <a href="#" class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">💼 My Posts</a>
      <a href="#" class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">⚙️ Settings</a>
      <a href="{{route('NewPost')}}" class="block px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800">➕ New Post</a>

    </nav>

    <!-- Logout -->
    <form action="{{route('logout')}}" method="GET">
    <button class="w-full mt-10 px-4 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700">
      Logout
    </button>
    </form>

  </aside>

  <!-- Page Content -->
  

</div>
<script>
  function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('-translate-x-full');
  }
</script>

