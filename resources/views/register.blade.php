<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Register new account</title>
</head>
<body class="font-open bg-gradient-to-r from-gray-900 to-sky-700 ">
    <div class="grid justify-items-center">
        <div class="flex items-center h-screen">
            <div class="wrapper">
                <main class="mt-16 sm:mt-24">
                    <div class="mx-auto max-w-7xl">
                      <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                        <div class="hidden px-4 sm:px-6 sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                          <div>
                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                              <span class="md:block">Absence management</span>
                              <span class="text-sky-400 md:block">E-just</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                              Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt.
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
                                                px-8
                                                py-2
                                                active:bg-sky-800
                                                focus:ring-2
                                                focus:ring-sky-300
                                ">Login</button>
                                </a>
                            </div>

                          </div>
                        </div>
                        <div class="mt-16 sm:mt-24 lg:mt-0 lg:col-span-6 sm:order-last order-first">
                          <div class="bg-white sm:max-w-md sm:w-full sm:mx-auto sm:rounded-lg sm:overflow-hidden">
                            <div class="px-4 py-8 sm:px-10">
                              <div>

                                <div class="mt-1 flex justify-center">
                                    <a href="{{ route('landing') }}">
                                        <div class="logo flex items-center text-sky-600">
                                            <img class="w-10 h-10" src="https://img.icons8.com/external-soft-fill-juicy-fish/120/external-qr-mobile-phones-soft-fill-soft-fill-juicy-fish.png"/>
                                            <span class=" text-xl font-bold ml-2 justify-center">E-Just</span>
                                        </div>
                                    </a>
                                </div>
                              </div>

                              <div class="mt-6 relative">
                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                  <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                  <span class="px-2 bg-white text-gray-500">
                                    Register new account
                                  </span>
                                </div>
                              </div>

                              <div class="mt-6">
                                <form action="#" method="POST" class="space-y-6">
                                    @csrf
                                <div>
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="name" required class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div>
                                    <label for="surname" class="sr-only">Surname</label>
                                    <input type="text" name="surname" id="surname" value="{{ old('surname') }}" placeholder="surname" required class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div>
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" required class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md">
                                    @error('email') <p class="v text-red-500 text-sm mx-3">Email error !</p> @enderror
                                </div>

                                <div>
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" name="password" type="password" placeholder="Password" autocomplete="current-password" required class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md">
                                    @error('password') <p class="v text-red-500 text-sm mx-3">Password must be at least 8 charachters !</p> @enderror
                                </div>

                                <div>
                                    <label for="password" class="sr-only">confirm Password</label>
                                    <input id="confirm_password" name="confirm_password" type="password" placeholder="Confirm Password" autocomplete="current-password" required class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md">
                                    @error('confirm_password') <p class="v text-red-500 text-sm mx-3">Password didnt match !</p> @enderror
                                </div>

                                <div>
                                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                    Register
                                    </button>
                                </div>
                                </form>
                              </div>
                            </div>
                            <div class="px-4 py-6 bg-gray-50 border-t-2 border-gray-200 sm:px-10">
                              <p class="text-xs leading-5 text-gray-500">You need to confirme your account in the department.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </main>
            </div>
            <!--
            <div class="grid sm:grid-cols-2 grid-cols-1 shadow-xl relative sm:mx-0 mx-5">
                <div class=" absolute left-1/2">
                    <img class="w-20 rounded-full -translate-x-10 -translate-y-10 bg-white" src="{{ asset('img/login/user.png') }}" alt="">
                </div>
                !--login form--
                <div class="a items-center">
                    <div class="self-center card grid card w-96 bg-whitepx-6 py-4 h-72 bg-white">
                        a
                    </div>
                </div>
                !--description--
                <div class="b bg-gray-200 grid place-content-center h-72">
                        <h1 class="text-sky-600 text-xl">b</h1>
                </div>
            </div>
        -->
        </div>
    </div>
</body>
</html>
