@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <img src="images/imagen_portada.webp" class="w-100 background-image vh-100">
        <div
            class="justify-content-center flex-column absolute-center text-center position-absolute top-10 start-50 translate-middle">
            <p class="fw-bolder font sized-font">Virtual meditate</p>
            <h2 class="fw-bold font">A moment of calm in a world of hurry</h2>
        </div>

    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Eagle+Lake&family=Syne+Mono&display=swap');
        .font{
            font-family: 'Eagle Lake', cursive;
        }

        .sized-font{
            font-size: 6em;
        }

        main{
            position: fixed;
            width: 100%;
        }
    </style>
@endsection
