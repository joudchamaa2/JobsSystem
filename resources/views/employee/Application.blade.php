<x-components.layout>

<div class="min-h-screen bg-gray-950 text-white px-8 py-10">

    <h2 class="text-3xl font-bold mb-6">All Job Applications</h2>
    <p class="text-gray-400 text-sm mb-8">
        List of all applications submitted for jobs
    </p>

    @if($applications->count())
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse bg-gray-900 rounded-xl">
                <thead>
                    <tr class="text-left border-b border-gray-700">
                        <th class="px-4 py-3 text-white">#</th>
                        <th class="px-4 py-3 text-white">Job Title</th>
                        <th class="px-4 py-3 text-white">Applicant Name</th>
                        <th class="px-4 py-3 text-white">Email</th>
                        <th class="px-4 py-3 text-white">Cover Letter</th>
                        <th class="px-4 py-3 text-white">Additional Info</th>
                        <th class="px-4 py-3 text-white">CV</th>
                        <th class="px-4 py-3 text-white">Applied At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $index => $app)
                        <tr class="border-b border-gray-700 hover:bg-gray-800">
                            <td class="px-4 py-2 text-white">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 text-white">{{ $app->ejob->title ?? 'N/A' }}</td>
                            <td class="px-4 py-2 text-white">{{ $app->user->name ?? $app->full_name }}</td>
                            <td class="px-4 py-2 text-white">{{ $app->user->email ?? $app->email }}</td>
                            <td class="px-4 py-2 text-white">{{ Str::limit($app->cover_letter, 80) }}</td>
                            <td class="px-4 py-2 text-white">{{ Str::limit($app->additional_info, 80) }}</td>
                            <td class="px-4 py-2">
                                @if($app->cv)
                                    <a href="/assets/cvs/{{ $app->cv }}" target="_blank" 
                                       class="px-2 py-1 bg-indigo-600 rounded hover:bg-indigo-700 text-xs text-white">
                                        View CV
                                    </a>
                                @else
                                    <span class="text-white-400 text-xs text-white">No CV</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 text-white">{{ $app->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-400">No applications submitted yet.</p>
    @endif

</div>

</x-components.layout>
