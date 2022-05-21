@extends('layouts.app')




@section('content')

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<link href="{{ asset('assets_back_end/css/notiflix.css') }}" rel="stylesheet" />

<div class="image">
    <img src="{{ asset('/HotelLogo.png') }}">
</div>

<div class="content">
    <br><br>
    <h2>About Us</h2>
    <span>
        <!-- line here -->
    </span>
    <p>Wenasa Hotel, which is located in Anuradhapura area, 12 km from Jaya Sri Maha Bodhi,
        provides accommodation with a restaurant, free private parking, a shared lounge and a
        garden. The accommodation offers 24-hour front desk, a shared kitchen and free Wi-Fi.</p>
    <ul class="links"><b><u>
                <li><a href="#">contact us</a> <br><br></b></u>
        Wenasa Hotel<br>
        Anuradhapura Road, <br>
        Moragoda, <br>
        Thalawa. <br><br>
        Tel: 0252050922 <br>
        Email: wenasarest@gmail.com
        </li>
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