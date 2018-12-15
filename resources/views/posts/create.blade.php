@extends('layouts.app')
@include('inc.navbar')
  @section('content')
  @include('inc.messages')
 
  <div class="container">          
<h1>Create Post</h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        
    </div>
    <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}   
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary bg-dark'])}}
{!! Form::close() !!}
</div>