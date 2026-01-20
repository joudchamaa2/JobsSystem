<x-components.admin>

  <!-- Page Header -->
  <div class="mb-8">
    <h1 class="text-3xl font-bold text-white">Edit User</h1>
    <p class="text-gray-400">Update user information and role</p>
  </div>

  <div class="max-w-2xl bg-gray-900 border border-gray-800 rounded-2xl shadow-lg p-8">

    <!-- Role Buttons -->
    <div class="max-w-md mx-auto p-6 bg-gray-900 rounded-2xl shadow-lg text-center">

      <h3 class="text-gray-400 text-lg mb-6">
        Role: <span class="text-white font-semibold">{{ $user->role }}</span>
      </h3>

      <div class="flex justify-center gap-4">

        <!-- Make User -->
        <form action="{{ route('EditUserRoleU', $user->id) }}" method="POST">
          @csrf
          <button type="submit"
                  class="px-6 py-2 rounded-lg
                         {{ $user->role == 'user' ? 'bg-gray-400 cursor-not-allowed' : 'bg-gray-600 hover:bg-gray-700' }}
                         text-white transition font-semibold"
                  {{ $user->role == 'user' ? 'disabled' : '' }}>
            Make User
          </button>
        </form>

        <!-- Make Admin -->
        <form action="{{ route('EditUserRoleA', $user->id) }}" method="POST">
          @csrf
          <button type="submit"
                  class="px-6 py-2 rounded-lg
                         {{ $user->role == 'admin' ? 'bg-gray-400 cursor-not-allowed' : 'bg-indigo-600 hover:bg-indigo-700' }}
                         text-white transition font-semibold"
                  {{ $user->role == 'admin' ? 'disabled' : '' }}>
            Make Admin
          </button>
        </form>

        <!-- Make Employer -->
        <form action="{{ route('EditUserRoleE', $user->id) }}" method="POST">
          @csrf
          <button type="submit"
                  class="px-6 py-2 rounded-lg
                         {{ $user->role == 'employer' ? 'bg-gray-400 cursor-not-allowed' : 'bg-green-600 hover:bg-green-700' }}
                         text-white transition font-semibold"
                  {{ $user->role == 'employer' ? 'disabled' : '' }}>
            Make Employer
          </button>
        </form>

      </div>

      @if(session('success'))
        <p class="text-green-400 mt-2">{{ session('success') }}</p>
      @endif

    </div>

    <!-- Edit Name/Email Form -->
    <form method="POST" action="{{ route('EditUser', $user->id) }}" class="mt-8">
      @csrf

      <div class="space-y-6">

        <!-- Name -->
        <div>
          <label class="block text-gray-400 mb-2">Name</label>
          <input type="text" name="name" disabled
                 value="{{ old('name', $user->name) }}"
                 class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <!-- Email -->
        <div>
          <label class="block text-gray-400 mb-2">Email</label>
          <input type="email" name="email" disabled
                 value="{{ old('email', $user->email) }}"
                 class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <!-- Actions -->
        <div class="flex justify-end gap-4 pt-6 border-t border-gray-800 mt-6">

          <a href="{{ route('ManageUsers') }}"
             class="px-5 py-2 rounded-lg border border-gray-700 text-gray-300 hover:bg-gray-800 transition">
            Cancel
          </a>

          

        </div>

      </div>
    </form>

  </div>

</x-components.admin>
