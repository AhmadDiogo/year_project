@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image:url({{ asset('images/xbg_3.jpg.pagespeed.ic.0AiuSxYrJD.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="me-2"><a href="blog.html">Blog
                                <i class="fa fa-chevron-right"></i></a></span> <span>Room Single <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Room Details</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-room-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-single">
                    <div class="carousel-room">
                        <div class="item">
                            <div class="room-detail img"
                                style="background-image:url({{ asset('images/xroom-1.jpg.pagespeed.ic.8hFWmffUTt.jpg') }})">
                            </div>
                        </div>
                        <div class="item">
                            <div class="room-detail img"
                                style="background-image:url({{ asset('images/xroom-1.jpg.pagespeed.ic.8hFWmffUTt.jpg') }})">
                            </div>
                        </div>
                        <div class="item">
                            <div class="room-detail img"
                                style="background-image:url({{ asset('images/xroom-1.jpg.pagespeed.ic.8hFWmffUTt.jpg') }})">
                            </div>
                        </div>
                        <div class="item">
                            <div class="room-detail img"
                                style="background-image:url({{ asset('images/xroom-1.jpg.pagespeed.ic.8hFWmffUTt.jpg') }})">
                            </div>
                        </div>
                    </div>
                    <h2>{{ $room->room_name }}</h2>
                    <p>{{ $room->room_description }}</p>
                    <div class="d-md-flex mt-5 mb-5">
                        <ul class="list">
                            <li><span>Max:</span> {{ $room->number_guests }} Persons</li>
                            <li><span>Size:</span> 45 m2</li>
                        </ul>
                        <ul class="list ms-md-5">
                            <li><span>View:</span> Sea View</li>
                            <li><span>Bed:</span> 1</li>
                        </ul>
                    </div>
                    <div class="properties-single mb-5 mt-4">
                        <h4 class="mb-4">Review &amp; Ratings</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" class="star-rating">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i> 10K+ Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i> 6k+ Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                                        class="fa fa-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-12 heading-section" data-aos="fade-up" data-aos-duration="1000">
                            <h2>Related Rooms</h2>
                        </div>
                    </div>
                    <div class="row">

                        @if (count($any_2_rooms) > 0)
                            @foreach ($any_2_rooms as $room)
                                <div class="col-md-6" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="room-wrap d-md-flex flex-md-column-reverse">
                                        <a href="#" class="img img-room"
                                            style="background-image:url({{ asset('images/xroom-3.jpg.pagespeed.ic.1_fVN4GKrT.jpg') }})">
                                        </a>
                                        <div class="text p-5 text-center">
                                            <h3><a href="#">{{ $room->room_name }}</a></h3>
                                            <p>{{ $room->room_description }}</p>
                                            <p class="mb-0 mt-2"><span class="me-3 price">R {{ $room->room_price }}
                                                    <small>/
                                                        night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else

                        @endif
                    </div>
                </div>
                <div class="col-lg-4 sidebar ps-md-4">
                    <div class="sidebar-box bg-light rounded">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <h3>Hotel Services</h3>
                        @if (count($hotel_services) > 0)
                            <div class="d-md-flex">
                                <ul class="categories me-md-4">
                                    @foreach ($hotel_services as $service)
                                        <li><a href="#">{{ $service->hotel_service }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <p>No Hotel Services yet</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
