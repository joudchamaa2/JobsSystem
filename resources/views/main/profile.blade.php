<x-components.layout>
    <x-home-sidebar/>

<div class="max-w-6xl mx-auto px-6 py-10">

  <!-- Header -->
  <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-lg flex flex-col md:flex-row items-center gap-8">

    @foreach ($user as $u)

    <!-- Avatar -->
    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-indigo-600">
      <img src="https://via.placeholder.com/300"
           class="w-full h-full object-cover"
           alt="User Avatar">
    </div>

    <!-- User Info -->
    <div class="flex-1 text-center md:text-left">
      <h2 class="text-3xl font-bold text-white">
        {{ $u->name }}
      </h2>

      <p class="text-gray-400 mt-1">
        {{ $u->email }}
      </p>

      <span class="inline-block mt-3 px-4 py-1 rounded-full bg-indigo-600/20 text-indigo-400 text-sm font-semibold">
        {{ $u->role }}
      </span>
    </div>

    <!-- Actions -->
    <div class="flex gap-3">
      <a href="#"
         class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
        Edit Profile
      </a>

      <a href="#"
         class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
        Logout
      </a>
    </div>

    @endforeach
  </div>

  <!-- Stats -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 text-center">
      <h3 class="text-2xl font-bold text-white">{{ $count }}</h3>
      <p class="text-gray-400 text-sm mt-1">Posts</p>
    </div>
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 text-center">
      <h3 class="text-2xl font-bold text-white">112</h3>
      <p class="text-gray-400 text-sm mt-1">Comments</p>
    </div>
    <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 text-center">
      <h3 class="text-2xl font-bold text-white">3</h3>
      <p class="text-gray-400 text-sm mt-1">Role Level</p>
    </div>
  </div>

  <!-- About -->
  <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 mt-10">
    <h3 class="text-xl font-bold text-white mb-4">About</h3>
    <p class="text-gray-400 leading-relaxed">
      Passionate developer looking for new opportunities.
      Experienced with Laravel, Tailwind CSS, and modern web technologies.
    </p>
  </div>

  <!-- Skills -->
  
  <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 mt-10">
    <form action="{{route('AddSkills')}}" method="POST">
    @csrf
    <div class="flex justify-between items-center mb-6">
      <h3 class="text-xl font-bold text-white">Skills</h3>
      <button  class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
        + Add Skill
      </button>
    </div>
    </form>
 
    <div class="flex flex-wrap gap-3" id="result">
     
      <span class="flex items-center gap-2 px-4 py-2 bg-gray-800 border border-gray-700 rounded-full text-gray-300 text-sm"></span>
    </div>

    <div class="mt-6">
      <input name="skil" id="skil"
        type="text" id="input"
        placeholder="Add a new skill..."
        class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
    </div>
  </div>

  <!-- Experience -->
  <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 mt-10">

    <div class="flex justify-between items-center mb-6">
      <h3 class="text-xl font-bold text-white">
        Experience
      </h3>
      
      <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
        + Add Experience
      </button>
    </div>

    <!-- Experience Item -->
    <div class="space-y-6">

      <div class="border-l-4 border-indigo-600 pl-6">
        <h4 class="text-lg font-semibold text-white">
          Senior Web Developer
        </h4>

        <p class="text-sm text-indigo-400">
          ABC Company • 2022 – Present
        </p>

        <p class="text-gray-400 mt-2">
          Worked on building scalable web applications using Laravel,
          Tailwind CSS, and REST APIs.
        </p>
      </div>

      <div class="border-l-4 border-indigo-600 pl-6">
        <h4 class="text-lg font-semibold text-white">
          Junior Developer
        </h4>

        <p class="text-sm text-indigo-400">
          XYZ Startup • 2020 – 2022
        </p>

        <p class="text-gray-400 mt-2">
          Assisted in frontend and backend development,
          maintaining existing systems and fixing bugs.
        </p>
      </div>

    </div>

  </div>

</div>

</x-components.layout>


