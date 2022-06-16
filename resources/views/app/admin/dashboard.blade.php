@extends('app.admin.admin_temp')
@section('title','Dashboard')
@section('content')
<div class="flex justify-center mb-5"><span class="text-sky-900 font-bold">Date : {{ Carbon\Carbon::today()->toDateString() }} </span></div>
<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">

    <a class="group relative block p-8 border border-gray-100 shadow-xl rounded-xl
    transform translate-y-4 hover:translate-y-0 duration-500 ease-in-out" href="{{ route('users') }}">
        <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-amber-100 tex text-amber-600 font-medium text-xs">
        Users
        </span>

        <div class="mt-4 text-gray-500 sm:pr-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>

        <h5 class="mt-1 text-lg font-bold text-green-900"> {{$users[4] + $users[3] +$users[2] +$users[1] + $users[0]}} user</h5>

        <h5 class="mt-4 text-xl font-bold text-gray-900 overflow-hidden">Users :</h5>
            <p>
                students : {{$users[4]}} <br>
                teachers : {{$users[3]}} <br>
                admins : {{$users[2]}} <br>
                system admins : {{$users[1]}} <br>
                <span class=" text-red-700">unconfirmed : {{$users[0]}}</span>
            </p>
        </div>
    </a>

    <!--absents-->
    <a class="group relative block p-8 border border-gray-100 shadow-xl rounded-xl
    transform translate-y-4 hover:translate-y-0 duration-500 ease-in-out" href="{{ route('absents') }}">
        <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-rose-100 text-rose-600 font-medium text-xs">
            absents
        </span>

        <div class="mt-4 text-gray-500 sm:pr-8">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>

        <h5 class="mt-1 text-lg font-bold text-green-900">Absents today : {{ $abs_today }}</h5>

        <h5 class="mt-4 text-xl font-bold text-gray-900 overflow-hidden">Absents :</h5>
            <p>
                Absents : {{$all_absents}}
            </p>

        <h5 class="mt-4 text-xl font-bold text-gray-900 overflow-hidden">Absents last 30 days :</h5>
            <p>
                Absents : {{$absents}} <br>
                Justefied : {{$absents-$abs_nojust}}
            </p>
        </div>
    </a>

    <!--justifications-->

    <a class="group relative block p-8 border border-gray-100 shadow-xl rounded-xl
    transform translate-y-4 hover:translate-y-0 duration-500 ease-in-out" href="{{ route('just') }}">
        <span class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 text- font-medium text-xs">
            justifications
        </span>

        <div class="mt-4 text-gray-500 sm:pr-8">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>

        <h5 class="mt-1 text-lg font-bold text-green-900">Justifications today : {{ $justs_today }}</h5>

        <h5 class="mt-4 text-xl font-bold text-gray-900 overflow-hidden">Justifications :</h5>
            <p>
                Justifications : {{$justs}} <br>
            </p>


        <h5 class="mt-4 text-xl font-bold text-gray-900 overflow-hidden">Justifications last 30 days:</h5>
            <p>
                Justifications : {{$justs_month}}
            </p>
        </div>
    </a>

</div>

<div class=" mt-10 rounded flex" id="myChart">
    <div class="abs md:w-1/2"><canvas id="canvas" ></canvas></div>
    <div class="just md:w-1/2"><canvas id="canvass"></canvas></div>
</div>
<!--gray-900 dashboard side bar script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

<script type="text/javascript">
    var abs  = @json($abs);
    var dates = @json($dates);



                var ctx = document.getElementById("canvas").getContext('2d');
                    var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:dates,
                        datasets: [{
                            label: 'َAbsents',
                            data: abs,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });


    var just  = @json($just_number);
    var dates_just = @json($dates_just);

                var ctx2 = document.getElementById("canvass").getContext('2d');

                    var myChart = new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels:dates_just,
                        datasets: [{
                            label: 'Justifications',
                            data: just,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
</script>


<script>
    var users = document.querySelector('#dashboard');
    users.classList.add("bg-gray-900");
    var users = document.querySelector('#dashboard-d');
    users.classList.add("bg-gray-900");
</script>
@endsection
