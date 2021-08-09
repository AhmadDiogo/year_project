@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="{{ route('welcome') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>About Us <i
                                class="fa fa-chevron-right"></i></span></p>

                </div>
            </div>
        </div>
    </section>
@endsection
