<x-components.admin>

  <!-- Page Header -->
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-white">
      Manage Users
    </h1>

    <a href="#"
       class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
      + Add User
    </a>
  </div>

  <!-- Users Table -->
  <div class="bg-gray-900 border border-gray-800 rounded-xl shadow-lg overflow-hidden">

    <table class="w-full text-left">
      <thead class="bg-gray-800 text-gray-400 text-sm uppercase">
        <tr>
          <th class="px-6 py-4">User</th>
          <th class="px-6 py-4">Email</th>
          <th class="px-6 py-4">Role</th>
          <th class="px-6 py-4 text-right">Actions</th>
        </tr>
      </thead>
    @foreach ($user as $u )
        
    
      <tbody class="divide-y divide-gray-800">

        <!-- User Row -->
        <tr class="hover:bg-gray-800 transition">
          <td class="px-6 py-4 flex items-center gap-4">
            <span class="text-white font-medium">{{$u->name}}</span>
          </td>

          <td class="px-6 py-4 text-gray-400">
            {{ $u->email }}
          </td>

          <td class="px-6 py-4">
            <span class="px-3 py-1 text-sm rounded-full bg-indigo-500/20 text-indigo-400">
                {{ $u->role }}
            </span>
          </td>

          

          <td class="px-6 py-4 text-right space-x-3">
            <a href="" class="text-indigo-400 hover:underline">View</a>
            <a href="{{ route('EditUser',$u->id) }}" class="text-yellow-400 hover:underline">Edit</a>
            <button class="text-red-400 hover:underline">Delete</button>
          </td>
        </tr>

        

      </tbody>
    @endforeach
    </table>

  </div>

</x-components.admin>
