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
    <title>@yield('title','E-just')</title>
</head>

<body class="font-open">
<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="block">
              <div class="flex items-baseline space-x-2">
                <span class="text-white font-bold p-1">{{ Auth::user()->name }} {{ Auth::user()->sur_name }}</span>
              </div>
            </div>
          </div>
          <div class="block">
            <div class="ml-4 flex items-center md:ml-6">

              <!-- logout -->
              <div class="ml-3 relative">
                <div>
                    <a href="{{route('logout')}}" class="text-red-400 hover:bg-gray-700 hover:text-white group px-2 py-2 text-sm font-medium">logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </nav>

    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">@yield('header')</h1>
      </div>
    </header>


    <main>
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

        <div class="px-4 py-6 sm:px-0">
          <div class="border-4 border-dashed border-gray-200 rounded-lg p-5">
            <h1 class="text-2xl text-center text-gray-900 mb-5">You are not confirmed yet</h1>
            <h1 class="text-lg text-center text-gray-900">Department email : <span class=" text-lime-900">example@email.com</span></h1>
          </div>
        </div>

      </div>
    </main>
  </div>
