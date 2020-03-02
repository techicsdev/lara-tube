@extends('layouts.app1')
@section('content')
<div style="background-image:url('images/Page-1-bg.jpg'); background-size:cover; ">
    <header class="text-right" style="height: 10vh;">
        <a href="?mobile=1"><img src="{{ asset('images/1-top mojib.png') }}" alt="" style="width: 150px"></a>
    </header>
    <div class="min-height">
        <h3 class="welcome-text fadeInLeft animated">
            <a href="{{ url('page1?mobile=1') }}">
                <span>স্বাগতম</span>
                <span>জন্মভূমিতে</span>
            </a>
        </h3>
    </div>
    <footer style="height: 10vh;">
        <div class="text-center pb-3">
          <img src="{{ asset('images/janata_bank-logo.png') }}" alt="" style="width: 164px">
        </div>
    </footer>
</div>
  @endsection