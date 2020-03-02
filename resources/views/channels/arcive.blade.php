@extends('layouts.app1')
@section('content')
 <div>
    <header class="text-right" style="height: 10vh;">
        <a href="?mobile=1"><img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 150px"></a>
    </header>
                <div class="d-flex justify-content-between flex-column" style="min-height: 90vh">
                <div class="text-center container">
                    <h2 class="text-left mt-3"> @if($channel->id=='f77c9627-ea74-49f4-96e5-c36cf8002d4d') মুক্তিযুদ্ধ আর্কাইভ @else বঙ্গবন্ধু আর্কাইভ @endif </h2>
                    <div class="row">
                        <div class="col">
                            <div class="card mt-2">
                                <div class="card-body">
                                   
                                   
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <tbody>
                                                @foreach($videos as $video)
                                                    <tr>
                                                        <td>
                                                            <img width="50px" height="40px" src="{{ asset($video->thumbnail) }}" alt="">
                                                        </td>
                                                        <td style="font-size: 10px;" class="text-left font-roboto">
                                                            {{ substr($video->title, 0,25) }}
                                                        </td>
                                                      {{--   <td>
                                                            {{ $video->views }}
                                                        </td> --}}
                                                       {{--  <td>
                                                            {{ $video->percentage === 100 ? 'Live' : 'Processing' }}
                                                        </td> --}}
                                                        <td>
                                                            @if($video->percentage === 100)
                                                                <a href="{{ route('videos.show', $video->id) }}" class="btn btn-sm btn-info">
                                                                    Watch
                                                                </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row justify-content-center">
                                        {{ $videos->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer style="height: 10vh; background-image:url('/images/page-4-bg.jpg');height: 150px;background-size: cover;background-position: bottom left;" class="d-flex justify-content-start align-items-end">
                        <div class="text-left pb-3 pl-2 w-50">
                                <a href="{{ url('page1?mobile=1') }}">
                                        <img src="{{ asset('images/pvs-btn.png') }}" alt="" style="width: 150px">
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