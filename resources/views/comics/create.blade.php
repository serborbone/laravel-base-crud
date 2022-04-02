@extends('home')

@section('createComic')
  <div class="container mt-5">
    

    <form method="POST" action="{{route('comics.store')}}">

        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>

        <label for="description">Description</label>
        <div class="form-floating">
          <textarea class="form-control" id="description" name ="description" style="height: 100px"></textarea>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Thumb</label>
          <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input class="form-control" id="price" name="price">
        </div>
      
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">Sale Date</label>
          <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" class="form-control" id="type" name="type">
        </div>

        

        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>
  </div>

@endsection