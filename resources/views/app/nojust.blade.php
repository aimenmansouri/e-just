@extends('app.student_temp')
@section('title', Auth::user()->name.' '.Auth::user()->sur_name)
@section('header' , 'justification details')
@section('content')

<div class="flex justify-center">
    <h1 class="text-2xl text-center text-gray-900 m-20">There is no such justification</h1>
</div>

@endsection
