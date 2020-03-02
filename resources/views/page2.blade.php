@extends('layouts.app1')
@section('content')
 <div>
    <header class="text-right" style="height: 10vh;">
        <a href="/"><img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 150px"></a>
    </header>
				<div class="d-flex justify-content-between flex-column" style="min-height: 90vh">
					<div class="text-center container">
					@if($birthbg->count())
		            <div class="row">
		                <div class="col">
		                    <div class="card content mt-3 text-center">
		                        <div class="one-time card">
		                            @foreach($birthbg as $birt)
		                                <div class="card-body"><span>{{ $birt->content }}</span></div>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		            </div>
		           @endif
	           </div>
				<footer style="height: 10vh; background-image:url('/images/page-3-bg.jpg');height: 150px;background-size: cover;background-position: bottom left;" class="d-flex justify-content-end align-items-end">
						<div class="text-left pb-3 pl-2 w-50">
								<a href="{{ url('page1?mobile=1') }}">
										<img src="{{ asset('images/pvs-btn.png') }}" alt="" style="width: 150px">
								</a>
						</div>
						<div class="text-right pb-3 pr-2 w-50">
								<a href="{{ url('page3?mobile=1') }}">
										<img src="{{ asset('images/next-btn.png') }}" alt="" style="width: 150px">
								</a>
						</div>
				</footer>
			</div>
	 </div>   
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha256-zUQGihTEkA4nkrgfbbAM1f3pxvnWiznBND+TuJoUv3M=" crossorigin="anonymous"></script>
<script>
		$('.one-time').slick({
	dots: true,
	infinite: true,
	speed: 300,
	slidesToShow: 1,
	adaptiveHeight: true
});
</script>
@endsection