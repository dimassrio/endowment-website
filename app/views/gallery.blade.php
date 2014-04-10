@extends('layout.layout-master')

@section('body')
	<div class="container">
		<div class="row gallery-row">
			<div class="col-md-4">
				<div class="thumbnail news">
					<a href="{{asset('assets/image/sliders-1.png')}}" data-toggle="olightbox">
						<img src="{{asset('assets/image/about-4.png')}}" alt="">
					</a>
					<div class="caption-date">
						12<br/>APR
					</div>

					<div class="caption">
					<strong>Image</strong> Title
					<p>category</p>
					</div>
					<a href="" class="read-more pull-right">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail news">
					<a href="{{asset('assets/image/sliders-1.png')}}" data-toggle="olightbox">
						<img src="{{asset('assets/image/about-4.png')}}" alt="">
					</a>
					<div class="caption-date">
						12<br/>APR
					</div>

					<div class="caption">
					<strong>Image</strong> Title
					<p>category</p>
					</div>
					<a href="" class="read-more pull-right">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail news">
					<a href="{{asset('assets/image/sliders-1.png')}}" data-toggle="olightbox">
						<img src="{{asset('assets/image/about-4.png')}}" alt="">
					</a>
					<div class="caption-date">
						12<br/>APR
					</div>

					<div class="caption">
					<strong>Image</strong> Title
					<p>category</p>
					</div>
					<a href="" class="read-more pull-right">Read More</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail news">
					<a href="{{asset('assets/image/sliders-1.png')}}" data-toggle="olightbox">
						<img src="{{asset('assets/image/about-4.png')}}" alt="">
					</a>
					<div class="caption-date">
						12<br/>APR
					</div>

					<div class="caption">
					<strong>Image</strong> Title
					<p>category</p>
					</div>
					<a href="" class="read-more pull-right">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail news">
					<a href="{{asset('assets/image/sliders-1.png')}}" data-toggle="olightbox">
						<img src="{{asset('assets/image/about-4.png')}}" alt="">
					</a>
					<div class="caption-date">
						12<br/>APR
					</div>

					<div class="caption">
					<strong>Image</strong> Title
					<p>category</p>
					</div>
					<a href="" class="read-more pull-right">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail news">
					<a href="{{asset('assets/image/sliders-1.png')}}" data-toggle="olightbox">
						<img src="{{asset('assets/image/about-4.png')}}" alt="">
					</a>
					<div class="caption-date">
						12<br/>APR
					</div>

					<div class="caption">
					<strong>Image</strong> Title
					<p>category</p>
					</div>
					<a href="" class="read-more pull-right">Read More</a>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<ul class="pagination pagination-endowment">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>
</div>

@stop