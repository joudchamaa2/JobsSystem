<x-components.layout>
    <x-home-sidebar/>

    <div class="w-full mx-auto px-6 py-10">

        <!-- Header -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-lg flex flex-col md:flex-row items-center gap-8">
            @foreach ($user as $u)
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-indigo-600">
                    <img src="/assets/images/{{ $u->profile_image }}" class="w-full h-full object-cover">
                </div>

                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-3xl font-bold text-white">{{ $u->name }}</h2>
                    <p class="text-gray-400 mt-1">{{ $u->email }}</p>
                    <span class="inline-block mt-3 px-4 py-1 rounded-full bg-indigo-600/20 text-indigo-400 text-sm font-semibold">
                        {{ $u->role }}
                    </span>
                </div>

                <div class="flex gap-3">
                    <a href="{{ route('EditProfilePage') }}" class="px-5 py-2 bg-indigo-600 text-white rounded-lg">Edit Profile</a>
                    <a href="{{ route('logout') }}" class="px-5 py-2 bg-red-600 text-white rounded-lg">Logout</a>
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
                <h3 class="text-2xl font-bold text-white">{{ $skill->count() }}</h3>
                <p class="text-gray-400 text-sm mt-1">Skills</p>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 text-center">
                <h3 class="text-2xl font-bold text-white">{{ $experience->count() }}</h3>
                <p class="text-gray-400 text-sm mt-1">Experience</p>
            </div>
        </div>

        <!-- Skills -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 mt-10">
            <h3 class="text-xl font-bold text-white mb-4">Skills</h3>

            <div class="flex flex-wrap gap-3">
                @foreach(Auth::user()->skills as $skil)
                    <div class="flex items-center gap-2 px-4 py-2 bg-gray-800 border border-gray-700 rounded-full">
                        <span class="text-gray-300 text-sm">{{ $skil->skil }}</span>

                        <form action="{{route('DeleteSkill',$skil->id)}}" method="POST">
                            @csrf
                            
                            <button class="text-red-400 text-sm">✕</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Add Skill -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 mt-6">
            <form action="{{ route('AddSkills') }}" method="POST">
                @csrf

                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-white">Add New Skill</h3>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg">+ Add Skill</button>
                </div>

                <select name="skil" class="w-full bg-gray-800 text-white border border-gray-700 rounded-lg px-4 py-3">
                    @foreach($adminskill as $adskill)
                        <option value="{{ $adskill->skill_name }}">{{ $adskill->skill_name }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- Experience -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 mt-10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold text-white">Experience</h3>
                <a href="{{ route('AddExperiencePage') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg">
                    + Add Experience
                </a>
            </div>

            <ul class="space-y-6">
                @forelse($experience as $exp)
                    <li class="border-l-4 border-indigo-600 pl-6 relative">
                        <h4 class="text-lg font-semibold text-white">{{ $exp->title }}</h4>
                        <p class="text-sm text-indigo-400">
                            {{ $exp->company }} • {{ $exp->start_date }} – {{ $exp->end_date }}
                        </p>
                        <p class="text-gray-400 mt-2">{{ $exp->description }}</p>

                        <form action="{{ route('DeleteExperience', $exp->id) }}" method="POST" class="mt-2">
                            @csrf
                            <button class="text-red-400 text-sm">Delete</button>
                        </form>
                    </li>
                @empty
                    <li class="text-gray-400">No experience added yet.</li>
                @endforelse
            </ul>
        </div>

    </div>
</x-components.layout>
