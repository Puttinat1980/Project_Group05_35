@extends('layouts.promote')
@section('content')

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


	<!-- Page info section -->
	<section class="page-info-section set-bg"  data-setbg="{{ asset('images/bcakg.jpg') }}">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h1>คลังสินค้า </h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="{{ asset('images/paperbook.jpg') }}">
							
						</div>
						<div class="review-text">
							<h4>กระดาษหนังสือ</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="{{ asset('images/poster.jpg') }}">
						</div>
						<div class="review-text">
							<h4>โปสเตอร์</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg"data-setbg="{{ asset('images/milkcarton.jpg') }}">
						</div>
						<div class="review-text">
							<h4>กล่องนม</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg"data-setbg="{{ asset('images/sticker.jpg') }}">
						</div>
						<div class="review-text">
							<h4>สติ๊กเกอร์</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="{{ asset('images/brochure.jpg') }}">
						</div>
						<div class="review-text">
							<h4>เบอร์ชัวร์</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				
	</section>
	<!-- Page section end -->

@stop
