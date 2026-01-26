<x-components.layout>

<div class="min-h-screen bg-gray-950 text-white px-8 py-10">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-bold">All Jobs</h2>
            <p class="text-gray-400 text-sm mt-1">
                Browse all job opportunities posted by employers
            </p>
        </div>

        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'employer')
            <a href="{{ route('AddJobPage') }}"
               class="px-5 py-2 bg-indigo-600 rounded-lg hover:bg-indigo-700 transition">
                + Create Job
            </a>
        @endif
    </div>

    <!-- Jobs Grid -->
    <div class="flex flex-wrap justify-center gap-6">
        @forelse($jobs as $job)
            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:border-indigo-600 transition duration-300 w-full sm:w-[48%] lg:w-[45%] max-w-lg">
                <h3 class="text-xl font-semibold">{{ $job->title }}</h3>

                <p class="text-gray-400 text-sm mt-1">
                    {{ $job->company_name }} • {{ $job->location }}
                </p>

                <p class="text-gray-400 mt-3 text-sm">
                    {{ Str::limit($job->description, 150) }}
                </p>

                <div class="flex flex-wrap gap-2 mt-4">
                    @foreach(explode(',', $job->skills) as $skill)
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-xs">{{ $skill }}</span>
                    @endforeach
                </div>

                <div class="flex justify-between items-center mt-6">
                    <span class="text-sm text-gray-500">{{ $job->job_type }}</span>

                    <a href="{{ route('ViewJob', $job->id) }}"
                       class="text-indigo-400 hover:underline text-sm">
                        View →
                    </a>
                </div>
            </div>
        @empty
            <div class="text-center text-gray-400 w-full">
                No jobs posted yet.
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
       
    </div>

</div>

</x-components.layout>
