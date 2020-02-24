@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">BookID</th>
          <th scope="col">Title</th>
          <th scope="col">Edition</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Books Available</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($books as $book)
        <tr>
          <td>{{$book->id}}</td>
          <td>{{$book->bookTitle}}</td>
          <td>{{$book->edition}}</td>
          <td>{{$book->catId}}</td>
          <td>{{$book->authId}}</td>
          <td>{{$book->totalAvail}}</td>
          <td>
            <span><a href="{{route('book.edit',['id'=>$book->id])}}" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a></span>
            <span><a href="{{route('book.destroy',['id'=>$book->id])}}" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></a></span>

          </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
