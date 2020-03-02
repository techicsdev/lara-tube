@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <h2>
                        <a class="dropdown-item" href="{{ route('channels.show', 'f77c9627-ea74-49f4-96e5-c36cf8002d4d') }}">
                            মুক্তিযুদ্ধ
                        </a>
                    </h2>
                    <h2>
                        <a class="dropdown-item" href="{{ route('channels.show', 'f77c9627-ea74-49f4-96e5-c36cf8002d5d') }}">
                            বঙ্গবন্ধু
                        </a>
                    </h2>
                    <h2>
                        <a class="dropdown-item" href="{{ url('content') }}">
                            Content
                        </a>
                    </h2>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection
