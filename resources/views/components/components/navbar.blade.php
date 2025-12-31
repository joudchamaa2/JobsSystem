<nav class="bg-gray-900 shadow-lg">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <!-- Logo -->
    <h1 class="text-2xl font-bold text-indigo-400">
        HireHub
    </h1>

    <!-- Links -->
    <ul class="flex space-x-8 text-gray-300 font-medium">
      <li>
        <a href="{{ route('HomePage')}}"
           class="hover:text-white transition duration-200">
          Home
        </a>
      </li>
      @guest
      <li>
        <a href="{{ route('loginPage')}}"
           class="hover:text-indigo-400 transition duration-200">
          Login
        </a>
      </li>
      <li>
        <a href="{{ route('registerPage')}}"
           class="px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition duration-200">
          Register
        </a>
      </li>
      @endguest
      
      @auth
     
      <li class="text-indigo-400 text-sm">
       Hello {{ Auth::user()->name }}!
      </li>
     
      @if(Auth::user()->role == 'admin')
           <li>
        <a href="{{ route('AdminHome')}}"
           class="px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition duration-200">
          Admin
        </a>
      </li>
      @endif
      <li>
        <a href="{{ route('logout')}}"
           class="px-4 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 transition duration-200">
          Logout
        </a>
      </li>
      @endauth
    </ul>

  </div>
</nav>
