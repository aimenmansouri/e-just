@extends('app.admin.admin_temp')
@section('title','Edit teacher')
@section('content')

@if (session('success'))
<div class="relative">
    <div class=" absolute container mb-5 shadow hover:shadow-none transition-all -translate-y-20" id="alertbox">
        <div class="container bg-green-400 flex items-center text-white text-sm font-bold px-4 py-3 relative"
            role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
            </svg>
            <p>{{ session('success') }}</p>

            <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
                <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
        </div>
    </div>
</div>
@endif

<div class=" bg-gray-100 max-w-lg m-auto p-5 rounded-lg shadow-lg">
    <h1 class="text-2xl mb-5">Edit teacher info :</h1>
    <form action="" method="POST">
        @csrf
        <h2 class="text-lg mb-3">User info :</h2>
        <!--user table fields-->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <div class="mt-1">
            <input value="{{$user_info->name}}" type="text" name="name" id="name" class="hover:cursor-pointer disabled:bg-gray-200 shadow-sm focus:ring-sky-500 focus:border-sky-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Name">
            </div>
        </div>

        <div class="mb-4">
            <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
            <div class="mt-1">
              <input value="{{$user_info->sur_name}}" type="text" name="surname" id="surname" class="hover:cursor-pointer shadow-sm focus:ring-sky-500 focus:border-sky-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Surname">
            </div>
          </div>

        <hr class="my-3">
        <h2 class="text-lg mb-5">Teacher info :</h2>
        <!--teacher table fields-->
        <div class=" h-96 overflow-scroll pr-5 ">
            <legend class="text-lg font-medium text-gray-900">Groups</legend>
                            <hr>
                            @foreach ($groups as $group)
                                <div class="relative flex items-start py-2">
                                    <div class="min-w-0 flex-1 text-sm">
                                        <label for="group-{{$group->id}}" class="font-medium text-gray-700 select-none">year {{ $group->year }} group n {{ $group->groupe }} speciality {{ $group->speciality }}</label>
                                    </div>
                                    <div class="ml-3 flex items-center h-5">
                                        <input
                                        @if(in_array($group->id,$teache)) checked @endif
                                         id="group-{{$group->id}}" name="gr[]" value="{{ $group->id }}" type="checkbox" class="focus:ring-transparent h-4 w-4 text-sky-600 border-gray-300 rounded">
                                    </div>
                                </div>
                            @endforeach
        </div>
        <!--hidden fields-->
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <!--submit button-->
        <div class="flex justify-end mt-5">
            <button type="submit" onclick="openModal()" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-800 sm:text-sm">
                Save
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </form>

    <form action="" method="POST">
        @csrf
        <button type="submit" class=" underline px-3 text-sm text-red-500" value="{{ $user_id }}" name="unconfirme_id">Unconfirme</button>
    </form>
</div>


@endsection
