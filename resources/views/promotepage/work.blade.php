@extends('layouts.promote')
@section('content')
	<!-- Page info section -->
	<section class="page-info-section set-bg"  data-setbg="{{ asset('images/bcakg.jpg') }}">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h1>ผลงานที่เคยทำ</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="{{ asset('images/paperbook.jpg') }}">
									<div class="cata new">racing</div>
								</div>
								<div class="rgi-content">
									<h5>ชื่อผลงาน</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
									<a href="#" class="comment">3 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
										<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="{{ asset('images/paperbook.jpg') }}">
									<div class="cata racing">racing</div>
								</div>
								<div class="rgi-content">
									<h5>ชื่อผลงาน</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
									<a href="#" class="comment">3 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
										<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="{{ asset('images/paperbook.jpg') }}">
									<div class="cata adventure">Adventure</div>
								</div>
								<div class="rgi-content">
									<h5>ชื่อผลงาน </h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
									<a href="#" class="comment">3 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
										<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="{{ asset('images/paperbook.jpg') }}">
									<div class="cata new">racing</div>
								</div>
								<div class="rgi-content">
									<h5>ชื่อผลงาน</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
									<a href="#" class="comment">3 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="{{ asset('images/icons/star.png') }}" alt=""></div>
										<div class="rgi-heart"><img src="{{ asset('images/icons/heart.png') }}" alt=""></div>
									</div>
								</div>
							</div>	
						</div>
		
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


@stop