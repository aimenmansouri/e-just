<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>E-just</title>
</head>
<body class="font-open ">
    <div class="sec-1">
    <header class="">
        <nav class="flex
                    justify-between
                    md:px-20
                    md:py-4
                    lg:px-40
                    lg:py-8
                    px-4
                    py-4
                    animate-fadeIn">
        <a href="{{ route('landing') }}">
            <div class="logo flex items-center text-sky-600">
                <img class="w-10 h-10" src="https://img.icons8.com/external-soft-fill-juicy-fish/120/external-qr-mobile-phones-soft-fill-soft-fill-juicy-fish.png"/>
                <span class=" text-xl font-bold ml-2 justify-center">E-just</span>
            </div>
        </a>

            <div class=" items-end hidden sm:flex font-bold">
            <ul class="flex">
                <li class="flex items-center mr-6">
                    <a href="#" class="text-sky-600 hover:text-sky-500 hover:-translate-y-1 transition-all text-lg">Home</a>
                </li>
                <li class="flex items-center mr-6">
                    <a href="#" class="text-sky-600 hover:text-sky-500 hover:-translate-y-1 transition-all text-lg">About</a>
                </li>
                <li class="flex items-center mr-6">
                    <a href="#" class="text-sky-600 hover:text-sky-500 hover:-translate-y-1 transition-all text-lg">Contact</a>
                </li>
            </ul>
        </div>

            <div class="login flex items-center">
                <a class=" mr-5 text-sky-600 hover:text-sky-500 transition-all underline" href="{{ route('register') }}">Register</a>
                <a href="{{ route('login') }}">
                <button class="font-bold
                            sm:border
                            sm:border-sky-600
                            text-sky-600
                            py-2 px-8
                            sm:rounded-r-full sm:rounded-l-full
                            sm:hover:bg-sky-600
                            sm:hover:text-white
                            sm:active:bg-sky-800
                            active:text-sky-800
                            sm:active:text-white
                            active:bg-white
                            transition-all
                            duration-300
                            sm:focus:ring-2
                            sm:focus:ring-sky-300
                            focus:bg-white
                            underline
                            sm:no-underline
                            ">Login</button>
                        </a>
            </div>
        </nav>
        <hr class="max-w-7xl mx-auto">
    </header>



    <div class="md:px-20
                    md:py-4
                    lg:px-40
                    lg:py-8
                    px-4
                    py-4
                    delay-1000
                    ">
        <div class="grid lg:grid-cols-2 pt-20">
            <div class="flex justify-center items-center">
                    <div class="discreption lg:w-5/6 xl:w-3/4">
                        <h1>
                            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                                <span class="block text-gray-900">Absence management</span>
                                <span class="block text-sky-600">E-just</span>
                            </span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                An integrated system for recording absences and justifications for absence for a university department.
                            </p>
                            <div class="mt-16 md:mt-8 sm:max-w-lg sm:mx-auto text-center lg:text-left lg:mx-0">
                                <a href="{{ route('login') }}">
                                <button class="bg-sky-500
                                                text-white
                                                text-xl
                                                rounded-r-full rounded-l-full
                                                shadow-md
                                                hover:bg-sky-600
                                                hover:shadow-lg
                                                transition-all
                                                duration-500
                                                hover:duration-200
                                                hover:-translate-y-[2px]
                                                px-8
                                                py-2
                                                active:bg-sky-800
                                                focus:ring-2
                                                focus:ring-sky-300
                                ">Login</button>
                                </a>
                                <a class=" ml-5 text-sky-600 hover:text-sky-500 transition-all underline" href="{{ route('register') }}">Register</a>
                            </div>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('img/landing/side.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
            <div class="justify-center animate-bounce flex mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-sky-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </div>
            </div>
</div>



<div class="wraper bg-gray-600 mb-32">

<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-gray-900">All-in-one platform</h2>
        <p class="mt-4 text-lg text-gray-500">Recording absences and justifications for absence, processing and storing them automatically.</p>
      </div>
      <dl class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Recording absences</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            Recording and organizing absences for easy reference later.
          </dd>
        </div>

        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Recording excuses for absence</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            Automatically record justifications for absence and justification.
          </dd>
        </div>

        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">An electronic copy of the justification</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            Students can extract an electronic copy of the justification (QR code) containing justification information.
          </dd>
        </div>

        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Organized structure of the department</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            The site divides students into groups like reality.
          </dd>
        </div>

        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">All information is attached</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            All information about absence is available such as class date, date ...
          </dd>
        </div>

        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Students can see their status</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            Students can review their absences and also see the available justifications for absence
          </dd>
        </div>

        <div class="relative">
          <dt>

            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Dashboard</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            To display absenteeism statistics and justifications for absence.
          </dd>
        </div>

        <div class="relative">
          <dt>
            <!-- Heroicon name: outline/check -->
            <svg class="absolute h-6 w-6 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <p class="ml-9 text-lg leading-6 font-medium text-gray-900">automatic treatment</p>
          </dt>
          <dd class="mt-2 ml-9 text-base text-gray-500">
            Just enter the absences and justifications for absence on the site, and the absences will be justified automatically.
          </dd>
        </div>

      </dl>
    </div>
  </div>



</div>

<div class="relative">
    <div class="absolute inset-0 flex flex-col" aria-hidden="true">
      <div class="flex-1"></div>
      <div class="flex-1 w-full bg-gray-800"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <img class="relative shadow-lg rounded" src="{{ asset('img/landing/browser.png') }}" alt="App screenshot">
    </div>
  </div>
</div>
<div class="bg-gray-800">
  <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
    <h2 class="text-center text-gray-400 text-sm font-semibold uppercase tracking-wide">An integrated system for recording and handling student absences</h2>

  </div>

  <div class="text-gray-400 text-sm  text-center p-2">
    <div>&copy; 2022. All Rights Reserved.</div>
    <span>aimen mansouri</span>
</div>
</div>
</body>
</html>
