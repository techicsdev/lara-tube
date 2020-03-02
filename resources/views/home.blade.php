@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Manage </div>

                <div class="card-body">
                   <h2>
                        <a class="dropdown-item" href="{{ route('channels.show', 'f77c9627-ea74-49f4-96e5-c36cf8002d4d') }}">
                            মুক্তিযুদ্ধ ভিডিও
                        </a>
                    </h2>
                </div>
            </div>
        
        </div>
         <div class="col-md-3">
            <div class="card">
                <div class="card-header">Manage </div>

                <div class="card-body">
                 
                    <h2>
                        <a class="dropdown-item" href="{{ route('channels.show', 'f77c9627-ea74-49f4-96e5-c36cf8002d5d') }}">
                            বঙ্গবন্ধু ভিডিও
                        </a>
                    </h2>
                   
                </div>
            </div>
        
        </div>
         <div class="col-md-3">
            <div class="card">
                <div class="card-header">Manage </div>

                <div class="card-body">
                    <h2>
                        <a class="dropdown-item" href="{{ url('content') }}">
                            ম্যানেজ হিস্ট্রি
                        </a>
                    </h2>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection
