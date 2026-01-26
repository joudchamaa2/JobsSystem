<x-components.layout>
    <x-home-sidebar/>

    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-white">My Posts</h2>

            <a href="{{ route('NewPost') }}"
               class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                + Create Post
            </a>
        </div>

        <!-- Posts List -->
        @if($post->count())
            <div class="space-y-6">
                @foreach($post as $p)
                    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 shadow">

                        {{-- Post Image --}}
                        
                            <div class="mb-4">
                                @foreach ($p->ImagePost as $image)
                                <img
                                    src="/assets/images/{{$image->path }}"
                                    alt="Post Image"
                                    class="w-full h-64 object-cover rounded-xl border border-gray-700">
                                @endforeach
                                </div>
                        

                        <h3 class="text-xl font-semibold text-white">
                            {{ $p->title }}
                        </h3>

                        <p class="text-gray-400 mt-2">
                            {{ $p->description }}
                        </p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="text-sm text-gray-500">
                                {{ $p->created_at->format('d M Y') }}
                            </span>

                            <form action="{{ route('DeletePost', $p->id) }}" method="POST">
                                @csrf
                                <button
                                    onclick="return confirm('Delete this post?')"
                                    class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-gray-900 border border-gray-800 rounded-xl p-8 text-center text-gray-400">
                You haven’t created any posts yet.
            </div>
        @endif
        @if(session('success'))
            <p class="text-green-400 ml-10">{{ session('success') }}</p>
        @endif
    </div>
</x-components.layout>
