@extends('app.student_temp')
@section('title', Auth::user()->name.' '.Auth::user()->sur_name)
@section('header' , 'Absents')
@section('content')
    <!--stacked list start-->
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-md">
    <ul role="list" class="divide-y divide-gray-200">
    @foreach($absents as $absent)
    <li>
        <div class="px-4 py-4 sm:px-6">
          <div class="flex items-center justify-between">
            <p class="text-sm font-medium text-sky-600 truncate">
                Absent in {{$absent->class}} class
            </p>
            <div class="ml-2 flex-shrink-0 flex">
                @if($absent->just_id == null)
                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Not justefied
                    </p>
                @else
                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    justefied
                    </p>
                    <form action="{{ route('just_details') }}" method="POST">
                        @csrf
                        <input type="hidden" name="just_id" value="{{ $absent->just_id }}">
                        <button href="#" type="submit" class="underline text-xs ml-1 text-green-800">
                        Justification
                        </button>
                    </form>
                @endif
            </div>
          </div>
          <div class="mt-2 sm:flex sm:justify-between">
            <div class="sm:flex">
              <p class="flex items-center text-sm text-gray-500">
                <!-- Heroicon name: solid/users -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                by {{ $absent->by_name }} {{ $absent->by_surname }}
              </p>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
              <!-- Heroicon name: solid/calendar -->
              <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
              </svg>
              <p>
                Absent date :
                <time datetime="{{ $absent->absent_date }}">{{ $absent->absent_date }}</time>
              </p>
            </div>
          </div>
        </div>
    </li>

    @endforeach
    </ul>
  </div>

    @if(count($absents) < 1)
    <h1 class="text-2xl text-center text-gray-900 m-20">No absents</h1>
     @endif
    <!--stacked list end-->

    <script>
        var groups = document.querySelector('#abs');
        groups.classList.add("bg-gray-900");
        //"bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
    </script>
@endsection
