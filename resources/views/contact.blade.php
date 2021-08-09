@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image:url(images/bg_3.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="index.html"> <i
                                    class="fa fa-chevron-right"></i></a></span> <span> <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3>Contact us</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Address:</span> 198 West 21th Street, Diani Beach Road Diani
                                                        Beach, Kenya </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Email:</span> <a
                                                            href="https://preview.colorlib.com/cdn-cgi/l/email-protection#7b12151d143b02140e0908120f1e55181416"><span
                                                                class="__cf_email__"
                                                                data-cfemail="dfb6b1b9b09fa6b0aaadacb6abbaf1bcb0b2">[email&#160;required]</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text">
                                                    <p><span>Phone:</span> <a href="tel://1234567920">+254 709 538880</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Create a message here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w-100 social-media mt-5">
                                        <h3>Follow us here</h3>
                                        <p>
                                            <a href="#">Facebook</a>
                                            <a href="#">Twitter</a>
                                            <a href="#">Instagram</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div id="" class="bg-white">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.6498664422!2d36.56720029142611!3d-1.3031933719272915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sza!4v1623232337706!5m2!1sen!2sza"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
