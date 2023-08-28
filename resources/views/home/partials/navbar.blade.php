<nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed white  no-background">


    <div class="container d-flex justify-content-between align-items-center">

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset($app_pengaturan?->logo_aplikasi ?: 'favicon.ico') }}" class="logo logo-display"
                    alt="Logo">
                <img src="{{ asset($app_pengaturan?->logo_aplikasi ?: 'favicon.ico') }}" class="logo logo-scrolled"
                    alt="Logo">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">

            <img src="{{ asset($app_pengaturan?->logo_aplikasi ?: 'favicon.ico') }}" alt="Logo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-times"></i>
            </button>

            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="smooth-menu">
                    <a href="#home">Home</a>

                </li>

                <li>
                    <a class="smooth-menu" href="#features">Features</a>
                </li>
                <li>
                    <a class="smooth-menu" href="#about">About</a>
                </li>
                <li>
                    <a class="smooth-menu" href="#process">Process</a>
                </li>
                <li>
                    <a class="smooth-menu" href="#team">Team</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

        <div class="attr-right">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="button"><a href="/login">Login</a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>

        <!-- Main Nav -->
    </div>
    <!-- Overlay screen for menu -->
    <div class="overlay-screen"></div>
    <!-- End Overlay screen for menu -->
</nav>
