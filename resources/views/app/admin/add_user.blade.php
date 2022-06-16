@extends('app.admin.admin_temp')
@section('title','Confirm users')
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



<div class=" relative">

@if (session('user_delete'))
<div class=" absolute container mb-5 shadow hover:shadow-none transition-all -translate-y-20" id="alertbox">
    <div class="container bg-red-400 flex items-center text-white text-sm font-bold px-4 py-3 relative"
        role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
        </svg>
        <p>User <span class=" underline font-bold">{{ session('user_delete') }}</span> has been deleted successfully</p>

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
@endif


@if (session('confirm'))
<div class=" absolute container mb-5 shadow hover:shadow-none transition-all -translate-y-20" id="alertbox">
    <div class="container bg-green-400 flex items-center text-white text-sm font-bold px-4 py-3 relative"
        role="alert">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
        </svg>
        <p>User confirmed as <span class="underline font-bold">{{ session('confirm') }}</span> successfully</p>

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

<!--user tabel start-->
<div class="flex">
    <div class="">
        <h2 class="text-xl mb-5">Users list :</h2>
    </div>
</div>




<div class="flex flex-col relative">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Status
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Role
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Delete</span>
                  </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

              @foreach($users as $user)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                          </svg>
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ $user->name }} {{ $user->sur_name }}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{ $user->email }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap ">
                    @if($user->confirmed == 0)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        Not confirmed
                        </span>
                    @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Confirmed
                        </span>
                  @endif

                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    @if($user->confirmed == 0)
                            non confirmed
                    @elseif($user->confirmed == 1)
                            System Admin
                    @elseif($user->confirmed == 2)
                            Admin
                    @elseif($user->confirmed == 3)
                            Techer
                    @else
                            Student
                    @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium content-center">
                            @if($user->confirmed == 0)
                                <a href="#" onclick="openModal() ; addid(this)" id ={{ $user->id }} class="text-indigo-600 hover:text-indigo-900">
                                    Confirme
                                </a>
                            @else
                                <a href="
                                @if($user->confirmed == 1 || $user->confirmed == 2)
                                {{ route('edit_admin',['id'=>$user->id]) }}
                                @elseif($user->confirmed == 3)
                                {{ route('edit_teacher',['id'=>$user->id]) }}
                                @else
                                {{ route('edit_student',['id'=>$user->id]) }}
                                @endif
                                "  target=”_blank” class="text-indigo-600 hover:text-indigo-900">
                                    Edit
                                </a>
                            @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <form action="{{ route('delete-user') }}" method="POST" onsubmit="return confirm('Do you really want delete justification ?');">
                        @csrf
                        <input name="userId" type="hidden" value="{{ $user->id }}">
                        <button type="submit" href="#" class="text-red-600 hover:text-red-900" for="my-modal">Delete</button>
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

@if(count($users) < 1)
    <h1 class="text-2xl text-center text-gray-900 m-20">No users</h1>
@endif
<!--user tabel end-->

<!--edit user modal html-->
<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-sky-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold" id="modal_title"></p>
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

				<div class="my-5" id="modal_cont">
                    <!--
					<div class="flex text-center justify-center" id="modal_loading">
                        <svg class="w-10 h-10 animate-spin transition-all " viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>ic_fluent_spinner_ios_20_regular</title>
                            <g id="🔍-System-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="ic_fluent_spinner_ios_20_regular" fill="#212121" fill-rule="nonzero">
                                    <path d="M10,3 C6.13401,3 3,6.13401 3,10 C3,10.2761 2.77614,10.5 2.5,10.5 C2.22386,10.5 2,10.2761 2,10 C2,5.58172 5.58172,2 10,2 C14.4183,2 18,5.58172 18,10 C18,14.4183 14.4183,18 10,18 C9.72386,18 9.5,17.7761 9.5,17.5 C9.5,17.2239 9.72386,17 10,17 C13.866,17 17,13.866 17,10 C17,6.13401 13.866,3 10,3 Z" id="🎨-Color"></path>
                                </g>
                            </g>
                        </svg>
                    </div>-->

                    <div
                    x-data="{ activeTab: 'admin' }"
                    x-init="activeTab = window.location.hash ? window.location.hash.replace('#', '') : 'admin'"
                    >
                    <div class="flex justify-between">

                            <a
                            @click="activeTab = 'admin'"
                            :class="{ 'font-bold': activeTab === 'admin' }"
                            class="p-3  rounded bg-sky-200 text-gray-800"
                            href="#admin"
                            >
                            admin
                            </a>

                            <a
                            @click="activeTab = 'teacher'"
                            :class="{ 'font-bold': activeTab === 'teacher' }"
                            class="p-3  rounded bg-sky-200 text-gray-800"
                            href="#teacher"
                            >
                            teacher
                            </a>


                            <a
                            @click="activeTab = 'student'"
                            :class="{ 'font-bold': activeTab === 'student' }"
                            class="p-3  rounded bg-sky-200 text-gray-800"
                            href="#student"
                            >
                            student
                            </a>
                    </div>

                    <hr class="mt-2">

                    <div class="p-6 mt-2  rounded-lg">
                        <div x-show="activeTab === 'admin'">
                            <form action="{{ route('confirm') }}" method="POST">
                                <input type="hidden" name="type" value="admin">
                                <input type="hidden" class="user_id" name="user_id" value="">
                                @csrf
                                <div>
                                    <label for="admin_type" class="block text-sm font-medium text-gray-700">Admin type</label>
                                    <select id="admin_type" name="admin_type" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm rounded-md">
                                    <option>system admin</option>
                                    <option selected>normal admin</option>
                                    </select>
                                </div>

                                <div class="flex justify-end pt-5">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-800 sm:text-sm">
                                        Confirm
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div x-show="activeTab === 'teacher'" >
                            <form action="{{ route('confirm') }}" method="POST">
                                <input type="hidden" name="type" value="teacher">
                                <input type="hidden" class="user_id" name="user_id" value="">
                                @csrf
                            <div class=" h-96 overflow-scroll pr-5 ">
                            <legend class="text-lg font-medium text-gray-900">Groups</legend>
                            <hr>
                            @foreach ($groups as $group)
                                <div class="relative flex items-start py-2">
                                    <div class="min-w-0 flex-1 text-sm">
                                        <label for="group-{{$group->id}}" class="font-medium text-gray-700 select-none">year {{ $group->year }} group n {{ $group->groupe }} speciality {{ $group->speciality }}</label>
                                    </div>
                                    <div class="ml-3 flex items-center h-5">
                                        <input id="group-{{$group->id}}" name="gr[]" value="{{ $group->id }}" type="checkbox" class="focus:ring-transparent h-4 w-4 text-sky-600 border-gray-300 rounded">
                                    </div>
                                </div>
                            @endforeach


                         </div>
                         <div class="flex justify-end pt-5">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-800 sm:text-sm">
                                Confirm
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                        </form>
                        </div>

                        <div x-show="activeTab === 'student'">
                            <!--student form-->
                            <form action="{{ route('confirm') }}" method="POST">
                                <input type="hidden" name="type" value="student">
                                <input type="hidden" class="user_id" name="user_id" value="">
                                @csrf
                        <div>
                            <fieldset>
                              <legend class="block text-sm font-medium text-gray-700">Student :</legend>
                              <div class="mt-1 rounded-md -space-y-px mb-5">
                                <div>
                                  <label for="matricule" class="sr-only">Matricule</label>
                                  <input required type="text" name="matricule" id="card-number" class="mb-3 focus:ring-sky-500 focus:border-sky-500 relative block w-full  rounded bg-transparent focus:z-10 sm:text-sm border-gray-300" placeholder="Matrucule">
                                </div>
                                <div class="flex -space-x-px ">
                                    <div>
                                        <label for="groupe" class="block text-sm font-medium text-gray-700">Groupe</label>
                                        <select id="groupe" name="groupe_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none  focus:border-sky-500 sm:text-sm rounded-md">
                                          @foreach ($groups as $group)
                                          <option value="{{ $group->id }}">year {{ $group->year }} group n {{ $group->groupe }} speciality {{ $group->speciality }}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                              </div>
                            </fieldset>
                            <div class="flex justify-end pt-5">
                                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-800 sm:text-sm">
                                    Confirm
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>
                            </form>
                          </div>
                        <!--end student form-->
                        </div>
                    </div>
                </div>
            </div>
                                    <!--Footer-->

                                </div>
                            </div>
                        </div>
<!--end edit user modal-->

<!--end confirm user modal-->
<!--bg-gray-900 to currant tab-->
<script>
    var users = document.querySelector('#users');
    users.classList.add("bg-gray-900");
    var users = document.querySelector('#users-d');
    users.classList.add("bg-gray-900");
</script>
@endsection
