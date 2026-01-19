<x-components.admin>

  <!-- Page Header -->
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-white">
      Manage Users
    </h1>

    
  </div>

  <!-- Users Table -->
  <div class="bg-gray-900 border border-gray-800 rounded-xl shadow-lg overflow-hidden mb-8">

    <table class="w-full text-left">
      <thead class="bg-gray-800 text-gray-400 text-sm uppercase">
        <tr>
          <th class="px-6 py-4">User</th>
          <th class="px-6 py-4">Email</th>
          <th class="px-6 py-4">Role</th>
          <th class="px-6 py-4 text-right">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-800">
        @foreach ($user as $u)
        <tr class="hover:bg-gray-800 transition">
          <td class="px-6 py-4 flex items-center gap-4">
            <span class="text-white font-medium">{{$u->name}}</span>
          </td>
          <td class="px-6 py-4 text-gray-400">{{ $u->email }}</td>
          <td class="px-6 py-4">
            <span class="px-3 py-1 text-sm rounded-full bg-indigo-500/20 text-indigo-400">
                {{ $u->role }}
            </span>
          </td>
          <td class="px-6 py-4 text-right space-x-3">
            <a href="{{ route('EditUser',$u->id) }}" class="text-yellow-400 hover:underline">Edit</a>
            <form action="{{ route('DeleteUser',$u->id)}}" method="POST" class="inline">
              @csrf
              <button class="text-red-400 hover:underline">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @if(session('success'))
      <p class="text-green-400 mt-2 px-6 py-4">{{ session('success') }}</p>
    @endif

  </div>

  <!-- Deleted Users Section -->
  @if($deleteUser->count() > 0)
    <div class="bg-gray-900 border border-gray-800 rounded-xl shadow-lg p-6">
      <h2 class="text-xl font-bold text-white mb-4">Deleted Users</h2>

      <div class="space-y-4">
        @foreach($deleteUser as $delete)
        <div class="flex justify-between items-center bg-gray-800 p-4 rounded-lg hover:bg-gray-700 transition">
          <div>
            <p class="text-white font-medium">{{ $delete->name }}</p>
            <p class="text-gray-400 text-sm">{{ $delete->email }}</p>
          </div>
          <form action="{{ route('RestoreUser' , $delete->id)}}" method="POST">
            @csrf
            <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition font-semibold">
              Restore
            </button>
          </form>
        </div>
        @endforeach
      </div>
    </div>
  @endif

</x-components.admin>
