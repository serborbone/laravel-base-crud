@extends('home')

@section('content')

  <div class="container">
    <table class="table">

        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($comics as $comic)
            <tr>
              <td>{{$comic->id}}</td>
              <td>{{$comic->title}}</td>
              <td>{{$comic->price}}</td>
              <td>{{$comic->series}}</td>
              <td>{{$comic->sale_date}}</td>
              <td>{{$comic->type}}</td>
              <td> <a href="{{ route('comics.show', $comic->id) }}" type="button" class="btn btn-primary">Info</a> </td>
            </tr>
          @endforeach
        </tbody>

    </table>

  </div>

@endsection