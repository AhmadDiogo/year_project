<!DOCTYPE html>
<html lang="en">
<!-- Constructing the lake Breeze Hotel Management System-->

<head>
    <title>Lake Breeze Hotel </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet"
        href="css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bdatepicker.min.css%2bstyle.css%2cMcc.nCQXu6LVyk.css.pagespeed.cf.rg4CHwA3tS.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg  ftco-navbar-light">
        <div class="container-xl">
            <a class="navbar-brand align-items-center" href="index.html">
                <span class="">Lake Breeze <small>
                        <p style="text-align:center;">Hotel</p>
                    </small></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-4 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('welcome') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('rooms.index') }}">ROOMS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('restaurant') }}">RESTO &amp; BAR</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('swimming_pool') }}">SWIMMING POOL</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('conf_venues') }}">CONF. VENUES </a></li>
                    <p><a href="#" class="btn btn-primary p-4 py-3">BOOK <span
                                class="ion-ios-arrow-round-forward"></span></a> </p>
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')





    <footer class="ftco-footer">
        <div class="container-xl">
            <div class="row mb-5 pb-5 justify-content-between">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo d-flex">
                            <a class="navbar-brand align-items-center" href="index.html">
                                <span class="">Lake Breeze <small>
                                        <p style="text-align:center;">Hotel</p>
                                    </small></span>
                            </a>
                        </h2>
                        <p>Your Comfort is our priority!
                        </p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Home</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right me-2"></span>About</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Rooms</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Resto &amp; Bar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">198 West 21th Street,
                                        Diani Beach Road Diani Beach, Kenya</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+254 709
                                            538880</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="533a3d353c132a3c2621373c3e323a3d7d303c3e">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright
                            &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>2021 Lake Breeze Hotel.All Rights Reserved. <i
                                class="fa fa-heart color-danger" aria-hidden="true"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
        data-cf-beacon='{"rayId":"65bbd15fb8a74f87","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'>
    </script>
</body>

</html>
