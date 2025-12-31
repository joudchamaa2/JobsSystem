<x-components.admin>
  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-8 text-white">
    Dashboard
  </h1>

  <!-- Stats -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
      <p class="text-gray-400 text-sm">Users</p>
      <h2 class="text-3xl font-bold text-white">1,245</h2>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
      <p class="text-gray-400 text-sm">Posts</p>
      <h2 class="text-3xl font-bold text-white">320</h2>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
      <p class="text-gray-400 text-sm">Comments</p>
      <h2 class="text-3xl font-bold text-white">4,876</h2>
    </div>

    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">
      <p class="text-gray-400 text-sm">Jobs</p>
      <h2 class="text-3xl font-bold text-white">98</h2>
    </div>

  </div>

  <!-- Recent Activity -->
  <div class="mt-10 bg-gray-900 border border-gray-800 rounded-xl p-6">
    <h2 class="text-xl font-semibold mb-4 text-white">
      Recent Activity
    </h2>

    <ul class="space-y-3 text-gray-400">
      <li>👤 New user registered</li>
      <li>📝 New job post added</li>
      <li>💬 New comment added</li>
    </ul>
  </div>

</x-components.admin>
