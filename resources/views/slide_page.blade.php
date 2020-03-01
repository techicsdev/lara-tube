@extends('layouts.app1')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="false">
	<div class="carousel-inner">
		<div class="carousel-item active">
		   <div style="background-image:url('images/Page-2-bg.jpg'); background-size:cover; ">
		        <header class="text-right" style="height: 10vh;">
		            <img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
		        </header>
		        <div class="min-height text-center">
		            <h3 class="welcome-text1"><img src="{{ asset('images/bongbondu-image-1.jpg') }}" alt="" width="250px"></h3>
		        </div>
		        <footer style="height: 10vh;">
		            <div class="text-center pb-3">
		              <img src="{{ asset('images/janata_bank-logo.png') }}" alt="" style="width: 164px">
		            </div>
		        </footer>
		   </div>
		</div>
		<div class="carousel-item">
		   <div style="background-image:url('images/Page-3-bg.jpg'); background-size:cover; ">
		        <header class="text-right" style="height: 10vh;">
		            <img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
		        </header>
		        <div class="min-height text-center">
		            <h3 class="welcome-text1"><img src="{{ asset('images/bongbondu-image-1.jpg') }}" alt="" width="250px"></h3>
		        </div>
		        <footer style="height: 10vh;">
		            <div class="text-center pb-3">
		              <img src="{{ asset('images/janata_bank-logo.png') }}" alt="" style="width: 164px">
		            </div>
		        </footer>
		   </div>
		</div>
		<div class="carousel-item">
		   <div style="background-image:url('images/Page-4-bg.jpg'); background-size:cover; ">
		        <header class="text-right" style="height: 10vh;">
		            <img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
		        </header>
		        <div class="min-height text-center">
		            <h3 class="welcome-text1"><img src="{{ asset('images/bongbondu-image-1.jpg') }}" alt="" width="250px"></h3>
		        </div>
		        <footer style="height: 10vh;">
		            <div class="text-center pb-3">
		              <img src="{{ asset('images/janata_bank-logo.png') }}" alt="" style="width: 164px">
		            </div>
		        </footer>
		   </div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
 @endsection