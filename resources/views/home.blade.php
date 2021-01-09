@extends('layouts')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header" style="text-align: center">Contents</h5>
            <div class="card-body">
              @foreach ($data as $value)
                  <div class="container">
                      <h5> {{ $value->name }} </h5> 
                      <p> {{ $value->description }} </p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div> <hr>
              @endforeach
              
            </div>
          </div>
    </div>
@endsection