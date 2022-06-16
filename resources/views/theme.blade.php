<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <title>theme</title>
</head>
<body class="font-open">
    <a href="#">
    <h1 class="text-center text-4xl text-bold mt-20"> UI components</h1></a>
    <div class= "sm:mx-20 md:mx-40  mt-10 p-5">
        <h1 class="text-center text-4xl text-bold mt-20">Colors</h1></a>
        <h1 class="text-3xl text-sky-700 ">colors</h1>
        <div class="item-dev p-5">
            <div class="grid lg:grid-cols-11 md:grid-cols-6 sm:grid-cols-3 space-x-1">
                <div class="bg-sky-50 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer">50</div>

                <div class="bg-sky-100 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer ">100</div>

                <div class="bg-sky-200 text-lg p-5 text-center hover:scale-125 transition-all hover:cursor-pointer ">200</div>

                <div class="bg-sky-300 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer ">300</div>

                <div class="bg-sky-400 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer ">400</div>

                <div class="bg-sky-500 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer ">500</div>

                <div class="bg-sky-600 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer" >600</div>

                <div class="bg-sky-700 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer ">700</div>

                <div class="bg-sky-800 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer">800</div>

                <div class="bg-sky-900 text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer">900</div>

                <div class="bg-white text-lg p-5  text-center hover:scale-125 transition-all hover:cursor-pointer">white</div>
            </div>
        </div>
        <hr>

        <h1 class="text-center text-4xl text-bold mt-20">Login buttons</h1></a>

        <h1 class="text-3xl text-sky-700 my-4 ">login button 1</h1>
        <div class="item-dev p-5">
            <button class=" bg-sky-500
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
        <hr>

        <h1 class="text-3xl text-sky-700 my-4 ">login button 2</h1>
        <div class="item-dev p-5">
            <button class="text-xbold
                            text-xl
                            md:border
                            md:border-sky-600
                            text-sky-600
                            py-2 px-8
                            md:rounded-r-full md:rounded-l-full
                            md:hover:bg-sky-600
                            md:hover:text-white
                            md:active:bg-sky-800
                            active:text-sky-800
                            md:active:text-white
                            active:bg-white
                            transition-all
                            duration-300
                            md:focus:ring-2
                            md:focus:ring-sky-300
                            focus:bg-white
                            underline
                            md:no-underline
                            ">Login</button>
        </div>
        <hr>

        <h1 class="text-3xl text-sky-700 my-4 ">login button 1</h1>
        <div class="item-dev p-5">
            <button class=" bg-sky-500
                            text-white
                            text-xl
                            py-2 px-8
                            hover:bg-sky-600
                             active:bg-sky-800
                            focus:ring-2
                            focus:ring-sky-300
                            transition-all
                            duration-500
                            hover:duration-200
                            ">Login</button>
        </div>

        <h1 class="text-center text-4xl text-bold mt-20">Animation</h1></a>
        <h1 class="text-3xl text-sky-700 my-4 ">Fade on show</h1>
        <div class=" h-64 bounceInLeft bg-slate-600"></div>
        <hr>
    </div>
</body>
</html>
