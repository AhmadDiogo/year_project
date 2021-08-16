@extends('layout.app')

@section('content')
    {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('welcome') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>About us <i
                                class="fa fa-chevron-right"></i></span></p>

                </div>
            </div>
        </div>
    </section> --}}

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index.html"><i
                                    class="fa fa-chevron-right"></i></a></span> <span> <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Rooms</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" class="booking-form">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4 border-0">
                                    <label for="#">Check-In</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control arrival_date" placeholder="Check-In Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4">
                                    <label for="#">Check-Out</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" class="form-control departure_date" placeholder="Check-Out Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4">
                                    <label for="#">Rooms</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">

                                                <option style="color:gray" value="">Suite</option>
                                                <option style="color:gray" value="">Family Room</option>
                                                <option style="color:gray" value="">Classic Room</option>
                                                <option style="color:gray" value="">Superior Room</option>
                                                <option style="color:gray" value="">Luxury Room</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4">
                                    <label for="#">Guests</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option style="color:gray" value="">1 Person</option>
                                                <option style="color:gray" value="">2 Person</option>
                                                <option style="color:gray" value="">3 Person</option>
                                                <option style="color:gray" value="">4 Person</option>
                                                <option style="color:gray" value="">5 Person</option>
                                                <option style="color:gray" value="">6-9 Person</option>
                                                <option style="color:gray" value="">10+ Person</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg d-flex">
                                <div class="form-group d-flex border-0">
                                    <div class="form-field w-100 align-items-center d-flex">
                                        <a href="#" type="submit"
                                            class="d-flex justify-content-center align-items-center align-self-stretch form-control btn btn-primary py-lg-4 py-xl-0"><span>Check
                                                Availability</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">


                @if (count($rooms) > 0)
                    @foreach ($rooms as $room)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="300"
                            data-aos-duration="1000">
                            <div class="room-wrap d-md-flex flex-md-column-reverse">
                                <a href="{{ route('rooms.show', $room->id) }}" class="img img-room"
                                    style="background-image: url(images/room-6.jpg);">
                                </a>
                                <div class="text p-5 text-center">
                                    <h3><a href="{{ route('rooms.show', $room->id) }}">{{ $room->room_name }}</a></h3>
                                    <p>{{ $room->room_description }}</p>
                                    <p class="mb-0 mt-2"><span class="me-3 price">R {{ $room->room_price }} <small>/
                                                night</small></span><a href="#" class="btn-custom">Book Now</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No rooms available yet</p>
                @endif

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Unwind Services</span>
                    <h2 class="mb-4">Explore Our Hotel Services</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="flaticon-wifi-signal"></span></div>
                        <div class="text">
                            <h2>Free Wifi</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="flaticon-online-booking"></span></div>
                        <div class="text">
                            <h2>Easy Booking</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="300" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="flaticon-cooking"></span></div>
                        <div class="text">
                            <h2>Restaurant</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="flaticon-swimming-pool"></span></div>
                        <div class="text">
                            <h2>Swimming Pool</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="flaticon-cosmetics"></span></div>
                        <div class="text">
                            <h2>Beauty &amp; Health</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="flaticon-reception"></span></div>
                        <div class="text">
                            <h2>Help &amp; Support</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js%2baos.js.pagespeed.jc.gNemz1ctce.js"></script>___scripts_3___
    <script>
        eval(mod_pagespeed_4HfeNGdLlq);
    </script>
    <script src="js/datepicker.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.XiV_3kbmz-.js"></script>___scripts_6___
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script>
        eval(mod_pagespeed_mKCMGOt_Ci);
    </script>
    <script>
        eval(mod_pagespeed_VA6WPbHwQJ);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"65bbd1763e26ac2e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'>
    </script>
    </body>
    <section class="ftco-section-counter">
        <div class="container">
            <div class="row section-counter">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="counter-wrap">
                        <span class="number"><span class="countup">38900</span></span>
                        <span class="caption"># of Happy Guests</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="counter-wrap">
                        <span class="number"><span class="countup">320</span></span>
                        <span class="caption"># of Rooms</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="counter-wrap">
                        <span class="number"><span class="countup">1000</span></span>
                        <span class="caption"># of Staffs</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="counter-wrap">
                        <span class="number"><span class="countup">587</span></span>
                        <span class="caption"># of Destination</span>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    <section class="ftco-gallery">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-md" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg"
                        class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                        style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                    </a>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <a href="images/gallery-1.jpg"
                        class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                        style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                    </a>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <a href="images/gallery-3.jpg"
                        class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                        style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                    </a>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <a href="images/gallery-4.jpg"
                        class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                        style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                    </a>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <a href="images/gallery-5.jpg"
                        class="gallery-wrap img d-flex align-items-center justify-content-center glightbox"
                        style="background-image: url(images/gallery-5.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa fa-search"></span></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
