@extends('layouts.admin')

@section('content')
<h1>Create Users</h1>

<form method="POST" action="{{action('AdminUsersController@store')}}" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">Name:</label>
    <input type="text" class="form-control" id="" placeholder="" name="name">
  </div>
  <div class="form-group">
    <label for="">Email:</label>
    <input type="email" class="form-control" id="" placeholder="" name="email">
  </div>
  <div class="form-group">
    <label for="">Password:</label>
    <input type="password" class="form-control" id="" placeholder="" name="password">
  </div>
  <div class="form-group">
    <label for="">File:</label>
    <input type="file" id="" placeholder="" name="photo_id">
  </div>
  <div class="form-group">
    <label for="">Status:</label>
    <select class="form-control" name="is_active">
      <option value="0">Not active</option>
      <option value="1">Active</option>
    </select>
  </div>
  <div class="form-group">
    <label for="">Role:</label>
    <select class="form-control" name="role_id">
      @foreach($roles as $role)
      <option value="{{$role->id}}">{{$role->name}}</option>
      @endforeach
      <!-- <option value="2">Author</option>
      <option value="3">Subscriber</option> -->
    </select>
  </div>
  {{csrf_field()}}
  <div class="form-group">
    <button type="submit" name="add" class="btn btn-primary">
      Create User
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
