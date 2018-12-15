@extends('layouts.app')
  @section('content')
  @include('inc.navbar') 
  @include('inc.messages')
  <div class="jumbotron text-center">    
<h1>Contact</h1>
<div class="container">
<h4>Send Us Information of the service you want</h4> 
{!! Form::open(['action' => 'PagesController@form','method'=>'POST','enctype'=>'multipart/form-data']) !!}
@csrf
<div class="row">
  <div class="col">
    {{Form::label('FirstName','FirstName')}}
  {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'First Name'])}}
  
  </div>
  <div class="col">
    {{Form::label('LastName','LastName')}}
    {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Last Name'])}}
    
  </div>
</div>
<div class="form-group">
  {{Form::label('Email','Email')}}
  {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Emal'])}}
  
</div>
<div class="form-group">
  {{Form::label('Message','Message')}}
  {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Message'])}}
  
</div>
  {{Form::submit('submit',['class'=>'btn btn-primary bg-dark'])}}
{!! Form::close() !!}
</div>
  </div>