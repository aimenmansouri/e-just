<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>just</title>
</head>
<body class="font-open bg-image bg-opacity-40">
    <div class="sec-1">
    <header class="sticky top-0 z-50">
        <nav class="flex
                    justify-between
                    md:px-20
                    md:py-4
                    lg:px-40
                    lg:py-8
                    px-4
                    py-4
                    delay-1000
                    animate-fadeIn">
        <a href="{{ route('landing2') }}">
            <div class="logo flex items-center text-sky-600">
                <svg class="w-8 h-8 shadow-2xl" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                <span class=" text-xl font-bold ml-2 justify-center">E-Just</span>
            </div>
        </a>

            <div class=" items-end hidden sm:flex font-bold">
            <ul class="flex">
                <li class="flex items-center mr-6">
                    <a href="#" class="text-sky-600 hover:text-sky-500">Home</a>
                </li>
                <li class="flex items-center mr-6">
                    <a href="#" class="text-sky-600 hover:text-sky-500">About</a>
                </li>
                <li class="flex items-center mr-6">
                    <a href="#" class="text-sky-600 hover:text-sky-500">Contact</a>
                </li>
            </ul>
        </div>

            <div class="login flex items-center">
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
            </div>
        </nav>
    </header>

    <div class="relative">
        <div class="md:px-20
        md:py-4
        lg:px-40
        lg:py-8
        px-4
        py-4
        delay-1000
        ">
<div class="grid xl:grid-cols-2 pt-20">
<div class="flex justify-center items-center">
    <div class="discreption">
        <h1>
            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                <span class="block text-gray-900">Data to enrich your</span>
                <span class="block text-sky-600">online business</span>
            </span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet.
            </p>
            <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
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
            </div>
        </div>
    </div>

        <div class="">
            <img src="{{ asset('img/landing/phone_qr.jpg') }}" alt="">
        </div>
    </div>
    <div class="justify-center animate-bounce flex mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-sky-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
    </div>
    </div>
    </div>
</div>


</body>
</html>
