<x-components.admin>

<div class="min-h-screen bg-gray-950 text-white px-8 py-10">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h2 class="text-3xl font-bold">All Jobs</h2>
            <p class="text-gray-400 text-sm mt-1">
                Manage all jobs posted in the system
            </p>
        </div>

        <a href="{{ route('AddJobPage') }}"
           class="px-5 py-2 bg-indigo-600 rounded-lg hover:bg-indigo-700 transition">
            + Add Job
        </a>
    </div>

    <!-- Jobs Table -->
    <div class="overflow-x-auto">
        <table class="w-full border border-gray-800 rounded-lg">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-4 py-3 text-left text-white">Title</th>
                    <th class="px-4 py-3 text-left text-white">Company</th>
                    <th class="px-4 py-3 text-left text-white">Location</th>
                    <th class="px-4 py-3 text-left text-white">Type</th>
                    <th class="px-4 py-3 text-left text-white">Salary</th>
                    <th class="px-4 py-3 text-left text-white">Posted</th>
                    <th class="px-4 py-3 text-left">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($jobs as $job)
                    <tr class="border-t border-gray-800 hover:bg-gray-900 transition">
                        <td class="px-4 py-3 font-semibold text-white">
                            {{ $job->title }}
                        </td>

                        <td class="px-4 py-3 text-white">
                            {{ $job->company_name }}
                        </td>

                        <td class="px-4 py-3 text-white">
                            {{ $job->location }}
                        </td>

                        <td class="px-4 py-3 text-white">
                            {{ ucfirst($job->job_type) }}
                        </td>

                        <td class="px-4 py-3 text-white">
                            ${{ $job->salary }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-500 text-white">
                            {{ $job->created_at->format('d M Y') }}
                        </td>

                        <td class="px-4 py-3 flex gap-3">
                            <form action="{{ route('DeleteJob', $job->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this job?')">
                                @csrf
                               
                                <button class="text-red-500 hover:underline text-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-6 text-gray-400">
                            No jobs found
                        </td>
                    </tr>
                @endforelse
            </tbody>
            @if(session('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">
                    {{ session('success') }}
                </div>
            @endif
        </table>
    </div>

</div>

</x-components.admin>
