


<x-components.layout>
  <div class="bg-gray-900 border border-gray-800 p-8 rounded-2xl shadow-xl w-full max-w-md">
    
    <h2 class="text-3xl font-bold text-center text-white mb-6">
      Welcome Back
    </h2>

    <form class="space-y-5">

      <div>
        <label class="block text-gray-400 mb-1">Email</label>
        <input type="email"
          class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
          placeholder="email@example.com">
      </div>

      <div>
        <label class="block text-gray-400 mb-1">Password</label>
        <input type="password"
          class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
          placeholder="********">
      </div>

      <button type="submit"
        class="w-full py-3 bg-indigo-600 rounded-lg text-white font-semibold hover:bg-indigo-700 transition">
        Login
      </button>

    </form>

    <p class="text-center text-gray-400 text-sm mt-6">
      Don’t have an account?
      <a href="register.html" class="text-indigo-400 hover:underline">
        Register
      </a>
    </p>

  </div>
  </x-components.layout>

