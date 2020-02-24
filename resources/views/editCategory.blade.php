@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Category Edit</div>
  <div class="panel-body">
  <form class="row" method="post" action="{{route('category.update')}}">
    {{csrf_field() }}
    <div class="col-xs-8 inner-addon left-addon form-group">
      <input type="text" name="catName" value="{{$category->catName}}" class="form-control" placeholder="Name of Category">
    </div>
    <div class="col-xs-4">
      <button type="submit" name="button" class="btn btn-primary">Save</button>
    </div>
 <input type="hidden" name="id" value = "{{$category->id}}">
  </form>
  </div>
</div>
@endsection
