<x-components.layout>
  <x-home-sidebar/>

  <div class="max-w-4xl mx-auto px-4 py-10 space-y-12">

    <!-- Page Title -->
    <h1 class="text-3xl font-bold text-white">
      Latest Jobs & Posts
    </h1>

    <!-- ================= POSTS ================= -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl shadow-xl overflow-hidden">

      @forelse ($post as $p)

      <!-- Post Header -->
      <div class="flex items-center gap-4 p-6">
        <img src="/assets/images/{{ $p->user->profile_image }}"
             class="w-12 h-12 rounded-full object-cover">
        <div>
          <p class="text-white font-semibold">{{ $p->user->name }}</p>
          <p class="text-sm text-gray-400">{{ $p->created_at->format('d M Y') }}</p>
        </div>
      </div>

      <!-- Post Images -->
      @foreach($p->ImagePost as $i)
        <img src="/assets/images/{{ $i->path }}"
             class="w-full h-80 object-cover">
      @endforeach

      <!-- Post Content -->
      <div class="p-6 space-y-4">

        <h2 class="text-2xl font-bold text-white">
          {{ $p->title }}
        </h2>

        <p class="text-gray-300 leading-relaxed">
          {{ $p->description }}
        </p>

        <!-- Actions -->
        <div class="flex justify-between items-center pt-4 border-t border-gray-800">
          <div class="flex items-center gap-8 text-gray-400">
            <form action="{{route('LikePost',$p->id)}}" method="POST">
              @csrf
            <button class="hover:text-red-500">❤️ Like   <span class="text-red-500">{{ $p->like->count() }}</span></button>
            
            </form>
            <button class="hover:text-indigo-400">💬 Comment</button>
          </div>
          <a href="#" class="text-indigo-400 hover:underline">
            View Details →
          </a>
        </div>

        <!-- Comments -->
        <div class="pt-4 border-t border-gray-800 space-y-4">

          @forelse($p->comment as $c)
            <div class="flex items-start gap-3">
              <img src="/assets/images/{{ $c->user->profile_image }}"
                   class="w-8 h-8 rounded-full object-cover">
              <div>
                <p class="text-gray-300">
                  <span class="font-semibold text-white">
                    {{ $c->user->name }}:
                  </span>
                  {{ $c->comment }}
                </p>
                <p class="text-xs text-gray-500">
                  {{ $c->created_at->format('d M Y') }}
                </p>
              </div>
            </div>
          @empty
            <p class="text-gray-400">No comments</p>
          @endforelse

          <!-- Add Comment -->
          <form action="{{ route('PostComment', $p->id) }}" method="POST" class="flex gap-3">
            @csrf
            <input type="text" name="comment"
                   placeholder="Add a comment..."
                   class="flex-1 px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-full">
            <button class="px-4 py-2 bg-indigo-600 rounded-full hover:bg-indigo-700">
              Post
            </button>
          </form>

        </div>

      </div>

      <hr class="border-gray-800">

      @empty
        <h1 class="text-white p-6">No post found</h1>
      @endforelse

    </div>

    <!-- ================= JOBS SECTION ================= -->
    <div class="space-y-6">

      <h2 class="text-2xl font-bold text-white">
        Latest Jobs
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @forelse($jobs as $job)
          <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 hover:border-indigo-600 transition">

            <h3 class="text-xl font-semibold text-white">
              {{ $job->title }}
            </h3>

            <p class="text-gray-400 text-sm mt-1">
              {{ $job->company_name }} • {{ $job->location }}
            </p>

            <p class="text-gray-300 mt-3 text-sm">
              {{ Str::limit($job->description, 120) }}
            </p>

            <div class="flex justify-between items-center mt-5">
              <span class="text-sm text-gray-500">
                {{ ucfirst($job->job_type) }}
              </span>

              <a href="{{ route('ViewJob', $job->id) }}"
                 class="text-indigo-400 hover:underline text-sm">
                View Job →
              </a>
            </div>

          </div>
        @empty
          <p class="text-gray-400">No jobs available</p>
        @endforelse

      </div>

    </div>

  </div>
</x-components.layout>
