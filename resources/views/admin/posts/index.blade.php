@extends('layouts.admin')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
<table class="table">
  <thead>
    <th width="10%"></th>
    <th>Title</th>
    <th>Category</th>
    <th>User</th>
    <th>Created</th>
    <th>Updated</th>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>
        @if($post->photo_id != '')
        <img src="{{$post->photo->file}}" alt="" class="img-responsive">
        @endif
      </td>
      <td>{{$post->title}}</td>
      <td>{{$post->category ? $post->category->name : "No category"}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->created_at->diffForhumans()}}</td>
      <td>{{$post->updated_at->diffForhumans()}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<div class="alert alert-danger">
  <h4 class="text-center" style="margin-bottom: 0">No Posts</h4>
</div>
@endif
@stop
