@extends('layouts.app1')
@section('content')
    <div style="background-image:url('images/Page-2-bg.jpg'); background-size:100% 100%;">
        <header class="text-right" style="height: 10vh;">
            <img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
        </header>
        <div class="min-height text-center">
            <span class="welcome-text1">
                <div>
                    <p class="black content">You can use display: flex to position an element to the bottom, but I do not think you want to use flex in this case, as it will affect all of your elements.</p>
                </div>
                <div>
                    <img src="{{ asset('images/bongbondu-image-1.jpg') }}" alt="" width="250px">
                </div>
            </span>
        </div>
        <footer style="height: 10vh;">
            <div class="text-right pb-3 pr-2">
                <a href="{{ url('page2') }}">
                    <img src="{{ asset('images/next-btn.png') }}" alt="" style="width: 164px">
                </a>
            </div>
        </footer>
   </div>    
@endsection