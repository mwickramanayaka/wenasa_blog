@extends('layouts.app')

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/notiflix-2.7.0.min.css') }}" rel="stylesheet">



@section('content')

<div class="image">
    <img src="{{ asset('/HotelLogo.png') }}">
</div>

<div class="content">
    <br><br>
    <h2>offers</h2>
    <span>
        <!-- line here -->
    </span>
    <ul class="links">
        <li><a href="#">Enjoy 20% off on Hot Kitchen Items with Sampath credit cards <br>MORE INFO -</a></li>
        <div class="vertical-line"></div>
        <li><a href="#">WIN a DOCTOR STRANGE Multiverse of Madness movie ticket by a online reservation<br>MORE INFO -</a></li>
        <div class="vertical-line"></div>
        <li><a href="#">Did you know that you can book out a whole villa at Wenasa hotel?​<br>MORE INFO </a></li>
        <div class="vertical-line"></div>
        <li><a href="#">5% OFF SURVEY DEAL<br>MORE INFO -</a></li>

    </ul>

    <ul class="icons">
        <li>
            <i class="fa fa-instagram"></i>
        </li>
        <li>
            <i class="fa fa-facebook"></i>
        </li>
        <li>
            <i class="fa fa-youtube"></i>
        </li>
        </li>
    </ul>
</div>
@endsection
<!-- @include('layouts.inc.frontend-footer') -->