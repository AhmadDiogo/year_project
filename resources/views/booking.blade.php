@extends('layout.app')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="/">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Booking<i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Book Your Room</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">

        <div class="container-fluid">
            @if (session()->has('message'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <h3 class="text-center price">{{ session()->get('message') }}</h3>
                </div>
            @endif
            <div class="row g-md-5">
                <div class="col-md-12 col-xl-7 d-flex align-items-stretch">
                    <div class="blog-entry justify-content-end aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img d-flex align-items-end"
                            style="background-image: url('{{ asset('images/image_5.jpg') }}');">
                        </a>
                        <div class="text">
                            <p class="meta">
                                <span>{{ $room->room_type }}</span><a href="#">R{{ $room->room_price }} PER NIGHT</a>
                                <span>bed(s):{{ ' ' }} {{ $room->number_beds }}</span>
                                <span>bathroom(s):{{ ' ' }} {{ $room->number_bathrooms }}</span>
                                <span>allowed guest(s):{{ ' ' }} {{ $room->number_guests }}</span>
                            </p>
                            <h3 class="heading mb-3"><a href="#">{{ $room->room_name }}</a></h3>
                            <p>{{ $room->room_description }}
                            </p>

                            <div class="pt-2 mt-2">
                                <div class="comment-form-wrap pt-5">
                                    <h3 class="mb-5" style="font-size: 34px;">Complete Form To Finalize Booking</h3>
                                    <form action="{{ route('bookings.store') }}" method="POST"
                                        class="p-2 p-lg-5 comment-form">

                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="name">Name *</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ old('name') }}">

                                                    @error('name')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('name') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="surname">Surname *</label>
                                                    <input type="text" class="form-control" name="surname"
                                                        value="{{ old('surname') }}">
                                                    @error('surname')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('surname') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ old('email') }}">

                                                    @error('email')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('email') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="email_confirmation">Confirm Email *</label>
                                                    <input type="email" name="email_confirmation" class="form-control"
                                                        value="{{ old('email_confirmation') }}">

                                                    @error('email_confirmation')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('email_confirmation') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="from_date">From which date *</label>
                                                    <input type="datetime-local" class="form-control" name="from_date"
                                                        value="{{ old('from_date') }}">

                                                    @error('from_date')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('from_date') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="to_date">To which date *</label>
                                                    <input type="datetime-local" class="form-control" name="to_date"
                                                        value="{{ old('to_date') }}">

                                                    @error('to_date')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('to_date') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="number_guests">Number Of Guests</label>
                                                    <input type="number" name="number_guests" class="form-control"
                                                        value="{{ old('number_guests') }}">

                                                    @error('number_guests')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('number_guests') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="phone_number">Phone Number *</label>
                                                    <input type="phone_number" class="form-control" name="phone_number"
                                                        value="{{ old('phone_number') }}">

                                                    @error('phone_number')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('phone_number') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="address">Address *</label>
                                                    <input type="text" class="form-control" name="address"
                                                        value="{{ old('address') }}">


                                                    @error('address')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('address') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="city">City *</label>
                                                    <input type="text" class="form-control" name="city"
                                                        value="{{ old('city') }}">


                                                    @error('city')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('city') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2 mb-2">
                                                <div class="form-group">
                                                    <label for="special_requests">Special Requests</label>
                                                    <textarea name="special_requests" id="special_requests" cols="30"
                                                        rows="2"
                                                        class="form-control"> {{ old('special_requests') }}</textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <h1>Card Holder Information</h1>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="name_on_card">Name On Card *</label>
                                                    <input type="text" name="name_on_card" class="form-control"
                                                        value="{{ old('name_on_card') }}">



                                                    @error('name_on_card')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('name_on_card') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="text">Card Number *</label>
                                                    <input type="number" name="card_number" class="form-control"
                                                        value="{{ old('card_number') }}">


                                                    @error('card_number')
                                                        <span class="help text-danger" role="alert">
                                                            {{ $errors->first('card_number') }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">
                                                <label for="email">CVC *</label>
                                                <input type="number" name="cvc" class="form-control"
                                                    value="{{ old('cvc') }}">

                                                @error('cvc')
                                                    <span class="help text-danger" role="alert">
                                                        {{ $errors->first('cvc') }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="hidden" name="room_id" value="{{ $room->id }}">
                                        <div class="col-md-12 mt-2 mt-2">
                                            <div class="form-group">
                                                <input type="submit" value="Book Now" class="btn py-3 px-4 btn-primary">
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12 col-xl-5 ps-xl-5">
                <div class="row g-md-2">
                    <div class="col-md-6">
                        <h1>Total: R{{ $room->room_price }}</h1>
                        {{-- INSERT TABLE HERE --}}
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
