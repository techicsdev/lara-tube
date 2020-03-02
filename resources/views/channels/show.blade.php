@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Auth::check())
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('channel.upload', $channel->id) }}">Upload Videos</a>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    @if($channel->id=='f77c9627-ea74-49f4-96e5-c36cf8002d4d')
                        মুক্তিযুদ্ধ
                    @else
                        বঙ্গবন্ধু
                    @endif
                </div>
              
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Views</th>
                            <th>Status</th>
                            <th>Active</th>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td>
                                        <img width="50px" height="50px" src="{{ asset($video->thumbnail) }}" alt="">
                                    </td>
                                    <td>
                                        {{ $video->title }}
                                    </td>
                                    <td>
                                        {{ $video->views }}
                                    </td>
                                    <td>
                                        {{ $video->percentage === 100 ? 'Uploaded' : 'Uploding' }}
                                    </td>
                                    <td>
                                        @if($video->percentage === 100)
                                            <a href="{{ route('videos.show', $video->id) }}" class="btn btn-sm btn-info">
                                                View
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ url('edit/'.$video->id) }}">Edit</a>
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
@endsection
