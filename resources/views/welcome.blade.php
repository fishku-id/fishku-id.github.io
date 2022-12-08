@extends('layouts.app')
@section('content')
        <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-10 col-xs-12">
                        <div class="contents">
                            <h2 class="head-title">FI$HKU<br>Ciptakan Pasarmu!</h2>
                            <p>Digitalisasi penjualan ikan merupakan salah satu alternatif untuk memudahkan penjualan ikan. Beberapa fitur seperti<br>jual beli ikan dan deteksi kesegaran hadir di aplikasi ini.<br>Ayo unduh sekarang!</p>
                            <div class="header-button">
                                <!-- <a href="https://play.google.com/store/apps/details?id=id.fishku.fisherseller" class="btn btn-common">Fishku Partner</i>
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=id.fishku.consumer" class="btn btn-common">Fishku Consumer</i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="intro-img">
                            <img class="img-fluid" src="assets/img/mobile-fishku.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding-services">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Fishku memiliki fitur yang dapat membantu<br>penjualan ikan di Indonesia</h2>
                <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="row">
                <!-- Services item -->
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon">
                            <iconify-icon icon="ant-design:shopping-cart-outlined" style="color: white;" width="50" height="50"></iconify-icon>
                        </div>
                        <div class="services-content">
                            <h3><a>Pembelian Ikan</a></h3>
                            <p>Dilakukan oleh pedagang ikan, restoran, hotel dan pelaku bisnis lainnya.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <iconify-icon icon="bx:store" style="color: white;" width="50" height="50"></iconify-icon>
                        </div>
                        <div class="services-content">
                            <h3><a>Penjualan Ikan</a></h3>
                            <p>Dilakukan oleh penjual ikan dan pembudidaya ikan.</p>
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon">
                            <iconify-icon icon="clarity:fish-line" style="color: white;" width="50" height="50"></iconify-icon>
                        </div>
                        <div class="services-content">
                            <h3><a>Kesegaran ikan terjamin</a></h3>
                            <p>Untuk ikan bandeng, tongkol, dan kembung berdasarkan bagian ikan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- News Section -->
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="sec-heading text-center"></div>
                        <h2>Berita</h2>
                        <p>Apa yang sedang terjadi ya, Fishitors?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section End -->

    <!-- Team slider Start -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="sec-heading text-center">
                        <h2>Fishmates</h2>
                        <p>Selalu siap untuk membantu kamu, Fishitors!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-slider owl-carousel">
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/muthia.png"></div>
                                <div class="info-area">
                                    <h6> <b>Muthia Farah Hanifa</b></h6>
                                    <p>Project Manager</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/rama1.png"></div>
                                <div class="info-area">
                                    <h6> <b>Anugrah Tri Ramadhan</b></h6>
                                    <p>Machine Learning Engineer</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/rhamdan.png"></div>
                                <div class="info-area">
                                    <h6> <b>Rhamdan Syahrul Mubarak</b></h6>
                                    <p>Machine Learning Engineer</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/imma.png"></div>
                                <div class="info-area">
                                    <h6><b>Ni'matul Husna</b></h6>
                                    <p>Marketing & Business</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/nabila.png"></div>
                                <div class="info-area">
                                    <h6><b>Nabila Apriliana Widiyono</b></h6>
                                    <p>Marketing & Business</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/disti.png"></div>
                                <div class="info-area">
                                    <h6><b>Adisti Anjani Putri</b></h6>
                                    <p>Software Engineer - Cloud</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/wika.png"></div>
                                <div class="info-area">
                                    <h6><b>Prakoso Dwika Prihambodo</b></h6>
                                    <p>Software Engineer - Cloud</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/etin.png"></div>
                                <div class="info-area">
                                    <h6><b>Rossario Catherine Elfrida</b></h6>
                                    <p>Software Engineer - Cloud</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/rahel.png"></div>
                                <div class="info-area">
                                    <h6><b>Rahel Kristina Prajnyawati</b></h6>
                                    <p>Software Engineer - Cloud</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/fachri.png"></div>
                                <div class="info-area">
                                    <h6><b>Fachridan Tio Mu'afa</b></h6>
                                    <p>Software Engineer - Android</p>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid " src="assets/img/team/rohman.png"></div>
                                <div class="info-area">
                                    <h6><b>Muhammad Fatkhu Rohman</b></h6>
                                    <p>Software Engineer - Android</p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Fishku akan hadir di app store dan play store -->
<section id="download">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sec-heading text-left"></div>
                    <h3>
                        FI$HKU AKAN HADIR DI APP STORE DAN PLAY STORE
                    </h3>
                    <p>Bersama Fishku mari kita
                        #CiptakanPasarmu #DiFishkuPastiSegar #SemuaMakanIkan
                    </p>
            </div>
        </div>
    </div>

</section>
<!-- End of Fishku akan hadir di app store dan play store -->

<!-- Kata Mereka -->
<section id="testi">
    <div class="container">
        <div class="row">
            <div class="lg-col 8">
                <div class="sec-heading text-left">
                    <h3>Kata mereka...</h3>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End of Kata Mereka -->
@endsection