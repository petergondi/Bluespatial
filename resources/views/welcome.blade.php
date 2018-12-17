<html>
    <link href="{{ URL::asset('css/base.css') }}" rel="stylesheet">
<link href="{{ URL::asset('js/project.js') }}" rel="script">
@include('inc.navbar')
@extends('layouts.app')

  <div class="text-center body-main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://www.host2post.com/images/S7zofXFx1I4HPM~/1920x1200/download/wallpapers-road-nature-green-background-1920x1200.jpg" style="height:40%; margin:0px;" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bluespatial Gis solutions</h5>
                <p>Owesome</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://pbs.twimg.com/media/DqQD9j1X0AA4doY.jpg" style="height:40%;margin:0px;" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bluespatial Gis solutions</h5>
                <p>Owesome</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://wallpaperfm.com/img/original/7/8/e/17362.jpg" style="height:40%; margin:0px;" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bluespatial Gis solutions</h5>
                <p>Owesome</p>
              </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="https://addons-media.operacdn.com/media/CACHE/images/themes/05/95605/1.0-rev1/images/e606d5b1-4240-4dda-9f68-9287adac4b24/afa312d23564efbb066e6f094cb2f360.jpg" style="height:40%; margin:0px;" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                  <h5>Bluespatial Gis solutions</h5>
                  <p>Owesome</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</html>
  