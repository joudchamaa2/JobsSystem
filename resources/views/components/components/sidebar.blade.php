<aside class="w-64 bg-gray-900 border-r border-gray-800 flex flex-col">

  <!-- Logo -->
  <div class="p-6 text-2xl font-bold text-indigo-400">
    Admin Panel  HireHub
  </div>

  <!-- Menu -->
  <nav class="flex-1 px-4 space-y-2">
    <a href="{{ route ('HomePage')}}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
      🏠 Home
    </a>


    <a href="{{ route('AdminHome') }}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
      📊 Dashboard
    </a>



    <a href="{{ route('ManageUsers') }}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
      👥 Users
    </a>

    <a href="{{route('ManagePost')}}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
      📝 Posts
    </a>

    <a href="{{ route('AddSkillPage')}}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
     ➕ Add Skills
    </a>
    <a href="{{ route('ApplicationPage')}}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
     📄 Applications
    </a>
    <a href="{{ route('AllJobsPage')}}"
       class="block px-4 py-3 rounded-lg hover:bg-gray-800 transition">
     📄 All Jobs
    </a>

  </nav>

  <!-- Logout -->
  <div class="p-4 border-t border-gray-800">
      <a href="{{ route('logout')}}" class="w-full text-left px-4 py-3 rounded-lg text-red-400 hover:bg-gray-800">
        🚪 Logout
      </a>
  </div>

</aside>
