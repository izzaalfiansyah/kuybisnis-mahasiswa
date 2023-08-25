<div class="banner-area text-light bg-gradient banner-style-five text-default">

    <div class="animated-wave">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>

    </div>

    <div class="container">
        <div class="double-items">
            <div class="row align-center">

                <div class="col-lg-6 info">
                    <h2 class="wow fadeInLeft" data-wow-defaul="300ms">Konsultasikan Bisnismu Sekarang Juga</h2>
                    <p class="wow fadeInLeft" data-wow-delay="500ms">
                        KuyBisnis adalah sebuah system website yang digunakan sebagai media konsultasi mahasiswa
                        dalam hal bisnis
                    </p>
                    <div class="button">
                        <a href="{{ $app_pengaturan?->link_video_homepage }}" class="relative popup-youtube video-btn"><i
                                class="fas fa-play"></i>Lihat Video</a>
                    </div>
                </div>

                <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
                    <img src="{{ asset('/') }}assets/home/img/illustration/19.png" alt="Thumb">
                </div>

            </div>
        </div>
    </div>
</div>
