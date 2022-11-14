
@extends('layouts.home-layout')
@section('title', 'Home')  
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{asset('images/homeslider/Website.jpg')}}" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
    <img src="{{asset('images/homeslider/Website2.jpg')}}" alt="Los Angeles" class="d-block img-fluid w-100">

    </div>
    <div class="carousel-item">
    <img src="{{asset('images/homeslider/Website3.jpg')}}" alt="Los Angeles" class="d-block img-fluid w-100">

    </div>

    <div class="carousel-item">
    <img src="{{asset('images/homeslider/Website4.jpg')}}" alt="Los Angeles" class="d-block img-fluid w-100">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop


