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
						<!-- <div class="header-button"> <a href="https://play.google.com/store/apps/details?id=id.fishku.fisherseller" class="btn btn-common">Fishku Partner</i>
                                </a> <a href="https://play.google.com/store/apps/details?id=id.fishku.consumer" class="btn btn-common">Fishku Consumer</i>
                                </a>  -->
						<!-- </div> -->
						<div class="header-button"> <a href="https://instagram.com/fishku.id" class="btn btn-common">Find us on Instagram</i>
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
					<div class="icon"> <img src="assets/img/feature/consumer-removebg-preview.png" width="120">
						<!-- <iconify-icon icon="ant-design:shopping-cart-outlined" style="color: white;" width="50" height="50"></iconify-icon> -->
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
					<div class="icon"> <img src="assets/img/feature/seller-removebg-preview.png" width="120">
						<!-- <iconify-icon icon="bx:store" style="color: white;" width="50" height="50"></iconify-icon> -->
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
					<div class="icon"> <img src="assets/img/feature/deteksi-removebg-preview.png" width="120">
						<!-- <iconify-icon icon="clarity:fish-line" style="color: white;" width="50" height="50"></iconify-icon> -->
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
<!-- News Section End -->

<!-- funfact session -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="sec-heading text-center">
					<h2>Fun Fact</h2>
					<p>Fishitors tau gasih?</p>
				</div>
			</div>
		</div>
	</div>
	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="mask flex-center">
					<div class="container">
						<div class="row align-items-center" style="margin-top: 30px">
							<div class="col-md-7 col-12 order-md-1 order-2">
								<p style="margin-left: 70px">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum
									<br> necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
							</div>
							<div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/img/funfact/croppednatunas.jpg" class="mx-auto" alt="slide" style="height: 225px; width: 400px"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="mask flex-center">
					<div class="container">
						<div class="row align-items-center" style="margin-top: 30px">
							<div class="col-md-7 col-12 order-md-1 order-2">
								<p style="margin-left: 70px">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum
									<br> necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
							</div>
							<div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/img/funfact/tunaocean.jpg" class="mx-auto" alt="slide" style="height: 225px; width: 400px"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="mask flex-center">
					<div class="container">
						<div class="row align-items-center" style="margin-top: 30px">
							<div class="col-md-7 col-12 order-md-1 order-2">
								<p style="margin-left: 70px">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum
									<br> necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
							</div>
							<div class="col-md-5 col-12 order-md-2 order-1"><img src="assets/img/funfact/sea.jpg" class="mx-auto" alt="slide" style="height: 225px; width: 400px"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only" style="font-size: 30px">🡸</span> </a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only" style="font-size: 30px">🡺</span> </a>
	</div>
</section>
<!--slide end-->

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
<!-- download section -->
<section>
<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
			</div>
		</div>
	</div>
	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="mask flex-center">
					<div class="container">
						<div class="row align-items-center" style="margin-top: 30px">
						<div class="col-md-7 col-12 order-md-1 order-2"><img src="assets/img/funfact/croppednatunas.jpg" class="mx-auto" alt="slide" style="height: 225px; width: 400px"></div>
							<div class="col-md-5 col-12 order-md-2 order-1">
								<h3>
									FI$HKU TELAH HADIR DI <br>
									APP STORE DAN PLAY STORE
								</h3>
								<p>Bersama Fishku mari kita <br>
									#CiptakanPasarmu #DiFishkuPastiSegar <br>
									#SemuaMakanIkan</p>
									<div class="header-button">

									<a href="" target="_blank" rel="noreferrer">
									<img alt="ica" src="assets/img/icon/icon-ios.webp" class="icon-download css-2gb014 " style="height:50px" draggable="false">
                                </a>

                                <a href="https://play.google.com/store/apps/details?id=id.fishku.consumer" target="_blank" rel="noreferrer">
									<img alt="ica" src="assets/img/icon/icon-gplay.webp" class="icon-download css-2gb014" style="height:50px" draggable="false">
                                </a>
                            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- end of download section -->
<section id="testimonial" class="testimonial section-padding">
	<div style="margin: 30px 60px">
		<h-testimonial> Kata Mereka...</h-testimonial>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
					<div class="item">
						<div class="testimonial-item">
							<div class="img-thumb"> <img src="assets/img/testimonial/img1.jpg" alt=""> </div>
							<div class="info">
								<h2><a href="">David Smith</a></h2>
								<h3><a href="">Creative Head</a></h3> </div>
							<div class="content">
								<p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-item">
							<div class="img-thumb"> <img src="assets/img/testimonial/img2.jpg" alt=""> </div>
							<div class="info">
								<h2><a href="">Domeni GEsson</a></h2>
								<h3><a href="">Awesome Technology co.</a></h3> </div>
							<div class="content">
								<p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-item">
							<div class="img-thumb"> <img src="assets/img/testimonial/img3.jpg" alt=""> </div>
							<div class="info">
								<h2><a href="">Dommini Albert</a></h2>
								<h3><a href="">Nesnal Design co.</a></h3> </div>
							<div class="content">
								<p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonial-item">
							<div class="img-thumb"> <img src="assets/img/testimonial/img4.jpg" alt=""> </div>
							<div class="info">
								<h2><a href="">Fernanda Anaya</a></h2>
								<h3><a href="">Developer</a></h3> </div>
							<div class="content">
								<p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Testimonial Section End -->@endsection