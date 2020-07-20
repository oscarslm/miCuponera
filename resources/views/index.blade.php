@extends('layouts.master')

@section('title', 'Inicio')
@section('description', '')
@section('keywords', '')

@section('slider')
<section id="slider" class="slider-element slider-parallax" style="background-color: #222;">

	<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

		<a href="#"><img src="https://via.placeholder.com/1280x400" alt="Slider"></a>
		<a href="#"><img src="https://via.placeholder.com/1280x400" alt="Slider"></a>
		<a href="#"><img src="https://via.placeholder.com/1280x400" alt="Slider"></a>
		<a href="#"><img src="https://via.placeholder.com/1280x400" alt="Slider"></a>

	</div>

</section>
@stop

@section('content')

<div class="container clearfix">
	<div class="heading-block center border-bottom-0 bottommargin-lg clearfix">
		<h2 class="nott mb-4" style="font-size: 44px; line-height: 1.2; letter-spacing: -1px;">¿Qué es <span>{{ config('app.name') }}</span>?</h2>
		<span>Es la plataforma web de ofertas del día que presenta cupones de descuentos utilizables en compañías locales y nacionales. <strong>{{ config('app.name') }}</strong> fue lanzado en julio de 2020 en la CDMX, México.</span>
	</div>

	<div class="heading-block center nobottomborder clearfix">
		<h2 class="nott" style="font-size: 44px; line-height: 1.2; letter-spacing: -1px;"><span>Cupones</span> Destacados</h2>
	</div>

	<div class="row">
		<!-- Classic -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5">
			<div class="iportfolio p-2">
				<div class="portfolio-image shadow-lg">
					<a href="{{ route('index') }}">
						<img src="http://via.placeholder.com/600x400" alt="Live Preview">
					</a>
				</div>
				<div class="portfolio-desc center pt-4 nobottompadding">
					<h3><a href="{{ route('index') }}">Classic</a></h3>
				</div>
			</div>
		</div>
		<!-- Classic -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5">
			<div class="iportfolio p-2">
				<div class="portfolio-image shadow-lg">
					<a href="{{ route('index') }}">
						<img src="http://via.placeholder.com/600x400" alt="Live Preview">
					</a>
				</div>
				<div class="portfolio-desc center pt-4 nobottompadding">
					<h3><a href="{{ route('index') }}">Classic</a></h3>
				</div>
			</div>
		</div>
		<!-- Classic -->
		<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5">
			<div class="iportfolio p-2">
				<div class="portfolio-image shadow-lg">
					<a href="{{ route('index') }}">
						<img src="http://via.placeholder.com/600x400" alt="Live Preview">
					</a>
				</div>
				<div class="portfolio-desc center pt-4 nobottompadding">
					<h3><a href="{{ route('index') }}">Classic</a></h3>
				</div>
			</div>
		</div>
		<!-- Classic -->
		<div class="offset-lg-0 col-lg-3 offset-md-4 col-md-4 col-sm-6 col-12 mb-5">
			<div class="iportfolio p-2">
				<div class="portfolio-image shadow-lg">
					<a href="{{ route('index') }}">
						<img src="http://via.placeholder.com/600x400" alt="Live Preview">
					</a>
				</div>
				<div class="portfolio-desc center pt-4 nobottompadding">
					<h3><a href="{{ route('index') }}">Classic</a></h3>
				</div>
			</div>
		</div>
	</div><!--.row-->
</div><!--.container-->
@stop