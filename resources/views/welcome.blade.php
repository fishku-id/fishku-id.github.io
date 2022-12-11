@extends('layouts.app') @section('content')
<!-- Header Area wrapper Starts -->
<header id="header-wrap">
	<!-- Hero Area Start -->
	<div id="hero-area" class="hero-area-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
					<div class="contents">
						<h2 class="head-title">FI$HKU<br>Ciptakan Pasarmu!</h2>
						<p>Digitalisasi penjualan ikan merupakan salah satu alternatif untuk memudahkan penjualan ikan. Beberapa fitur seperti
							<br>jual beli ikan dan deteksi kesegaran hadir di aplikasi ini.
							<br>Ayo unduh sekarang!</p>
						<div class="header-button"> <a href="https://play.google.com/store/apps/details?id=id.fishku.fisherseller" class="btn btn-common">Fishku Partner</i>
                                </a> <a href="https://play.google.com/store/apps/details?id=id.fishku.consumer" class="btn btn-common">Fishku Consumer</i>
                                </a> </div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
					<div class="intro-img"> <img class="img-fluid" src="assets/img/mobile-fishku.png" alt=""> </div>
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
		<div class="sec-heading text-center">
			<h2>Fun Fact</h2>
			<!-- <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div> -->
			<h5>Fishitors tau gak sihhh?</h5> </div>
		<!-- carousel -->
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active"> <img src="assets/img/funfact/croppednatunas.jpg" class="d-block w-100 h-funfact" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h-funfact>Some representative placeholder content for the first slide.</h-funfact>
					</div>
				</div>
				<div class="carousel-item"> <img src="assets/img/funfact/tunaocean.jpg" class="d-block w-100 h-funfact" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h-funfact>Some representative placeholder content for the second slide.</h-funfact>
					</div>
				</div>
				<div class="carousel-item"> <img src="assets/img/funfact/sea.jpg" class="d-block w-100 h-funfact" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h-funfact>Some representative placeholder content for the third slide.</h-funfact>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
		</div>
		<!-- carousel -->
		<!-- <div class="row"> -->
		<!-- Services item -->
		<!-- <div class="col-md-4 col-lg-5 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.3s"> -->
		<!-- <div class="icon">
                            <iconify-icon icon="ant-design:shopping-cart-outlined" style="color: white;" width="50" height="50"></iconify-icon>
                        </div> -->
		<!-- <div class="services-content">
                            <p>Gambarnya Disini</p>
                        </div>
                    </div>
                </div> -->
		<!-- Services item -->
		<!-- <div class="col-md-4 col-lg-7 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s"> -->
		<!-- <div class="icon">
                            <iconify-icon icon="bx:store" style="color: white;" width="50" height="50"></iconify-icon>
                        </div> -->
		<!-- <div class="news-content"> -->
		<!-- <h6>Apa Itu Ekonomi Biru???</h6> -->
		<!-- <p>Menurut Bank Dunia, ekonomi biru adalah “pemanfaatan sumber daya laut yang berwawasan lingkungan untuk mendukung pertumbuhan ekonomi, kesejahteraan, dan mata pencaharian sekaligus pelestarian ekosistem laut”.</p> -->
		<!-- <p>Sumber: BKPM</p> -->
		<!-- </div>
                    </div>
                </div> -->
		<!-- </div>
        </div> -->
</section>
<!-- News Section End -->
<!-- Team slider Start -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="sec-heading text-center">
					<h2>Fishmates</h2> </div>
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
<!-- Download Section -->
<!-- <section id="news">
        <div class="container">
            <div class="sec-heading text-center">
                <h2> FI$HKU AKAN HADIR DI APP STORE DAN PLAY STORE</h2> -->
<!-- <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div> -->
<!-- <h5>Bersama Fishku mari kita
                        #CiptakanPasarmu #DiFishkuPastiSegar #SemuaMakanIkan</h5>
            </div>
            <div class="row"> -->
<!-- Services item -->
<!-- <div class="col-md-4 col-lg-5 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.3s"> -->
<!-- <div class="icon">
                            <iconify-icon icon="ant-design:shopping-cart-outlined" style="color: white;" width="50" height="50"></iconify-icon>
                        </div> -->
<!-- <div class="services-content">
                            <p>Gambarnya Disini</p>
                        </div>
                    </div>
                </div> -->
<!-- Services item -->
<!-- <div class="col-md-4 col-lg-7 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s"> -->
<!-- <div class="icon">
                            <iconify-icon icon="bx:store" style="color: white;" width="50" height="50"></iconify-icon>
                        </div> -->
<!-- <div class="news-content">
                            <h6>Apa Itu Ekonomi Biru???</h6>
                            <p>Menurut Bank Dunia, ekonomi biru adalah “pemanfaatan sumber daya laut yang berwawasan lingkungan untuk mendukung pertumbuhan ekonomi, kesejahteraan, dan mata pencaharian sekaligus pelestarian ekosistem laut”.</p>
                            <p>Sumber: BKPM</p>
                        </div>
                    </div>
                </div> -->
<!-- </div>
        </div>
    </section> -->
<!-- Download Section End -->
<!-- Kata Mereka -->
<section id="testi">
	<div class="container">
		<div class="row">
			<div class="lg-col 8">
				<div class="sec-heading text-left">
					<h3>Kata mereka...</h3> </div>
			</div>
		</div>
	</div>
</section>
<!-- End of Kata Mereka -->@endsection