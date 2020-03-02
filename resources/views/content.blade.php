@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="card w-100">
            <div class="card-body">
        <div class="d-flex justify-content-between w-100">
            <h2>Second Page Content</h2>
            <div>
                <a href="{{ url('content1') }}" class="btn btn-success btn-sm">Add</a>
            </div>
        </div>
        <div class="table-responsive">
             <table class="table table-bordered">
                <tr>
                    <th>SL.</th>
                    <th>Content</th>
                    <th>Posation</th>
                    <th>Action</th>
                </tr>
                @forelse($content1 as $key => $var)
                    <tr>
                        <td>{{ $key+1 }} {{$var->id }}</td>
                        <td>{{ $var->content }}</td>
                        <td>{{ $var->posation  }}</td>
                        <td><a href="{{ route('birthbg',['birthbg'=>$var->id]) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                       <td colspan="3"> <p>Empty</p></td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div></div>

        <div class="card w-100 mt-2">
            <div class="card-body">
                <div class="d-flex justify-content-between w-100 mt-3">
                    <h2>Third Page Content</h2>
                    <div>
                        <a href="{{ url('content2') }}" class="btn btn-success btn-sm">Add</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <tr>
                        <th>SL.</th>
                        <th>Content</th>
                        <th>Posation</th>
                          <th>Action</th>
                    </tr>
                    @forelse($content2 as $key => $var1)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $var1->content }}</td>
                            <td>{{ $var1->posation  }}</td>
                            <td><a href="{{ url('contentdelete/'.$var1->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @empty
                       <tr>
                           <td colspan="3"> <p>Empty</p></td>
                       </tr>
                    @endforelse
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
