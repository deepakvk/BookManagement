@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                  <div class="panel-heading text-center form_head"><h2><b>Edit</b> Author</h2></div>
                    <form class="form-horizontal" method="POST" action="{{route('author.update')}}">
                      {{ csrf_field() }}

                        <div class="custom_field form-group ">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-tag"></i>
                                <input id="title" type="text" class="form-control" name="name" value="{{ $author->name }}" required autofocus placeholder="Author Name">
                          </div>
                          <!--
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            {{ $errors->has('name') ? ' has-error' : '' }}
                          -->

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>

					 <input type="hidden" name="id" value = "{{$author->id}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
