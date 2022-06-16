@extends('app.admin.admin_temp')
@section('title','Add absent')
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

<h2 class="text-xl mb-5">Please check absent student</h2>
<form action="{{ route('absent_added') }}" method="POST">
    @csrf
<div class="flex justify-between sm:px-20 md:mb-20 mb-10">
    <div class="date text-center  mt-6">
        <label for="start">Date : </label>
        <input type="date" id="start" name="absent_date"
        value="<?= date('Y-m-d', time()); ?>"
        min="2022-01-01" max="2022-12-31"
        class="active:border-sky-500">
    </div>

    <div>
        <label for="class" class="block text-sm font-medium text-gray-700">class</label>
        <select id="class" name="class" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none  focus:border-sky-500 sm:text-sm rounded-md">
          @foreach ($classes as $class)
          <option value="{{ $class->name }}">{{ $class->name }}</option>
          @endforeach
        </select>
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
                    <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    @foreach($students as $student)
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                            {{$student->name}} {{$student->sur_name}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <input id="absent-{{$student->user_id}}" aria-describedby="check absent" name="absent[]" value="{{$student->user_id}}" type="checkbox" class="focus:ring-sky-500 h-4 w-4 text-sky-600 border-gray-300 rounded">
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

  @if($students->count() > 0)
    <div class=" flex justify-end p-5">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:bg-sky-800 sm:text-sm">
            Add absents
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    </div>
    @else
    <h1 class="text-2xl text-center text-gray-900 m-20">No student in this groupe</h1>
    @endif

    <!--hidden variables-->
    <input type="hidden" name="by_id" value="{{Auth::user()->id}}">
</form>

@endsection
