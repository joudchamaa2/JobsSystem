<x-components.layout>

<div class="flex min-h-screen bg-gray-950 text-white">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 border-r border-gray-800 flex flex-col py-6 px-4 -m-6">

    <!-- Logo -->
    <div class="text-indigo-500 text-2xl font-bold mb-10 text-center">
        JobSystem
    </div>

    <!-- Navigation -->
    <nav class="flex flex-col gap-2">

        <a href="#"
           class="flex items-center gap-3 px-4 py-3 rounded-lg bg-gray-800 text-white transition">
            🏠 <span>Dashboard</span>
        </a>

        <a href=""
           class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white transition">
            💼 <span>Jobs</span>
        </a>

        <a href="{{route('profilePage',Auth::id())}}"
           class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white transition">
            👤 <span>Profile</span>
        </a>

        <a href="{{ route('ApplicationsPage') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white transition">
            👨 <span>Application</span>
        </a>

    </nav>

</aside>


    <!-- Main Content -->
    <main class="flex-1 px-8 py-10">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold">Jobs</h2>
                <p class="text-gray-400 text-sm mt-1">
                    Browse and manage job opportunities
                </p>
            </div>

            <a href="{{ route('AddJobPage')}}"
               class="px-5 py-2 bg-indigo-600 rounded-lg hover:bg-indigo-700 transition">
                + Create Job
            </a>
        </div>

        <!-- Jobs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Job Card -->
            @forelse($jobs as $job)
            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:border-indigo-600 transition w-96">
                <h3 class="text-xl font-semibold">{{ $job->title }}</h3>

                <p class="text-gray-400 text-sm mt-1">
                    {{ $job->company_name }} • {{ $job->location }}
                </p>

                <p class="text-gray-400 mt-3 text-sm">
                    {{ $job->description }}
                </p>

                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-xs">{{ $job->skills }}</span>
                   
                </div>

                <div class="flex justify-between items-center mt-6">
                    <span class="text-sm text-gray-500">{{ $job->job_type }}</span>

                    <a href="#" class="text-indigo-400 hover:underline text-sm">
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

    </main>

</div>

</x-components.layout>
