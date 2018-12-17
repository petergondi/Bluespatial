<html>
    <link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
<link href="{{ URL::asset('js/project.js') }}" rel="script">
@include('inc.navbar')
@extends('layouts.app')

  <div class="jumbotron text-center body-main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.quirkybyte.com/wp-content/uploads/2016/02/Green-Nature-Trees-l.jpg" style="height:40%; margin:0px;" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bluespatial Gis solutions</h5>
                <p>Owesome</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://www.quirkybyte.com/wp-content/uploads/2016/02/Green-Nature-Trees-l.jpg" style="height:40%;margin:0px;" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bluespatial Gis solutions</h5>
                <p>Owesome</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://www.quirkybyte.com/wp-content/uploads/2016/02/Green-Nature-Trees-l.jpg" style="height:40%; margin:0px;" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bluespatial Gis solutions</h5>
                <p>Owesome</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
</html>
  