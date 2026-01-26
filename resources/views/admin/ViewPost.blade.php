<x-components.admin>

<div class="max-w-6xl mx-auto px-6 py-10">

    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{route('ManagePost')}}"
           class="inline-flex items-center gap-2 text-gray-400 hover:text-white transition">
            ← Back to Posts
        </a>
    </div>
    @foreach($post as $p)

    <!-- Post Card -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl shadow-xl overflow-hidden">

        <!-- Images -->
        @foreach($p->ImagePost as $image)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6">
            <img src="/assets/images/{{$image->path}}"
                 class="w-full h-64 object-cover rounded-xl">
        </div>
        @endforeach

        <!-- Content -->
        <div class="px-8 pb-8 space-y-6">

            <!-- Title -->
            <h1 class="text-3xl font-bold text-white">
                {{$p->title}}
            </h1>

            <!-- Meta -->
            <div class="flex flex-wrap gap-6 text-sm text-gray-400">
                <span>{{$p->user->name}}</span>
                <span>📅 {{$p->created_at->format('d M Y')}}</span>
                <span class="px-3 py-1 bg-indigo-600/20 text-indigo-400 rounded-full">
                    Job Post
                </span>
            </div>

            <!-- Description -->
            <p class="text-gray-300 leading-relaxed text-lg">
                {{$p->description}}
            </p>

            <!-- Stats -->
            <div class="flex gap-8 pt-4 border-t border-gray-800 text-gray-400">
                <span>❤️ 25 Likes</span>
                <span>💬 8 Comments</span>
            </div>

            <!-- Admin Actions -->
            <div class="flex gap-4 pt-6">

            <form action="{{route('DeletePost',$p->id)}}" method="POST">
                @csrf
                <button class="px-6 py-3 bg-red-600 text-white rounded-xl font-semibold hover:bg-red-700 transition">
                    Delete Post
                </button>
            </form>
            </div>

        </div>
        
    </div>
    @endforeach

</div>

</x-components.admin>
