<x-components.layout>
    <x-home-sidebar/>

    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Page Header -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-lg flex flex-col md:flex-row items-center gap-8 mb-10">
            <h2 class="text-3xl font-bold text-white flex-1">Edit Profile</h2>
            <a href="{{ route('profilePage',Auth::id()) }}" class="px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition">
                ← Back to Profile
            </a>
        </div>

        <!-- Edit Profile Form -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-lg max-w-3xl mx-auto">
            <form action="{{ route('UpdateProfile', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Avatar Upload -->
                <div class="flex flex-col items-center mb-6">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-indigo-600 mb-4">
                        
                        <img src="{{ Auth::user()->profile_image ?? 'https://via.placeholder.com/150' }}" 
                             class="w-full h-full object-cover" 
                             alt="User Avatar">
                    </div>
                    <input type="file" name="profile_image" id="profile_image" 
                           class="text-sm text-white bg-gray-800 rounded-lg px-4 py-2 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 font-semibold mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                           class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                           class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>


                <!-- About -->
                <div class="mb-4">
                    <label for="about" class="block text-gray-300 font-semibold mb-2">About</label>
                    <textarea name="about" id="about" rows="4"
                              class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                              placeholder="Tell something about yourself"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="mt-6 flex justify-end">
                    <button type="submit" 
                            class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Save Changes
                    </button>
                </div>

                <!-- Success/Error Messages -->
                @if(session('success'))
                    <p class="text-green-400 mt-4">{{ session('success') }}</p>
                @endif
                @if(session('error'))
                    <p class="text-red-400 mt-4">{{ session('error') }}</p>
                @endif

            </form>
        </div>

    </div>
</x-components.layout>
