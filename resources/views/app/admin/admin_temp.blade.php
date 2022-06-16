<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/adminpage.js') }}" defer></script>
    <!--alpine js-->
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <title>@yield('title','E-just admin')</title>
@livewireStyles
</head>

<body class="font-open">
    <!--temp start-->
    <div x-data ="{isOpen : false}" >
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="fixed inset-0 z-40 md:hidden" :class = "isOpen?  'flex':'hidden' " role="dialog" aria-modal="true">
          <!--
            Off-canvas menu overlay, show/hide based on off-canvas menu state.

            Entering: "transition-opacity ease-linear duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "transition-opacity ease-linear duration-300"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <div class="fixed inset-0 bg-gray-600 bg-opacity-75 " aria-hidden="true">
          </div>

          <!--
            Off-canvas menu, show/hide based on off-canvas menu state.

            Entering: "transition ease-in-out duration-300 transform"
              From: "-translate-x-full"
              To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
              From: "translate-x-0"
              To: "-translate-x-full"
          -->
          <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800" >
            <!--
              Close button, show/hide based on off-canvas menu state.

              Entering: "ease-in-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in-out duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="absolute top-0 right-0 -mr-12 pt-2">
              <button @click.prevent = "isOpen = !isOpen" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
              <div class="flex-shrink-0 flex items-center px-4">
                <a href="{{route('landing')}}">
                    <div class="logo flex items-center text-white">
                        <img class="w-10 h-10" src="https://img.icons8.com/external-soft-fill-juicy-fish/120/external-qr-mobile-phones-soft-fill-soft-fill-juicy-fish.png"/>
                        <span class=" text-xl font-bold ml-2 justify-center">E-Just</span>
                    </div>
                </a>
              </div>
              <nav class="mt-5 px-2 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{ route('dashboard') }}" id="dashboard" class="dashboard text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!--
                        Heroicon name: outline/home

                        Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
                    -->
                    <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                    </a>

                    @if(Auth::user()->confirmed == 1)
                    <a href="{{ route('users') }}" id="users" class="users text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/users -->
                    <svg  class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Users
                    </a>

                    <a href="{{route('groups')}}" id="groups" class="groups text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/folder -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Groups
                    </a>

                    <a href="{{ route('classes') }}" id="classes" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    Classes
                    </a>

                    @endif

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-500"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-800 text-gray-500">
                            Absents
                        </span>
                        </div>
                    </div>


                    <a href="{{ route('add_absents')}}" id="add_absents" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <!-- Heroicon name: outline/calendar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Add absent
                    </a>

                    <a href="{{ route('absents')}}" id="absents" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <!-- Heroicon name: outline/calendar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        Absentes
                    </a>


                    @if(Auth::user()->confirmed == 1 || Auth::user()->confirmed == 2)
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-500"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-800 text-gray-500">
                            Justifications
                        </span>
                        </div>
                    </div>


                    <a href="{{ route('add_just')}}" id="add_just" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <!-- Heroicon name: outline/calendar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Add justifications
                    </a>

                    <a href="{{ route('just') }}" id="just" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <!-- Heroicon name: outline/calendar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        Justifications
                    </a>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-500"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-800 text-gray-500">
                            Account
                        </span>
                        </div>
                    </div>
                    @endif

                    <a href="{{route('logout')}}" class="text-red-400 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <!-- Heroicon name: outline/inbox -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                        </a>
              </nav>
            </div>
            <div class="flex-shrink-0 flex bg-gray-700 p-4">
                <div href="#" class="flex-shrink-0 w-full group block">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-white">
                            {{ Auth::user()->name }} {{ Auth::user()->sur_name }}
                        </p>
                        <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">

                            @if(Auth::user()->confirmed == 1)
                                System admin
                            @elseif(Auth::user()->confirmed == 2)
                                Administrator
                            @elseif(Auth::user()->confirmed == 3)
                                Teacher
                            @endif

                        </p>
                    </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="flex-shrink-0 w-14">
            <!-- Force sidebar to shrink to fit close icon -->
          </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex-1 flex flex-col min-h-0 bg-gray-800">
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
            <a href="{{route('landing')}}">
                <div class="logo flex items-center text-white">
                    <img class="w-10 h-10" src="https://img.icons8.com/external-soft-fill-juicy-fish/120/external-qr-mobile-phones-soft-fill-soft-fill-juicy-fish.png"/>
                    <span class=" text-xl font-bold ml-2 justify-center">E-Just</span>
                </div>
            </a>
            </div>
            <nav class="mt-5 flex-1 px-2 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" // class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" -->
                <a href="{{ route('dashboard') }}" id="dashboard-d" class="dashboard text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!--
                    Heroicon name: outline/home

                    Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
                -->
                <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
                </a>

                @if(Auth::user()->confirmed == 1)
                <a href="{{ route('users') }}" id="users-d" class="users text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/users -->
                <svg  class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                Users
                </a>

                <a href="{{route('groups')}}" id="groups-d" class="groups text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/folder -->
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Groups
                </a>

                <a href="{{ route('classes') }}" id="classes-d" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/calendar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                Classes
                </a>

                @endif

                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-500"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-800 text-gray-500">
                        Absents
                    </span>
                    </div>
                </div>


                <a href="{{ route('add_absents')}}" id="add_absents-d" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Add absent
                </a>

                <a href="{{ route('absents')}}" id="absents-d" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Absentes
                </a>


                @if(Auth::user()->confirmed == 1 || Auth::user()->confirmed == 2)
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-500"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-800 text-gray-500">
                        Justifications
                    </span>
                    </div>
                </div>


                <a href="{{ route('add_just')}}" id="add_just-d" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Add justifications
                </a>

                <a href="{{ route('just')}}" id="just-d" class="classes text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                    Justifications
                </a>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-500"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-800 text-gray-500">
                        Account
                    </span>
                    </div>
                </div>
                @endif

                <a href="{{route('logout')}}" class="text-red-400 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    <!-- Heroicon name: outline/inbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                    </a>
            </nav>
            </div>
            <div class="flex-shrink-0 flex bg-gray-700 p-4">
            <a href="#" class="flex-shrink-0 w-full group block">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                    </svg>
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">
                        {{ Auth::user()->name }} {{ Auth::user()->sur_name }}
                    </p>
                    <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">

                        @if(Auth::user()->confirmed == 1)
                            System admin
                        @elseif(Auth::user()->confirmed == 2)
                            Administrator
                        @elseif(Auth::user()->confirmed == 3)
                            Teacher
                         @endif

                    </p>
                </div>
                </div>
            </a>

            </div>
        </div>
        </div>
        <div class="md:pl-64 flex flex-col flex-1">
        <div class="sticky top-0 z-10 md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
            <button  @click.prevent = "isOpen = !isOpen" type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-500">
            <span class="sr-only">Open sidebar</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            </button>
        </div>
        <main class="flex-1">
            <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
                <h1 class="text-2xl font-semibold underline underline-offset-8 text-sky-900">@yield('title','E-just admin')</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 border-2 rounded-lg border-dashed p-12">
                <!-- Replace with your content -->
                @yield('content')
                <!-- /End replace -->
            </div>
            </div>
        </main>
        </div>
    </div>

    <!--temp end-->
    @livewireScripts
</body>
</html>
