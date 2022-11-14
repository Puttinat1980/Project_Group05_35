@extends('layouts.promote')
@section('content')
<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<div class="hs-item set-bg"  data-setbg="{{ asset('images/bcakg.jpg') }}">
			<div class="hs-text">
				<div class="container">
					<h2><span>อภิสรา</span>การพิมพ์ </h2>
					<h2>APISARA<span>PRINTING</span> </h2>
					<h2><span>LIMITED</span>PARTNERSHOP </h2>

					<a href="#" class="site-btn">สมัคสมาชิก</a>
				</div>
			</div>
		</div>
		<div class="hs-item set-bg" data-setbg="{{ asset('images/bcakg.jpg') }}">
			<div class="hs-text">
				<div class="container">
					<h2><span>อภิสรา</span>การพิมพ์ </h2>
					<h2>APISARA<span>PRINTING</span> </h2>
					<h2><span>LIMITED</span>PARTNERSHOP </h2>
					<a href="#" class="site-btn">สมัคสมาชิก</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero section end -->


<!-- Latest news section -->
<div class="latest-news-section">
	<div class="ln-title">ประเภทสินค้า</div>
	<div class="news-ticker">
		<div class="news-ticker-contant">
			<div class="nt-item"><span class="new">กระดาษหนังสือ</span> </div>
			<div class="nt-item"><span class="new">โปสเตอร์</span></div>
			<div class="nt-item"><span class="new">เบอร์ชัวร์</span> </div>
			<div class="nt-item"><span class="strategy">กล่องนม</span> </div>
			<div class="nt-item"><span class="racing">สติ๊กเกอร์</span> </div>



		</div>
	</div>
</div>
<!-- Latest news section end -->


<!-- Feature section -->
<section class="feature-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 p-0">
				<div class="feature-item set-bg"data-setbg="{{ asset('images/paperbook.jpg') }}">
					<span class="cata new">กระดาษหนังสือ</span>
					<div class="fi-content text-white">
						<h5><a href="#"></a></h5>
						<p></p>
						<a href="#" class="fi-comment">3 Comments</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-0">
				<div class="feature-item set-bg" data-setbg="{{ asset('images/milkcarton.jpg') }}">
					<span class="cata strategy">กล่องนม</span>
					<div class="fi-content text-white">
						<h5><a href="#"></a></h5>
						<p> </p>
						<a href="#" class="fi-comment">3 Comments</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-0">
				<div class="feature-item set-bg" data-setbg="{{ asset('images/poster.jpg') }}">
					<span class="cata new">โปสเตอร์</span>
					<div class="fi-content text-white">
						<h5><a href="#"></a></h5>
						<p></p>
						<a href="#" class="fi-comment">3 Comments</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 p-0">
				<div class="feature-item set-bg"  data-setbg="{{ asset('images/sticker.jpg') }}">
					<span class="cata racing">สติ๊กเกอร์</span>
					<div class="fi-content text-white">
						<h5><a href="#"></a></h5>
						<p> </p>
						<a href="#" class="fi-comment">3 Comments</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-lg-3 ">
			<div class="feature-item set-bg" data-setbg="{{ asset('images/brochure.jpg') }}">
				<span class="cata new">เบอร์ชัวร์</span>
				<div class="fi-content text-white">
					<h5><a href="#"></a></h5>
					<p> </p>
					<a href="#" class="fi-comment">3 Comments</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Feature section end -->

<!-- Page section -->
<section class="page-section review-page spad">
	<div class="container">
		<div class="section-title">
			<h2>คลังสินค้า</h2>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="review-item">
					<div class="review-cover set-bg"data-setbg="{{ asset('images/paperbook.jpg')}}">

					</div>
					<div class="review-text">
						<h4>กระดาษหนังสือ</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="review-item">
					<div class="review-cover set-bg" data-setbg="{{ asset('images/poster.jpg')}}">
					</div>
					<div class="review-text">
						<h4>โปสเตอร์</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="review-item">
					<div class="review-cover set-bg" data-setbg="{{ asset('images/milkcarton.jpg')}}">
					</div>
					<div class="review-text">
						<h4>กล่องนม</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="review-item">
					<div class="review-cover set-bg"data-setbg="{{ asset('images/sticker.jpg')}}">
					</div>
					<div class="review-text">
						<h4>สติ๊กเกอร์</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="review-item">
					<div class="review-cover set-bg" data-setbg="{{ asset('images/brochure.jpg')}}">
					</div>
					<div class="review-text">
						<h4>เบอร์ชัวร์</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
			</div>

</section>
<!-- Page section end -->

<!-- Recent game section  -->
<section class="recent-game-section spad set-bg">
	<div class="container">
		<div class="section-title">
			<h2>พนักงานดีเด่น</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="recent-game-item">
					<div class="rgi-thumb set-bg" data-setbg="{{ asset('images/mem.jpg') }}">
						<div class="cata new">best</div>
					</div>
					<div class="rgi-content">
						<h5>Suspendisse ut justo tem por, rutrum</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>

						<div class="rgi-extra">
							<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
							<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="recent-game-item">
					<div class="rgi-thumb set-bg"data-setbg="{{ asset('images/mem.jpg') }}">
						<div class="cata new">best</div>
					</div>
					<div class="rgi-content">
						<h5>Susce pulvinar metus nulla, vel facilisis sem </h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>

						<div class="rgi-extra">
							<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
							<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="recent-game-item">
					<div class="rgi-thumb set-bg" data-setbg="{{ asset('images/mem.jpg') }}">
						<div class="cata new">best</div>
					</div>
					<div class="rgi-content">
						<h5>Suspendisse ut justo tem por, rutrum</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>

						<div class="rgi-extra">
							<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
							<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Recent game section end -->


<!-- Tournaments section -->
<section class="recent-game-section spad set-bg">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="tournament-item mb-6 mb-lg-6">
					<div class="ti-notic">เครื่องพิมพ์เครื่องแรกในโลก</div>
					<div class="ti-content">
						<div class="ti-thumb set-bg"  data-setbg="{{ asset('images/prit.png') }}"></div>
						<div class="ti-text">
							<h4>Koenig 1814</h4>
							<ul>
								<li><span>คิดค้นขึ้นในปี </span> 1802</li>
								<li><span>ผู้ผลิตคิดค้นโดย</span> Friedrich Koenig และ Andreas BauerWikipedia </li>
								<li><span>บริษัท</span>Koenig & BauerWikipedia </li>

							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- Tournaments section bg -->

@stop
