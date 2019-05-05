@extends('layouts.admin')

@section('content')
<h1>Post Create</h1>

<form method="POST" action="{{action('AdminPostsController@store')}}" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">Title:</label>
    <input type="text" class="form-control" id="" placeholder="" name="title">
  </div>

  <div class="form-group">
    <label for="">Category:</label>
    <select class="form-control" name="category_id">
      <option value=""></option>
    </select>
  </div>

  <div class="form-group">
    <label for="">Photo:</label>
    <input type="file" class="" id="" placeholder="" name="photo_id">
  </div>

  <div class="form-group">
    <label for="">Text:</label>
    <textarea rows="4" name="content" class="form-control"></textarea>
  </div>


  {{csrf_field()}}
  <div class="form-group">
    <button type="submit" name="add" class="btn btn-primary">
      Create Post
    </button>
  </div>
</form>

@if(count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

@stop
