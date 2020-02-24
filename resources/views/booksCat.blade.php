@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Category ID</th>
          <th scope="col">Cateogry Name</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($cats as $cat)
        <tr>
          <td>{{$cat->id}}</td>
          <td>{{$cat->catName}}</td>
          <td>
            <span><a href="{{route('category.edit',['id'=>$cat->id])}}" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a></span>
            <span><a href="{{route('category.destroy',['id'=>$cat->id])}}" class = "btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></a></span>

          </td>
        </tr>
          @endforeach
  </div>
</div>


@endsection
