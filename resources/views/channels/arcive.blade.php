@extends('layouts.app1')
@section('content')
        <div style="background-image:url('/images/page-4-bg.jpg'); background-size:100% 100%;">
                <header class="text-right" style="height: 10vh;">
                    <a href="/"><img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 150px"></a>
                </header>
                <div class="min-height mb-3">
                    <span class="">
                        <div class="content">

                            <h2 class="text-left mt-3">
                                @if($channel->id=='f77c9627-ea74-49f4-96e5-c36cf8002d4d') মুক্তিযুদ্ধ আর্কাইভ @else বঙ্গবন্ধু আর্কাইভ @endif
                            </h2>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @foreach($videos as $video)
                                            <tr>
                                                <td>
                                                    <img width="40px" height="40px" src="{{ asset($video->thumbnail) }}" alt="">
                                                </td>
                                                <td style="font-size: 10px;">
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
                                                            View
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
                    </span>
                </div>
                <footer style="height: 10vh;">
                     <div class="d-flex">
                            
                     </div>
                </footer>
     </div>    
@endsection