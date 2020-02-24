@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Authors List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Author ID</th>
          <th scope="col">Author Name</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($authors as $author)
        <tr>
          <td>{{$author->id}}</td>
          <td>{{$author->name}}</td>
          <td>
            <span><a href="{{route('author.edit',['id'=>$author->id])}}" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a></span>
            <span><a href="{{route('author.destroy',['id'=>$author->id])}}" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></a></span>

          </td>
        </tr>
          @endforeach
  </div>
</div>


@endsection
