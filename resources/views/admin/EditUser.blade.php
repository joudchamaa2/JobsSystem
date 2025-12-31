<x-components.admin>

  <!-- Page Header -->
  <div class="mb-8">
    <h1 class="text-3xl font-bold text-white">
      Edit User
    </h1>
    <p class="text-gray-400">
      Update user information and role
    </p>
  </div>

  <!-- Edit Form -->
  <div class="max-w-2xl bg-gray-900 border border-gray-800 rounded-2xl shadow-lg p-8">

    <form method="POST" action="#">
      @csrf
      

      <div class="space-y-6">

        <!-- Name -->
        <div>
          <label class="block text-gray-400 mb-2">
            Name
          </label>
          <input type="text" disabled
                 value="{{ old('name',$user->name)}}"
                 class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <!-- Email -->
        <div>
          <label class="block text-gray-400 mb-2">
            Email
          </label>
          <input type="email" disabled
                 value="{{ old('email',$user->email) }}"
                 class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <!-- Role -->
        <div class="max-w-md mx-auto mt-10 p-6 bg-gray-900 rounded-2xl shadow-lg text-center">

  <!-- Current Role -->
  <h3 class="text-gray-400 text-lg mb-6">
    Role: <span class="text-white font-semibold">{{ $user->role }}</span>
  </h3>

  <!-- Buttons -->
  <div class="flex justify-center gap-4">

    <!-- Admin Button -->
    <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-semibold">
      {{ $user->role != 'admin' ? 'Make Admin' : 'Make User' }}
    </button>

    <!-- Employer Button -->
    <button class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-semibold">
      {{ $user->role != 'employer' ? 'Make Employer' : 'Make User' }}
    </button>

  </div>

</div>



        <!-- Actions -->
        <div class="flex justify-end gap-4 pt-6 border-t border-gray-800">

          <a href=""
             class="px-5 py-2 rounded-lg border border-gray-700 text-gray-300 hover:bg-gray-800 transition">
            Cancel
          </a>

          <button type="submit"
                  class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-semibold">
            Save Changes
          </button>

        </div>

      </div>

    </form>

  </div>

</x-components.admin>
