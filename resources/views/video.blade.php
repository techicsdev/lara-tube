@extends('layouts.app1')

@section('content')
@if($video->editable())
    <form action="{{ route('videos.update', $video->id) }}" method="POST">
    @csrf
    @method('PUT')
@endif
<div style="background-image:url('/images/Page-4-bg.jpg'); background-size:100% 100%;">
    <header class="text-right" style="height: 10vh;">
        <img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
    </header>
    <br><br>
    <div class="min-height mb-3">
        <span class="w-100">
            <div class="content">
                <h2 class="text-left" style="font-size: 10px">{{ $video->title }}</h2>
                <div>
                    <video-js id="video" class="vjs-default-skin" controls preload="auto" width="640" height="268">
                        <source src='{{ asset(Storage::url("videos/{$video->id}/{$video->id}.m3u8")) }}' type="application/x-mpegURL">
                    </video-js>
                </div>
                <br>
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
            </div>
        </span>
    </div>
    <footer style="height: 10vh;">
         <div class="d-flex">
                   
         </div>
    </footer>
    </div>  
@endsection

@section('styles')
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <style>
        .vjs-default-skin {
            width: 100%;
        }
        .thumbs-up, .thumbs-down {
            width: 20px;
            height: 20px;
            cursor: pointer;
            fill: currentColor;
        }

        .thumbs-down-active, .thumbs-up-active {
            color: #3EA6FF;
        }

        .thumbs-down {
            margin-left: 1rem;
        }
    </style>

    <style>
        .w-full {
            width: 100% !important;
        }
        .w-80 {
            width: 80% !important;
        }
    </style>
@endsection

@section('scripts')
    <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
    <script>
        window.CURRENT_VIDEO = '{{ $video->id }}'
    </script>
    <script src='{{ asset('js/player.js') }}'></script>
@endsection
