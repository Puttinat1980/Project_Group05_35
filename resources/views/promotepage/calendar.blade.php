@extends('layouts.promote')
@section('content')


<!-- Page info section -->
<section class="page-info-section set-bg" data-setbg="{{ asset('images/bcakg.jpg') }}">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h1>ปฏิทิน</h1>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	
		<div class="community-warp spad">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="community-top-title"></h3>
					</div>
					
					<!-- <div class="col-md-6 text-lg-right">
						<form class="community-filter">
							<label for="fdf5">เลื่อกเดือน</label>
							<select id="fdf5">
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
								<option value="#">Everything</option>
							</select>
						</form>
					</div> -->
				</div>
				<ul class="community-post-list">
					
					<li>
						<div class="community-post">
							
							<div class="post-content">
								<h5>Partik Williams</h5>
								<p>Lorem ipsum dolor sit amet, cdictum nisl onsectetur adipisc ing ipsum dolor sit ame. Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.Donec venenatis at eros sit amet aliquam. Donec vel orci efficitur, dictum nisl vitae, scelerisque nibh. Curabitur eget ipsum pulvinar nunc gravida interdum. </p>
								<div class="attachment-file">
									<img src="img/attachment.jpg" alt="">
								</div>
							</div>
						</div>
					</li>
					
					
					
					
				</ul>
				
				
			</div>
		</div>
	</section>
	<!-- Page section end -->


@stop