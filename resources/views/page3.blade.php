@extends('layouts.app1')
@section('content')
 <div>
    <header class="text-right" style="height: 10vh;">
        <a href="?mobile=1"><img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 150px"></a>
    </header>
	<div class="min-height mb-3">
		<span class="">
			<div class="content mt-3">
				<h2 class="text-left">আর্কাইভ</h2>
				<div class="card box-shadow">
					<img class="card-img-top" src="{{ asset('images/ar1.png') }}" alt="">
					<div class="card-body">
						<a class="btn btn-block btn-danger" href="{{ url('video/f77c9627-ea74-49f4-96e5-c36cf8002d4d') }}">
							<h2 class="text-center m-0">মুক্তিযুদ্ধ</h2>
						</a>
					</div>
				</div>
				<div class="card mt-2 box-shadow">
					<img class="card-img-top" src="{{ asset('images/ar.png') }}" alt="" style="width: 100%">
					<div class="card-body">
						<a class="btn btn-block btn-danger" href="{{ url('video/f77c9627-ea74-49f4-96e5-c36cf8002d5d') }}">
							<h2 class="text-center m-0">বঙ্গবন্ধু</h2>
						</a>
					</div>
				 </div>
			</div>
		</span>
	</div>
	<footer style="height: 10vh; background-image:url('/images/page-4-bg.jpg');height: 165px;background-size: cover;background-position: bottom left;">
		<div class="d-flex">
			
		</div>
	</footer>
</div>    
@endsection