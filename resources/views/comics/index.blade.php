@extends('home')

@section('content')

  <div class="container">

    <div class="d-flex align-items-center">
      <p class="fs-4 mt-3 me-3">CREATE A NEW ITEM</p>
      <a href="{{ route('comics.create') }}" type="button" class="btn btn-primary">Create</a>
    </div>

    <table class="table mt-3">

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

              {{-- INFO SINGLE COMIC --}}
              <td> <a href="{{ route('comics.show', $comic->id) }}" type="button" class="btn btn-info">Info</a> </td>
              {{-- UPDATE SINGLE COMIC --}}
              <td> <a href="{{ route('comics.edit', $comic->id) }}" type="button" class="btn btn-warning">Update</a> </td>

              {{-- DELETE Btn da implementare con form metodo POST --}}
              <form method="POST" action="{{ route( 'comics.destroy', ['comic' => $comic->id] ) }}">

                @csrf
                @method('DELETE')
                <td> <button type="submit" class="btn btn-danger">Delete</button> </td>

              </form>
            </tr>
          @endforeach
        </tbody>

    </table>

  </div>

@endsection