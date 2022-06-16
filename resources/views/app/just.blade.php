@extends('app.student_temp')
@section('title', Auth::user()->name.' '.Auth::user()->sur_name)
@section('header' , 'justification details')
@section('content')

<div class="flex justify-center">

        <div id="qr" class=" sm:pl-5">
        <div class="mb-5">
            <h5 class="text-xl font-bold text-gray-900">{{ Auth::user()->name }} {{ Auth::user()->sur_name }}</h5>
            <h5 class="mt-3 text-xl font-bold text-sky-900">from {{$just->start_date}} to {{$just->end_date}}</h5>
            <p class="max-w-sm mt-2 text-gray-700">
                cause : {{$just->cause}}
            </p>
        </div>
    </div>
</div>

<input type="hidden" id="qr_link" value="{{ route('justs_student') }}/{{ $just->code}}">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{ asset('js/qrcode.js') }}"></script>
<script type="text/javascript">

    options = {
    // render method: 'canvas', 'image' or 'div'
    render: 'image',

    // version range somewhere in 1 .. 40
    minVersion: 1,
    maxVersion: 40,

    // error correction level: 'L', 'M', 'Q' or 'H'
    ecLevel: 'L',

    // offset in pixel if drawn onto existing canvas
    left: 0,
    top: 0,

    // size in pixel
    size: 250,

    // code color or image element
    fill: '#0369a1',

    // content
    text: $('#qr_link').val(),

    // corner radius relative to module width: 0.0 .. 0.5
    radius: 0,

    // quiet zone in modules
    quiet: 0,

    // modes
    // 0: normal
    // 1: label strip
    // 2: label box
    // 3: image strip
    // 4: image box
    mode: 0,

    mSize: 0.1,
    mPosX: 0.5,
    mPosY: 0.5,

    label: 'no lable',
    fontname: 'sans',
    fontcolor: '#000',

}

    $('#qr').qrcode(options);

    </script>
@endsection
