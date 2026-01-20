<x-components.layout>
  <x-home-sidebar/>

<div class="max-w-4xl mx-auto px-4 py-10 space-y-10">

  <!-- Page Title -->
  <h1 class="text-3xl font-bold text-white">
    Latest Jobs & Posts
  </h1>

  <!-- BIG POST -->
  <div class="bg-gray-900 border border-gray-800 rounded-2xl shadow-xl overflow-hidden">
    @forelse ($post as $p)
    <!-- Post Header -->
    <div class="flex items-center gap-4 p-6">
      <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold">
        JD
      </div>
      <div>
        <p class="text-white font-semibold">{{$p->user->name}}</p>
        <p class="text-sm text-gray-400">{{$p->created_at}}</p>
      </div>
    </div>

    <!-- Image -->
    @foreach($p->ImagePost as $i)
    <img src="/assets/images/{{$i->path}}"
         alt="Post image"
         class="w-full h-80 object-cover">
    @endforeach

    <!-- Content -->
    <div class="p-6 space-y-4">

      <!-- Title -->
      <h2 class="text-2xl font-bold text-white">
        {{$p->title}}
      </h2>

      <!-- Description -->
      <p class="text-gray-300 leading-relaxed">
        {{$p->description}}
      </p>

      <!-- Actions -->
      <div class="flex justify-between items-center pt-4 border-t border-gray-800">
        <div class="flex items-center gap-8 text-gray-400">
          <button class="flex items-center gap-2 hover:text-red-500 transition">❤️ Like</button>
          <button class="flex items-center gap-2 hover:text-indigo-400 transition">💬 Comment</button>
        </div>
        <a href="#" class="text-indigo-400 hover:underline">View Details →</a>
      </div>

      <!-- Comment Section -->
      <div class="pt-4 border-t border-gray-800 space-y-4">

        <!-- Existing Comments -->
        
        <div class="space-y-3">
          @forelse($p->comment as $c)
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
              AB
            </div>
            <div>
              <p class="text-gray-300"><span class="font-semibold text-white">{{$c->user->name}} : </span>{{$c->comment}}</p>
              <p class="text-xs text-gray-500">{{$c->created_at}}</p>
            </div>
          </div>
          @empty 
          <p>No Post</p>
          @endforelse
        </div>

        <!-- Add Comment -->
        <form class="flex gap-3" action="{{route('PostComment',$p->id)}}" method="POST">
        @csrf
          <input type="text" placeholder="Add a comment..." name="comment"
                 class="flex-1 px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-full focus:ring-2 focus:ring-indigo-500 focus:outline-none">
          <button type="submit"
                  class="px-4 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
            Post
          </button>
        </form>

      </div>
      <hr>

    </div>
    @empty
    <h1>No post found</h1>
        
    @endforelse
    
  </div>
  

</div>

</x-components.layout>
