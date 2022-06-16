@extends('app.admin.admin_temp')
@section('title','Add absent')
@section('content')
@foreach($groups as $group_spes)

<div class="relative mt-10 mb-3">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
    <div class="w-full border-t border-gray-500"></div>
    </div>
    <div class="relative flex justify-center text-sm">
    <span class="px-2 bg-white text-gray-700 text-xl font-bold">
        Year {{ $group_spes->first()->year }}
    </span>
    </div>
</div>


<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 grid-cols-1">
    @foreach($group_spes as $group)
    <a href="{{ route('add_absents') }}/{{$group->id}}">
        <div class="bg-gray-800 rounded-lg hover:shadow transition-all py-5 flex items-center hover:cursor-pointer hover:bg-gray-600">
            <div class="flex m-auto text-xl font-bold text-white">
                <span class=" underline underline-offset-4 ">G{{$group->groupe}}</span> : {{$group->speciality}}
            </div>
        </div>
    </a>
    @endforeach
</div>
@endforeach

<script>
    var groups = document.querySelector('#add_absents');
    groups.classList.add("bg-gray-900");
    var groups = document.querySelector('#add_absents-d');
    groups.classList.add("bg-gray-900");
</script>
@endsection
