<div class="w-full">
    <nav id="navbar" class="bg-yellow-200 shadow-md">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-14">
                <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-900">
                        <span class="sr-only">Open main menu 635a51</span>
                        <!--
                Icon when menu is closed.
    
    
                Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                Icon when menu is open.
    
                Heroicon name: outline/x
    
                Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="w-full flex items-center justify-center md:justify-start">

                    <div class="flex items-center">
                        <img class="lg:block md:hidden h-8 w-auto md:mr-6 mx-auto"
                            src="{{ asset('img/tit-blanco-400x100.png') }}" alt="Amanee">
                        <img class="hidden lg:hidden md:block sm:hidden h-8 w-auto sm:mr-6"
                            src="{{ asset('img/amanee-mark-white.svg') }}" alt="Amanee">
                    </div>

                    <div class="hidden md:block">
                        <div class="flex space-x-2 lg:space-x-3">

                            @if (Route::current()->getName() == 'inicio')
                                <a
                                    class="bg-gray-900 text-white px-2 py-2 rounded-md text-sm font-medium cursor-pointer">Inicio</a>
                            @else
                                <a href="{{ route('inicio') }}"
                                    class="text-gray-900 hover:bg-yellow-1000 hover:text-white px-2 py-2 rounded-md text-sm font-medium">Inicio</a>
                            @endif

                            @if (Route::current()->getName() == 'estibas')
                                <a
                                    class="bg-gray-900 text-white px-2 py-2 rounded-md text-sm font-medium cursor-pointer">Estibas</a>
                            @else
                                <a href="{{ route('estibas') }}"
                                    class="text-gray-900 hover:bg-gray-700 hover:text-white px-2 py-2 rounded-md text-sm font-medium">Estibas</a>
                            @endif

                            @if (Route::current()->getName() == 'huacales')
                                <a
                                    class="bg-gray-900 text-white px-2 py-2 rounded-md text-sm font-medium cursor-pointer">Huacales</a>
                            @else
                                <a href="{{ route('huacales') }}"
                                    class="text-gray-900 hover:bg-gray-700 hover:text-white px-2 py-2 rounded-md text-sm font-medium">Huacales</a>
                            @endif

                            @if (Route::current()->getName() == 'formaletas')
                                <a
                                    class="bg-gray-900 text-white px-2 py-2 rounded-md text-sm font-medium cursor-pointer">Formaletas</a>
                            @else
                                <a href="{{ route('formaletas') }}"
                                    class="text-gray-900 hover:bg-gray-700 hover:text-white px-2 py-2 rounded-md text-sm font-medium">Formaletas</a>
                            @endif

                            @if (Route::current()->getName() == 'secado')
                                <a
                                    class="bg-gray-900 text-white px-2 py-2 rounded-md text-sm font-medium cursor-pointer">Servicio
                                    de secado</a>
                            @else
                                <a href="{{ route('secado') }}"
                                    class="text-gray-900 hover:bg-gray-700 hover:text-white px-2 py-2 rounded-md text-sm font-medium">Servicio
                                    de secado</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="margen" class="w-full"></div>


    <!-- component nav mobile -->
    <div class="hidden">
        <div class="absolute inset-0 shadow-lg min-h-screen w-full flex flex-col flex-auto flex-shrink-0 antialiased">
            <div class="fixed flex flex-col top-0 left-0 w-64 bg-gray-800 h-full shadow-lg">
                <div class="flex items-center pl-6 h-20 border-b border-gray-700">
                    <img src="{{ asset('img/amanee_mark_text.svg') }}" alt="Amanee"
                        class=" h-10 w-auto flex items-center justify-center mx-3">
                </div>

                <div class="overflow-y-auto overflow-x-hidden flex-grow">
                    <ul class="flex flex-col py-6 space-y-1">
                        <li class="px-5">
                            <div class="flex flex-row items-center h-8">
                                <div class="flex font-semibold text-sm text-gray-300 my-4 font-sans uppercase">Dashboard
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Inbox</span>
                                <span
                                    class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-blue-100 rounded-full">New</span>
                            </a>
                        </li>
                    </ul>

                    <div class="flex items-center pl-6 h-20 border-t border-b border-gray-700">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="rounded-full h-10 w-10 flex items-center justify-center mr-3 border-2 border-blue-500">
                        <div class="ml-1">
                            <p class="ml-1 text-md font-medium tracking-wide truncate text-gray-100 font-sans">JED DYLAN
                                LEE</p>
                            <div class="badge">
                                <span
                                    class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-800 bg-blue-100 rounded-full">Admin</span>
                            </div>
                        </div>
                    </div>

                    <ul>
                        <li class="px-5">
                            <div class="flex flex-row items-center h-8">
                                <div class="flex font-semibold text-sm text-gray-300 my-4 font-sans uppercase">Settings
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </span>
                                <span
                                    class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-red-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4 text-red-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        let navbar = document.getElementById("navbar");
        let margen = document.getElementById("margen");
        let sticky = navbar.offsetTop;

        function myFunction() {
            console.log(window.pageYOffset);
            if (window.pageYOffset >= 52) {
                margen.classList.add("h-14");
                navbar.classList.add("fixed-top");
            } else {
                margen.classList.remove("h-14");
                navbar.classList.remove("fixed-top");
            }
        }

        function dropdown() {
            return {
                open: null,
                start() {
                    this.open = false;
                },
                isOpen() {
                    this.open = !this.open;
                },
                close() {
                    this.open = false;
                }
            }
        }
    </script>
</div>
