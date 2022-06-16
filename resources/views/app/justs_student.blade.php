@extends('app.student_temp')
@section('title', Auth::user()->name.' '.Auth::user()->sur_name.' justification')
@section('header' , 'Justification')
@section('content')
    <!--stacked list start-->
    @foreach($justs as $just)

    @endforeach

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      from
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        to
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        cause
                      </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach($justs as $just)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                          {{$just->start_date}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $just->end_date }}
                          </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $just->cause }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('just_details') }}" method="POST">
                                @csrf
                                <input type="hidden" name="just_id" value="{{ $just->id }}">
                                <button href="#" type="submit" class="text-sky-600 hover:text-sky-900">
                                Go to justification
                                </button>
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

      @if(count($justs) < 1)
      <h1 class="text-2xl text-center text-gray-900 m-20">No justifications</h1>
       @endif
    <!--stacked list end-->

    <script>
        var groups = document.querySelector('#justs');
        groups.classList.add("bg-gray-900");
    </script>
@endsection
