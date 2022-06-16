@extends('app.admin.admin_temp')
@section('title','Absents')
@section('content')

@if (session('success'))
<div class=" relative">
<div class=" absolute container mb-5 shadow hover:shadow-none transition-all -translate-y-20" id="alertbox">
    <div class="container bg-green-400 flex items-center text-white text-sm font-bold px-4 py-3 relative"
        role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
        </svg>
        <p>{{ session()->get('success') }}</p>

        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
            <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
</div></div>

@endif

<!--search bar-->
<div class="w-2/3 lg:w-1/3 m-auto">
    <form action="" method="GET">
        <label for="search" class="block text-sm font-medium text-gray-700">Search users / added by</label>
            <div class="mt-1 flex rounded-md shadow-sm">
            <div class="relative flex items-stretch flex-grow focus-within:z-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                </div>
                <input value="{{ $search }}" type="text" name="search" id="search" required class="focus:ring-sky-500 focus:border-sky-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300" placeholder="Enter name">
            </div>
            <button type="submit" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>

            </button>
            </div>
    </form>
</div>


<div class="flex">
    <div class="">
        <h2 class="text-xl mb-5">Absents list :</h2>
    </div>
</div>
<!--end serch bar-->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Student
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Added by
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Date
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                class
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Groupe
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                state
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            <!-- More people... -->

            @foreach($absents as $absent)
            <tr class="
            @if($absent->by_id == Auth::user()->id && Auth::user()->confirmed == 3)
            bg-rose-100
            @endif
            ">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                  {{$absent->student_name}} {{$absent->student_surname}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$absent->by_name}} {{$absent->by_surname}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                 {{$absent->absent_date}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{$absent->class}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">year :
                    <span class="text-lg text-sky-900">{{$absent->groupe_year}}</span> groupe :
                    <span class=" text-lg">{{$absent->groupe_num}}</span> -
                    <span class="">{{$absent->groupe_spec}}</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    @if($absent->just_id== null)
                    <span class="text-red-600">non justified</span>
                    @else
                    <span class="text-green-600">justified</span>
                    @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form action="" method="POST" onsubmit="return confirm('Do you really want delete absent ?');">
                    @csrf
                  <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                  <input type="hidden" name="absent_id" value="{{ $absent->id }}">
                </form>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@if(count($absents) < 1)
    <h1 class="text-2xl text-center text-gray-900 m-20">No Absents</h1>
@endif

<script>
    var groups = document.querySelector('#absents');
    groups.classList.add("bg-gray-900");
    var groups = document.querySelector('#absents-d');
    groups.classList.add("bg-gray-900");
</script>
@endsection
