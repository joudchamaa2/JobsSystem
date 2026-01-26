<x-components.admin>

<div class="min-h-screen bg-gray-950 text-white px-8 py-10">

    <h2 class="text-3xl font-bold mb-8">Job Applications</h2>

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-800 rounded-lg">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-4 py-3 text-left text-white">Job Title</th>
                    <th class="px-4 py-3 text-left text-white">Applicant Name</th>
                    <th class="px-4 py-3 text-left text-white">Email</th>
                    <th class="px-4 py-3 text-left text-white">Cover Letter</th>
                    <th class="px-4 py-3 text-left text-white">CV</th>
                    <th class="px-4 py-3 text-left text-white">Applied At</th>
                </tr>
            </thead>

            <tbody>
                @forelse($application as $app)
                    <tr class="border-t border-gray-800 hover:bg-gray-900 transition">
                        <td class="px-4 py-3 font-semibold text-white">
                            {{ $app->Ejob->title ?? 'Job deleted' }}
                        </td>

                        <td class="px-4 py-3 text-white">
                            {{ $app->full_name }}
                        </td>

                        <td class="px-4 py-3 text-white">
                            {{ $app->email }}
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-400 text-white">
                            {{ Str::limit($app->cover_letter, 60) }}
                        </td>

                        <td class="px-4 py-3">
                            @if($app->cv)
                                <a href="/assets/cvs/{{$app->cv}}"
                                   target="_blank"
                                   class="text-indigo-400 hover:underline">
                                    View CV
                                </a>
                            @else
                                <span class="text-gray-500">No CV</span>
                            @endif
                        </td>

                        <td class="px-4 py-3 text-sm text-gray-500 text-white">
                            {{ $app->created_at->format('d M Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-400 text-white">
                            No applications found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

</x-components.admin>
