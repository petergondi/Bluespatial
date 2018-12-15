@extends('layouts.app')
@include('inc.navbar')
@section('content')
@include('inc.messages')
<a href="/posts">Go back</a>
<h1 class="text-center">{{$post->title}}</h1>
<div class="text-center">
<img style="width:80%; height:50%" src="/storage/cover_images/{{$post->cover_image}}">
<div>{!!$post->body!!}</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small><a href="http://www.facebook.com/sharer.php?u=" class="btn btn-social btn-facebook link-in-popup">
    <i class="fa fa-facebook"></i> Share on Facebook</i>
</a>
</div>

<hr>

@if(!Auth::guest())
@if(Auth::user()->id==$post->user_id)
<a class="btn btn-primary float-sm-right" href="/posts/{{$post->id}}/edit">Edit</a>
{!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-center']) !!}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{{Form::hidden('_method','DELETE')}}
{!! Form::close() !!}

@endif
@endif
@endsection