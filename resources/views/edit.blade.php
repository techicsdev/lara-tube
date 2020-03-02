@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <form action="{{ url('update/'.$video->id) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" value="{{ $video->title }}" class="form-control">
                        <input type="hidden" name="oldthumb" value="{{ $video->thumbnail }}" class="form-control">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control">
                    </div>
                    <input type="submit" name="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
