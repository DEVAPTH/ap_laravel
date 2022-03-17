@extends('layout')

@section('content')
    <div class="container">
        @foreach ($data as $item)
        <div class="card">
            <div class="card-header" style="text-align: center">
                    Future
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">{{$item->description}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach

    </div>
@endsection
