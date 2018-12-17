@extends('layouts.app')
  @section('content')
  @include('inc.navbar') 
  <div class="jumbotron text-center">    
  <h1>{{$portfolio}}</h1>
<div class="container">
<h2>Portfolio</h2> 
<div class="card mb-6">
  <img class="card-img-top" style="height:60%;border: 1px solid #ddd" src="http://petslady.com/sites/default/files/inline-images/Tabby_Kitten_and_Spring_Flowers.img_assist_custom.jpg"  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 4 mins ago</small></p>
  </div>
</div>
<hr/>
<div class="card mb-6">
  <img class="card-img-top" style="height:60%;border: 1px solid #ddd" src="http://boredfastfood.com/wp-content/uploads/2015/02/animal-parenting-moment-pictures-creative-nature-photography-idea-9.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
  </div>