<x-components.layout>

<div class="min-h-screen bg-gray-950 text-white px-8 py-10">

    <!-- Back Button -->
    <a href="{{ route('JobsPage') }}" class="inline-block mb-6 px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">
        ← Back to Jobs
    </a>

    <!-- Job Card -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 max-w-4xl mx-auto shadow-lg">
        
        <h2 class="text-3xl font-bold">{{ $job->title }}</h2>
        
        <p class="text-gray-400 mt-2 text-sm">
            {{ $job->company_name }} • {{ $job->location }}
        </p>

        <p class="text-gray-400 mt-4">
            {{ $job->description }}
        </p>

        <div class="flex flex-wrap gap-2 mt-4">
            @foreach(explode(',', $job->skills) as $skill)
                <span class="px-3 py-1 bg-gray-800 rounded-full text-xs">{{ $skill }}</span>
            @endforeach
        </div>

        <div class="flex justify-between items-center mt-6">
            <span class="text-sm text-gray-500">{{ $job->job_type }}</span>

                <a href="{{ route('ApplyJobPage', $job->id) }}">
                    <button class="px-4 py-2 bg-indigo-600 rounded-lg hover:bg-indigo-700 transition">
                        Apply
                    </button>
                </a>
        </div>

    </div>

    @if(session('success'))
        <p class="text-green-400 mt-6 text-center">{{ session('success') }}</p>
    @endif

</div>

</x-components.layout>
