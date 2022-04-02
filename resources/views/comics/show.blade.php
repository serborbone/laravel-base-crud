@extends('home')

@section('singleComic') 
  <div class="container">
    <div class="card ms-2 mt-2" style="width: 80rem;">

      <div class="card-body">
        <h1 class="card-title">{{$comic->title}}</h1>
      </div>

      <ul class="list-group list-group-flush">

        <li class="list-group-item">
          <span class="text-primary">PRICE:</span> {{$comic->price}}
        </li>
        <li class="list-group-item">
          <span class="text-primary">SERIES:</span> {{$comic->series}}
        </li>
        <li class="list-group-item">
          <span class="text-primary">SALE DATE:</span> {{$comic->sale_date}}
        </li>
        <li class="list-group-item">
          <span class="text-primary">TYPE:</span> {{$comic->type}}
        </li>
        <li class="list-group-item">
          <span class="text-primary">DESCRIPTION:</span> {{$comic->description}}
        </li>

      </ul>

    </div>
    
    <a href="{{ route('comics.index') }}" role="button" class="btn btn-success mt-4 ms-2">Go Back</a>
  </div>

@endsection