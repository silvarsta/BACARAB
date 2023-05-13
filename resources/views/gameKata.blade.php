@extends('layout.mainmaster')
@section('title', 'BACARAB | GameKata')

@section('content')


    <!-- ======= GAME ======= -->
    <section id="services" class="services section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>GAMES KATA</h2>
                Syubbaakun <p>"Selamat datang di section game, tempat di mana kamu dapat belajar bahasa Arab dengan cara
                    yang
                    menyenangkan dan
                    interaktif. Nikmati berbagai permainan yang telah kami sediakan untuk membantumu menguasai
                    kosakata, tata
                    bahasa,
                    dan konsep bahasa Arab dengan mudah. Selamat belajar dan selamat bermain!" <br><br><br></p>
            </div>
            <center>
                <div class="isi col-xl-7 col-md-12 d-flex align-items-stretch mt-4 mt-xl-0 mx-3" data-aos="zoom-in"
                    data-aos-delay="300">
                    <center>
                        <div class="icon-box">
                            <div class="portfolio-img"><img src="assets/img/game-3.png" class="img-fluid" alt="">
                            </div>
                            <h4 class="mt-5"><a href="">Petualangan Kosakata Bahasa Arab dalam Game</a></h4>
                            <p>Ini didesain untuk membantu pengguna dalam memperkaya kosakata mereka dalam bahasa
                                Arab dengan cara yang menyenangkan dan interaktif</p>
                        </div>
                </div>
        </div>
    </section>
    <!-- End Game Section -->

    <!-- Video -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video</h2>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://youtu.be/c-4l5mUovgU" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-kata1.png"
                                        alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->
                    <!-- Video Preview -->
                    <div class="image-container mt-5">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://youtu.be/XVwrVHruHyE" data-effect="fadeIn">
                                <center>
                                    <img class="img-fluid" height="600" width="800" src="assets/img/vid-kata2.png"
                                        alt="alternative">
                                    <span class="video-play-button">
                                        <span></span>
                                    </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of video -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Printable</h2>
                <p>Gambar yang bisa kamu print untuk mempermudahmu dalam belajar ataupun latihan Bahasa Arab</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-12  portfolio-item filter-app">
                    <div class="portfolio-img"><img src="assets/img/printable/1.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="assets/img/printable/10.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="assets/img/printable/3.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="assets/img/printable/4.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="assets/img/printable/5.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="assets/img/printable/6.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="assets/img/printable/7.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="assets/img/printable/8.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="assets/img/printable/9.jpg" class="img-fluid" height="500"
                            width="300" alt=""></div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->
    <!-- Bagian Kamus -->
    <section id="kamus" class="kamus section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kamus</h2>
                <p>---</p>
            </div>
            <div class="row">
                @forelse ($kamus as $kamus)
                    <div class="col-lg-3 col-md-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('kamus/' . $kamus->gambar) }}" alt=""
                                    class="img-fluiid"><br>{{ $kamus->indonesia }}
                            </div>
                            <h1>{{ $kamus->arab }}<br></h1>
                            <p>"{{ $kamus->pelafalan }}"</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Bagian Kamus -->

@endsection
