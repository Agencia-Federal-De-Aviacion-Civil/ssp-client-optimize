<nav class="bg-white border-gray-200 py-1 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="#" class="flex items-center">
            <img src="{{asset('images/logoafac.png')}}" class="h-14 mr-3 sm:h-17" alt="Landwind Logo" />
        </a>
        <div class="flex items-left lg:order-2">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                    <div @click.away="open = false" class="relative z-50" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-50 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <span>Idioma</span>
                      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <div class="relative flex items-start py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex items-center h-5 mt-1">
                                        <input id="hs-dropdown-item-radio-spanish" name="hs-dropdown-item-radio" type="radio" class="border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            aria-describedby="hs-dropdown-item-radio-delete-description" checked>
                                    </div>
                                    <label for="hs-dropdown-item-radio-spanish" class="ml-3.5">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300">Español</span>
                              {{-- <span id="hs-dropdown-item-radio-delete-description" class="block text-sm text-gray-600 dark:text-gray-500">Notify me when this action happens.</span> --}}
                            </label>
                                </div>
                                <div class="relative flex items-start py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex items-center h-5 mt-1">
                                        <input id="hs-dropdown-item-radio-inglish" name="hs-dropdown-item-radio" type="radio" class="border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            aria-describedby="hs-dropdown-item-radio-archive-description">
                                    </div>
                                    <label for="hs-dropdown-item-radio-inglish" class="ml-3.5">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300">Ingles</span>
                              {{-- <span id="hs-dropdown-item-radio-archive-description" class="block text-sm text-gray-600 dark:text-gray-500">Notify me when this action happens.</span> --}}
                            </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</nav>