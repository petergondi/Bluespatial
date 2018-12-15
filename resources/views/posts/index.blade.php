@extends('layouts.app')
@include('inc.navbar')
@section('content')
<h1 class="display-6 text-center">Blogs</h1>
@if(count($post)>0)
@foreach ($post as $posts)
<div class="list-group-item">
  <div class='row'>
    <div class='col-md-4 col-sm-4 text-center'>
    <img style="height:30%; width:100%" src="/storage/cover_images/{{$posts->cover_image}}">
    <hr/>
    </div>
    <div class='col-md-8 col-sm-8'>
        <a href="/posts/{{$posts->id}}">{{$posts->title}}
          <small><br/>Written on {{$posts->created_at}} by {{$posts->user->name}}</small>
      </div>
  </div>
       
</div>
  @endforeach
  {{$post->links()}}
@else
<p>No post made</p>
@endif
@endsection