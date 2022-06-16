@extends('app.admin.admin_temp')
@section('title','Add justifications')
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

<!--serch bar-->

<div class="w-2/3 lg:w-1/3 m-auto">
    <form action="" method="GET">
        <label for="search" class="block text-sm font-medium text-gray-700">Search users</label>
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

<!-- end search bar -->

<div class="flex">
    <div class="">
        <h2 class="text-xl mb-5">Add justification :</h2>
    </div>
</div>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Year
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Speciality
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Groupe
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Add justification</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach($students as $student)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                    {{$student->name}} {{$student->sur_name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$student->year}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$student->speciality}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$student->groupe_num}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a onclick="openModal() ; addid(this)" id ={{ $student->id }} href="#" class="text-sky-600 hover:text-sky-900">+ Add</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!--modal start-->

<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
style="background: rgba(0,0,0,.7);">
<div
    class="border border-sky-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Add justification</p>
            <div class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
        </div>
        <!--Body-->
        <div class="my-5">
            <form action="" method="POST">
                @csrf
                <input type="hidden" class="user_id" name="student_id" value="">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                        <span class="px-3 bg-white text-lg font-medium text-gray-900">
                            Validity date
                        </span>
                        </div>
                    </div>
                <div class="flex mb-5">
                    <div class="">
                        <div class="date text-center  mt-5">
                            <label for="start">start date : </label>
                            <input type="date" id="start" name="start_date"
                            value="<?= date('Y-m-d', time()); ?>"
                            min="{{ \Carbon\Carbon::today()->subDays(2)->format('Y-m-d') }}" max="2022-12-31"
                            class="active:border-sky-500">
                        </div>
                    </div>
                    <div class="">
                        <div class="date text-center  mt-5">
                            <label for="end">end date : </label>
                            <input type="date" id="end" name="end_date"
                            value="<?= date('Y-m-d', time()); ?>"
                            min="2022-01-01" max="2022-12-31"
                            class="active:border-sky-500">
                        </div>
                    </div>
                </div>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                        <span class="px-3 bg-white text-lg font-medium text-gray-900">
                            Cause
                        </span>
                        </div>
                    </div>

                <div>
                    <label for="cause" class="block text-sm font-medium text-gray-700">cause</label>
                    <div class="mt-1">
                    <textarea required rows="4" name="cause" value="no cause" id="cause" class="shadow-sm focus:ring-sky-500 focus:border-sky-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>
                </div>

        </div>
        <!--Footer-->
        <div class="flex justify-end pt-2">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-800 sm:text-sm">
                Add justification
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </form>
    </div>
</div>
</div>
<!--modal end-->

@if(count($students) < 1)
    <h1 class="text-2xl text-center text-gray-900 m-20">No Students</h1>
@endif

<script>
    var groups = document.querySelector('#add_just');
    groups.classList.add("bg-gray-900");
    var groups = document.querySelector('#add_just-d');
    groups.classList.add("bg-gray-900");
</script>
@endsection
