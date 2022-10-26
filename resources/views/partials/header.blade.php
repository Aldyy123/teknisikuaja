  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
      <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                  <button type="button"
                      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-toggle="defaultModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-6 space-y-6">
                  <div class="relative">
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                          <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                          </svg>
                          <span class="sr-only">Search icon</span>
                      </div>
                      <input type="text" id="search-navbar"
                          class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Search...">
                  </div>
                  <h1 id="title-keyword" class="text-gray-700 text-xl"></h1>
                  <div id="result-search" class="lg:h-[60vh] h-[50vh] overflow-y-auto">
                      {{-- <div class="my-2">
                          <h2 class="text-xl font-bold">Teknisi : </h2>
                          <div>
                              <button
                                  class="text-left rounded-lg text-gray-100 hover:text-gray-900 font-medium py-2 px-4 my-2 bg-gray-600 hover:bg-gray-300 ">Deserunt
                                  consectetur molestiae eius aliquid et nihil veniam corporis aut et omnis</button>
                          </div>
                      </div> --}}
                  </div>
              </div>
              <!-- Modal footer -->
              <div
                  class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                  <p class="text-gray-400">Search by Algolia</p>

              </div>
          </div>
      </div>
  </div>


  <!-- Header -->
  <header>
      {{-- Navbar --}}
      <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
          <div class="container mx-auto flex flex-wrap justify-between items-center">
              <a href="/" class="flex items-center">
                  <span class="self-center text-xl font-semibold whitespace-nowrap">Teknisiku</span>
              </a>
              <div class="flex md:order-2">
                  <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                      aria-expanded="false"
                      class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Search</span>
                  </button>
                  <div class="hidden relative md:block">
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                          <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                          </svg>
                          <span class="sr-only">Search icon</span>
                      </div>
                      <input type="text"
                          class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Search..." data-modal-toggle="defaultModal">
                      {{-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
                            Toggle modal
                          </button> --}}
                  </div>
                  <button data-collapse-toggle="navbar-search" type="button"
                      class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                      aria-controls="navbar-search" aria-expanded="false">
                      <span class="sr-only">Open menu</span>
                      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </button>
                  {{-- <a href="{{ route('login') }}" id="login" class="ml-4 text-white bg-red-600 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Login</a> --}}
                  @guest
                      @if (Route::has('login'))
                          <a class="ml-4 text-white bg-red-600 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0"
                              href="{{ route('login') }}">{{ __('Login') }}</a>
                      @endif

                      @if (Route::has('register'))
                          <a class="ml-4 text-black bg-transparent border border-red-600 hover:text-white hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0"
                              href="{{ route('register') }}">{{ __('Register') }}</a>
                      @endif
                  @else
                      <a class="ml-4 text-white bg-red-600 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0"
                          href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  @endguest
              </div>
              <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-search">
                  <div class="relative mt-3 md:hidden">
                      <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                          <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                          </svg>
                      </div>
                      <input type="text" id="search-navbar"
                          class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Search...">
                  </div>
                  <ul
                      class="flex flex-col p-4 mt-4 bg-gray-700 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
                      <li>
                          <a href="/"
                              class="block py-2 pr-4 pl-3 text-white hover:text-red-600 bg-transparent rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-white"
                              aria-current="page">Home</a>
                      </li>
                      <li>
                          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                              class="hover:text-red-600 flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-red-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 md:w-auto dark:text-red-600 dark:hover:text-red-700 dark:focus:text-red-600 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Info
                              Kerusakan <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor"
                                  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                              </svg></button>
                          <!-- Dropdown menu -->
                          <div id="dropdownNavbar"
                              class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-white dark:text-red-600">
                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                  aria-labelledby="dropdownLargeButton">
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Software</a>
                                  </li>
                                  <li>
                                      <a href="#"
                                          class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hardware</a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <a href="posts"
                              class="block py-2 pr-4 pl-3 text-white hover:text-red-600 bg-transparent rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-white"
                              aria-current="page">Artikel</a>
                      </li>
                      <li>
                          <a href="{{ route('cari-teknisi') }}"
                              class="block py-2 pr-4 pl-3 text-white hover:text-red-600 bg-transparent rounded md:bg-transparent md:text-red-900 md:p-0 dark:text-white"
                              aria-current="page">Cari Teknisi</a>
                      </li>
                      <li>
                          <a href="{{ route('questions') }}"
                              class="block py-2 pr-4 pl-3 text-white hover:text-red-600 bg-transparent rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-white"
                              aria-current="page">Tanya Teknisi</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      {{-- End Navbar --}}
  </header>

  <script>
      const searchInput = document.querySelector('#search-navbar')
      const resultSearch = document.querySelector('#result-search')
      const titleKeyword = document.querySelector('#title-keyword')

      const renderListResult = (blogs, technicians, questions) => {
          const results = [blogs, technicians, questions]
          resultSearch.innerHTML = ''
          const divWrapper = document.createElement('div');
          divWrapper.classList.add('my-2')

          results.forEach(result => {
              if (result.data.length > 0) {
                  const h2 = document.createElement('h2');
                  h2.classList.add('text-xl', 'font-bold')
                  h2.innerHTML = result.title + ' :'
                  divWrapper.append(h2)


                  result.data.forEach(data => {
                      const divList = document.createElement('div')
                      const button = document.createElement('button');
                      button.classList.add('btn-result-search')
                      button.innerHTML = data?.title || data?.username
                      divList.append(button)
                      divWrapper.append(divList)
                      resultSearch.append(divWrapper)
                  })
              }
          });
      }

      searchInput.addEventListener('input', function(e) {
          titleKeyword.innerHTML = 'Hasil pencarian : ' + e.target.value
          fetch('http://127.0.0.1:8000/api/search?q=' + e.target.value)
              .then(api => api.json())
              .then(result => renderListResult(result.result_blog, result.result_technician, result
                  .result_questions))
              .catch(error => console.log(error));
      })
  </script>
