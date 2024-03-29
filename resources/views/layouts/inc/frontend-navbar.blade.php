<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
            <ul class=" mb-2 mb-lg-2 wenasa ">
                
                <li class="a">
                    <a class="nav-link" href="{{ url('/') }}">Wenasa Hotel</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/reservation') }}">Reservation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/offers') }}">Offers</a>
                    </li>

                    <li class="nav-item">
                        <!-- <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a> -->
                        <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                    </li>


                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wenasa Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @php
                            $categories = App\Models\Category::where('navbar_status', '0')
                            ->where('status', '0')
                            ->get();
                            @endphp
                            @foreach ($categories as $cateitem)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('category/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- @php
                        $categories = App\Models\Category::where('navbar_status', '0')
                            ->where('status', '0')
                            ->get();
                    @endphp
                    @foreach ($categories as $cateitem)
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ url('category/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                        </li>
                    @endforeach -->
                    @if(Auth::check())
                    <li>
                        <a href="{{ route('logout') }}" class="nav-link btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
</div>