<x-components.layout>
 <x-home-sidebar/>
<div class="w-700 px-8 py-10">

  <div class="w-full bg-gray-900 border border-gray-800 rounded-2xl shadow-2xl p-10">

    <h1 class="text-4xl font-bold text-white mb-10">
      Create New Post
    </h1>

    <form action="{{ route('NewPostAction') }}" method="POST" class="w-full space-y-8" enctype="multipart/form-data">
    @csrf
      <!-- Title -->
      <input
        type="text"
        name="title"
        placeholder="Post title"
        class="w-full px-6 py-4 text-lg bg-gray-800 text-white border border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:outline-none"
      >

      <!-- Description -->
      <textarea
        name="description"
        rows="8"
        placeholder="Post description"
        class="w-full px-6 py-4 text-lg bg-gray-800 text-white border border-gray-700 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:outline-none"
      ></textarea>

      <!-- Image Upload -->
      <input
        name="path"
        type="file" multiple
        class="w-full px-6 py-4 text-lg text-gray-400 bg-gray-800 border border-gray-700 rounded-xl file:mr-6 file:px-6 file:py-3 file:rounded-lg file:border-0 file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 transition cursor-pointer"
      >

      <!-- Buttons -->
      <div class="flex justify-end gap-6 pt-6">

        <button
          type="button"
          class="px-8 py-3 border border-gray-700 text-gray-300 rounded-xl hover:bg-gray-800">
          <a href="
          @if(Auth::user()->role == 'admin')
            {{route('AdminHome')}}
          @else
            {{route('HomePage')}}
          @endif
          ">Cancel</a>
        </button>

        <button
          type="submit"
          class="px-10 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 font-semibold">
          Publish
        </button>

      </div>

    </form>

  </div>
  @if(session('success'))
        <p class="text-green-400 mt-2">{{ session('success') }}</p>
      @endif


</div>

</x-components.layout>
