<x-components.admin>

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Page Header -->
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-white">
            📄 Manage Posts
        </h1>

        <a href="{{route('NewPost')}}"
           class="px-5 py-3 bg-indigo-600 text-white rounded-xl font-semibold hover:bg-indigo-700 transition">
            + New Post
        </a>
    </div>

    <!-- Posts Table -->
    <div class="overflow-hidden rounded-2xl border border-gray-800 bg-gray-900 shadow-xl">

        <table class="w-full text-left">
            <thead class="bg-gray-800 text-gray-400 text-sm uppercase">
                <tr>
                    <th class="px-6 py-4">Post</th>
                    <th class="px-6 py-4">Author</th>
                    <th class="px-6 py-4">Created</th>
                    <th class="px-6 py-4 text-center">Actions</th>
                </tr>
            </thead>
            @forelse($post as $p)
            <tbody class="divide-y divide-gray-800">

                <!-- Row -->
                <tr class="hover:bg-gray-800 transition">
                    <td class="px-6 py-5">
                        <h3 class="text-white font-semibold">
                            {{$p->title}}
                        </h3>
                    </td>

                    <td class="px-6 py-5 text-indigo-400 font-medium">
                        {{$p->user->name}}
                    </td>

                    <td class="px-6 py-5 text-gray-400 text-sm">
                        {{$p->created_at}}
                    </td>

                    <td class="px-6 py-5">
                        <div class="flex justify-center gap-3">
                            <form action="{{route('ViewPost',$p->id)}}" method="GET">
                                @csrf
                                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition text-sm">
                                View
                            </button>
                            </form>
                            <form action="{{route('DeletePost',$p->id)}}" method="POST">
                            @csrf
                            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm">
                                Delete
                            </button>
                            </form>

                        </div>
                    </td>
                </tr>

                <!-- Duplicate rows as needed -->
                @if(session('success'))
                    <p class="text-green-400 ml-10">{{ session('success') }}</p>
                @endif
            </tbody>

            @empty
                <h1 class="m-100 text-white">No Post Available</h1>
            @endforelse
        </table>

    </div>

</div>

</x-components.admin>
