@extends('layouts.app')
@section('title', "$setting->website_name")
@section('meta_description', "$setting->meta_description")
@section('meta_keyword', "$setting->meta_keyword")
@section('content')

<img class="d-block mx-auto mb-4" src="{{ asset('/HotelLogo.png') }}" style="width: 20%">

<div class="bg-muted py-5   ">

    <div class="container">
        <div class="row">

            <div class="col-md-12">

            </div>
            <div class="owl-carousel category-carousel owl-theme">
                @foreach ($all_categories as $all_cate_item)
                <div class="item">
                    <a href="{{ url('category/' . $all_cate_item->slug) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('uploads/category/' . $all_cate_item->image) }}" alt="Image">
                            <div class="card-body text-center">
                                <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

        </div>
        </div>

</div>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col-6">
        </div class="d-inline-flex p-2">

        <button type="button" class="btn btn-warning btn-lg ">
            <a href="{{ url('reservation') }}" class="btn btn-check:checked">
                <h1>Make a Reservation</h1>
            </a>
        </button>
    </div>
</div>
 

</div>


<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h4>Wenasa Hotel</h4>
                <div class="underline"></div>
                <p>
                    Wenasa Hotel, which is located in Anuradhapura area, 12 km from Jaya Sri Maha Bodhi, provides
                    accommodation with a restaurant, free private parking, a shared lounge and a garden. The
                    accommodation offers 24-hour front desk, a shared kitchen and free Wi-Fi
                </p>
                <p> 
                    For more than a decade Wenasa hotel is survived successfully in this industry with a well-known
                    reputation with the customer relationships and customer service in Anuradhapura area.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Blog Categories</h4>
                <div class="underline"></div>

            </div>
            @foreach ($all_categories as $all_cateitem)
            <div class="col-md-3">

                <div class="card card-body mb-3">
                    <a href="{{ url('category/' . $all_cateitem->slug) }}" class="text-decoration-none">
                        <h5 class="text-dark mb-0">{{ $all_cateitem->name }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h4> Blog Posts</h4>
                <div class="underline"></div>

            </div>
            @foreach ($latest_posts as $latest_post_item)
            <div class="col-md-12 ">

                <div class="card card-body bg-gray shadow mb-3">
                    <a href="{{ url('category/' . $latest_post_item->category->slug .'/' .$latest_post_item->slug) }}" class="text-decoration-none">
                        <h5 class="text-dark mb-0">{{ $latest_post_item->name }}</h5>
                    </a>
                    <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }} </h6>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection