@extends('layout.layout-master')

@section('body')
	
	<div class="container">
		<div class="row">
			<div id="main-carousel" class="carousel slide carousel-endowment">
				<!-- Indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#main-carousel" class="active" data-slide-to="0"></li>
					<li data-target="#main-carousel" data-slide-to="1"></li>
					<li data-target="#main-carousel" data-slide-to="2"></li>
				</ol> -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="{{asset('assets/image/sliders-1.png')}}" alt="">
						<div class="carousel-caption">
						
						</div>
					</div>
					<div class="item">
						<img src="{{asset('assets/image/sliders-1.png')}}" alt="">
						<div class="carousel-caption">
						
						</div>
					</div>
					<div class="item">
						<img src="{{asset('assets/image/sliders-1.png')}}" alt="">
						<div class="carousel-caption">
						
						</div>
					</div>
					
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#main-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#main-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<div class="row section">
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="{{asset('assets/image/about-1.png')}}" alt="">
					<div class="caption">
						<h4 class="text-center">To Care</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="{{asset('assets/image/about-2.png')}}" alt="">
					<div class="caption">
						<h4 class="text-center">To Share</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.ariatur.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="{{asset('assets/image/about-3.png')}}" alt="">
					<div class="caption">
						<h4 class="text-center">To Learn</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 last-col">
				<div class="thumbnail">
					<img src="{{asset('assets/image/about-4.png')}}" alt="">
					<div class="caption">
						<h4 class="text-center">To Funding The Future</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="news-section" class="row section">
			<div class="section-title">
				News
			</div>
			<div id="news-carousel" class="carousel slide carousel-section">
				<!-- Indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#main-carousel" class="active" data-slide-to="0"></li>
					<li data-target="#main-carousel" data-slide-to="1"></li>
					<li data-target="#main-carousel" data-slide-to="2"></li>
				</ol> -->

				<!-- Wrapper for slides -->

				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption-date">
									12<br/>Apr
								</div>
								<div class="caption-heading">
									Lorem ipsum dolor sit amet.
								</div>
								<div class="caption">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nulla natus nihil eaque cupiditate sequi necessitatibus. Hic, natus, quisquam, vel maxime quibusdam magni a officia quod debitis eaque sequi consectetur?</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, totam, repudiandae, reiciendis, at aut dignissimos quaerat accusamus culpa ipsa error voluptatem eligendi odit a est eos optio distinctio perspiciatis earum!</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aperiam, illum, repellendus, non voluptatibus maxime reprehenderit porro error voluptate ex iure dignissimos repudiandae aspernatur sit minus nihil molestiae vero possimus.</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nulla natus nihil eaque cupiditate sequi necessitatibus. Hic, natus, quisquam, vel maxime quibusdam magni a officia quod debitis eaque sequi consectetur?</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, totam, repudiandae, reiciendis, at aut dignissimos quaerat accusamus culpa ipsa error voluptatem eligendi odit a est eos optio distinctio perspiciatis earum!</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aperiam, illum, repellendus, non voluptatibus maxime reprehenderit porro error voluptate ex iure dignissimos repudiandae aspernatur sit minus nihil molestiae vero possimus.</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nulla natus nihil eaque cupiditate sequi necessitatibus. Hic, natus, quisquam, vel maxime quibusdam magni a officia quod debitis eaque sequi consectetur?</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, totam, repudiandae, reiciendis, at aut dignissimos quaerat accusamus culpa ipsa error voluptatem eligendi odit a est eos optio distinctio perspiciatis earum!</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail news">
								<img src="{{asset('assets/image/about-4.png')}}" alt="">
								<div class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aperiam, illum, repellendus, non voluptatibus maxime reprehenderit porro error voluptate ex iure dignissimos repudiandae aspernatur sit minus nihil molestiae vero possimus.</div>
								<a href="" class="read-more pull-right">Read More</a>
							</div>
						</div>
					</div>
					
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#news-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#news-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			
			
		</div>

		<div id="testimonial-section" class="row section">
			<div class="section-title">
				Testimonial
			</div>

			<div id="testimonial-carousel" class="carousel slide carousel-section">
				<!-- Indicators -->
				<!-- <ol class="carousel-indicators">
					<li data-target="#main-carousel" class="active" data-slide-to="0"></li>
					<li data-target="#main-carousel" data-slide-to="1"></li>
					<li data-target="#main-carousel" data-slide-to="2"></li>
				</ol> -->

				<!-- Wrapper for slides -->

				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-6">
				<div class="media">
					<img src="{{asset('assets/image/about-1.png')}}" width="100px" height="100px" alt="" class="media-object col-md-4">
					<div class="media-body col-md-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, neque, natus, incidunt repellat praesentium corporis veritatis dolorum aperiam consectetur mollitia quibusdam iure cumque harum autem eos vero officiis saepe esse.

						<div class="media-footer">
							Student Name, Major
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="media">
					<img src="{{asset('assets/image/about-1.png')}}" width="100px" height="100px" alt="" class="media-object col-md-4">
					<div class="media-body col-md-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, neque, natus, incidunt repellat praesentium corporis veritatis dolorum aperiam consectetur mollitia quibusdam iure cumque harum autem eos vero officiis saepe esse.

						<div class="media-footer">
							Student Name, Major
						</div>
					</div>
					
				</div>
			</div>
					</div>
					<div class="item">
						<div class="col-md-6">
				<div class="media">
					<img src="{{asset('assets/image/about-1.png')}}" width="100px" height="100px" alt="" class="media-object col-md-4">
					<div class="media-body col-md-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, neque, natus, incidunt repellat praesentium corporis veritatis dolorum aperiam consectetur mollitia quibusdam iure cumque harum autem eos vero officiis saepe esse.

						<div class="media-footer">
							Student Name, Major
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="media">
					<img src="{{asset('assets/image/about-1.png')}}" width="100px" height="100px" alt="" class="media-object col-md-4">
					<div class="media-body col-md-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, neque, natus, incidunt repellat praesentium corporis veritatis dolorum aperiam consectetur mollitia quibusdam iure cumque harum autem eos vero officiis saepe esse.

						<div class="media-footer">
							Student Name, Major
						</div>
					</div>
					
				</div>
			</div>
					</div>
					<div class="item">
						<div class="col-md-6">
				<div class="media">
					<img src="{{asset('assets/image/about-1.png')}}" width="100px" height="100px" alt="" class="media-object col-md-4">
					<div class="media-body col-md-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, neque, natus, incidunt repellat praesentium corporis veritatis dolorum aperiam consectetur mollitia quibusdam iure cumque harum autem eos vero officiis saepe esse.

						<div class="media-footer">
							Student Name, Major
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="media">
					<img src="{{asset('assets/image/about-1.png')}}" width="100px" height="100px" alt="" class="media-object col-md-4">
					<div class="media-body col-md-8">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, neque, natus, incidunt repellat praesentium corporis veritatis dolorum aperiam consectetur mollitia quibusdam iure cumque harum autem eos vero officiis saepe esse.

						<div class="media-footer">
							Student Name, Major
						</div>
					</div>
					
				</div>
			</div>
					</div>
					
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#testimonial-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#testimonial-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>																							
@stop

@section('js')
	<script type="text/javascript">
		$(function(){
			$('.carousel').carousel({
				interval: 2000
			});
		});
	</script>
@stop