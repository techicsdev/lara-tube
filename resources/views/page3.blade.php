@extends('layouts.app1')
@section('content')
<div style="background-image:url('/images/Page-4-bg.jpg'); background-size:100% 100%;">
	<header class="text-right" style="height: 10vh;">
			<img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
	</header>
	<div class="min-height mb-3">
			<span class="">
					<div class="content">
						 <h2 class="text-left">আর্কাইভ</h2>
						 <div>
								<a href="{{ url('video/f77c9627-ea74-49f4-96e5-c36cf8002d4d') }}">
											<img src="{{ asset('images/ar.png') }}" alt="" style="width: 100%">
											<h2 class="text-center py-2">মুক্তিযুদ্ধ</h2>
								</a>
						 </div>
							<div>
								 <a href="{{ url('video/f77c9627-ea74-49f4-96e5-c36cf8002d5d') }}">
											<img src="{{ asset('images/ar1.png') }}" alt="" style="width: 100%">
											<h2 class="text-center py-2">বঙ্গবন্ধু</h2>
								 </a>
						 </div>
					</div>
			</span>
	</div>
	<footer style="height: 10vh;">
		 <div class="d-flex">
					<div class="text-left pb-3 pl-2 w-50">
							<a href="{{ url('page1') }}">
									<img src="{{ asset('images/pvs-btn.png') }}" alt="" style="width: 164px">
							</a>
					</div>
					<div class="text-right pb-3 pr-2 w-50">
							<a href="{{ url('page3') }}">
									<img src="{{ asset('images/next-btn.png') }}" alt="" style="width: 164px">
							</a>
					</div>
		 </div>
		</footer>
	</div>    
@endsection