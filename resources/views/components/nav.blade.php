<nav class="bg-gray-800 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-700 shadow-lg">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <!-- Logo y nombre de la aplicación -->
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('images/casa.png') }}" class="h-16" alt="Logo de la aplicación">
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">INGLES.sancarloscomercio.com</span>
      </a>

      <!-- Botón de "Mi cuenta" y menú móvil -->
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="{{ route('login') }}">
              <button type="button" class="text-white bg-teal-600 hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-4 py-2 text-center transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                  Mi cuenta
              </button>
          </a>

          <!-- Botón para el menú móvil -->
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 transition duration-300 ease-in-out" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Abrir menú principal</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
      </div>

      <!-- Menú de navegación -->
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-700 rounded-lg bg-gray-800 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
              <li>
                  <a href="{{ route('welcome') }}" class="block py-2 px-3 text-white hover:bg-gray-700 rounded-sm md:hover:bg-transparent md:hover:text-teal-400 md:p-0 transition duration-300 ease-in-out">
                      Inicio
                  </a>
              </li>
              <li>
                  <a href="{{ route('welcome') }}" class="block py-2 px-3 text-white hover:bg-gray-700 rounded-sm md:hover:bg-transparent md:hover:text-teal-400 md:p-0 transition duration-300 ease-in-out">
                      imagenes
                  </a>
              </li>
                 <li>
                  <a href="{{ route('welcome') }}" class="block py-2 px-3 text-white hover:bg-gray-700 rounded-sm md:hover:bg-transparent md:hover:text-teal-400 md:p-0 transition duration-300 ease-in-out">
                      videos
                  </a>
              </li>
           
              <li>
                  <a href="{{ route('nosotros') }}" class="block py-2 px-3 text-white hover:bg-gray-700 rounded-sm md:hover:bg-transparent md:hover:text-teal-400 md:p-0 transition duration-300 ease-in-out">
                      Nosotros
                  </a>
              </li>
              <li>
                  <a href="{{ route('contacto') }}" class="block py-2 px-3 text-white hover:bg-gray-700 rounded-sm md:hover:bg-transparent md:hover:text-teal-400 md:p-0 transition duration-300 ease-in-out">
                      Contacto
                  </a>
              </li>
              <li>
                  <a href="{{ route('register') }}" class="block py-2 px-3 text-white hover:bg-gray-700 rounded-sm md:hover:bg-transparent md:hover:text-teal-400 md:p-0 transition duration-300 ease-in-out">
                      Registrar
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>