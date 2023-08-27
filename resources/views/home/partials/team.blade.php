<div id="team" class="team-area default-padding bg-gray bg-cover bottom-less"
    style="background-image: url({{ asset('/') }}assets/home/img/shape/33.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Team Inovatif</h2>
                    <div class="devider"></div>
                    <p>
                        KuyBisnis memiliki beberapa team ahli dalam bidang bisnis, berikut adalah team ahli
                        KuyBisnis
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="team-items">
            <div class="row">
                <!-- Single Item -->
                @foreach ($team as $item)
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}">
                                <div class="social">
                                    <input type="checkbox" id="toggle-{{ $item->id }}" class="share-toggle" hidden>
                                    <label for="toggle-{{ $item->id }}" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="https://facebook.com/search/people/?q={{ $item->akun_facebook }}"
                                        target="_blank" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/{{ $item->akun_twitter }}" target="_blank"
                                        class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://instagram.com/{{ $item->akun_instagram }}" target="_blank"
                                        class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="javascript:void(0)">{{ $item->nama }}</a></h4>
                                <span>{{ $item->jabatan }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
