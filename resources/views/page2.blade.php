@extends('layouts.app1')
@section('content')
    <div style="background-image:url('images/Page-3-bg.jpg'); background-size:100% 100%;">
        <header class="text-right" style="height: 10vh;">
            <img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 164px">
        </header>
        <div class="min-height">
            <span class="">
                <div class="content">
                    <h2>You can use display.</h2>
                    <p class="black">You can use display: flex to position an element to the bottom, but I do not think you want to use flex in this case, as it will affect all of your elements.You can use display: flex to position an element to the bottom, but I do not think you want to use flex in this case, as it will affect all of your elements.You can use display: flex to position an element to the bottom, but I do not think you want tnt to the bottom, but I do not think you want to use flex in this case, as it will affect all of your elements.You can use display: flex to position an element to the bottom, but I do not think you want to use flex in this case, as it will affect all of your elements.</p>
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