<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">
    <title>{{ $app_pengaturan?->nama_aplikasi ?: config('app.name', 'KuyBisnis') }} | Konsultasikan Bisnismu</title>
    <link rel="shortcut icon" href="{{ asset('/') }}assets/home/img/favicon.png" type="image/x-icon">
    <link href="{{ asset('/') }}assets/home/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/themify-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/elegant-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/animate.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/validnavs.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/helper.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="se-pre-con"></div>
    <header id="home">
        @include('home.partials.navbar')
    </header>

    @include('home.partials.banner')
    @include('home.partials.features')
    @include('home.partials.about')
    @include('home.partials.process')
    @include('home.partials.team')
    @include('home.partials.testimonial')
    @include('home.partials.blog')
    @include('home.partials.subscription')
    @include('home.partials.footer')

    <script src="{{ asset('/') }}assets/home/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/jquery.appear.js"></script>
    <script src="{{ asset('/') }}assets/home/js/jquery.easing.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/modernizr.custom.13711.js"></script>
    <script src="{{ asset('/') }}assets/home/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/wow.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/progress-bar.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/count-to.js"></script>
    <script src="{{ asset('/') }}assets/home/js/YTPlayer.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/validnavs.js"></script>
    <script src="{{ asset('/') }}assets/home/js/main.js"></script>

</body>

</html>
