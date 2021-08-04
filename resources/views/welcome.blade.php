@extends('master')
@section('content')
<div class="custom-formation">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="detail/1" style="text-decoration: none">
        <img src="image/laravel.jpg" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
          <h5>Laravel</h5>
          <p>Laravel is a web application framework with expressive, elegant syntax.Freeing you to create without sweating the small things.</p>
        </div>
        </a>
      </div>
      <div class="carousel-item">
        <a href="detail/3" style="text-decoration: none">
        <img src="image/py2.jpg" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
          <h5>AI en python</h5>
          <p>Python plays a vital role in AI coding language by providing it with good frameworks like scikit-learn: machine learning in Python, which fulfils almost every need in this field and D3.</p>
        </div>
        </a>
      </div>
      <div class="carousel-item">
        <a href="detail/2" style="text-decoration: none">
        <img src="image/java5.jpg" class="d-block w-100" alt="error">
        <div class="carousel-caption d-none d-md-block">
          <h5>Web development with JAVA</h5>
          <p>Java is a commonly used language for web development, especially on the server-side.</p>
        </div>
        </a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="trending-wrapper">
    <h3 style="color: #533278 "><b>Formation trend</b></h3>
    @foreach ($formations as $item)
    
      <div class="trending-item">
        <a href="detail/ {{ $item['id_formation'] }} " style="text-decoration:none">
        <img class="trending-image" src="{{ $item ['image_formations'] }}" style="width: 250px">
        <div class="">
          <h6 style="color: #533278">{{ $item['titre'] }}</h6>
        </div>
        </a>
      </div>
    @endforeach
</div>
</div>
  
<style>
  .carousel .carousel-item {
    height: 550px;
  }

  .carousel-item img {
      position: absolute;
      top: 0;
      left: 0;
      min-height: 550px;
  }
  .carousel-caption {
    position: relative;
    left: 0;
    top: 430px;
}
.rtt{
  background-color: rgba(239, 239, 239, 0.2);
}
.trending-image{
  height: 100px;
}
.trending-item{
  float: left;
  width: 30%;
}
.trending-wrapper{
  margin:30px;
}
.img.slider-img{
        height: :400px !important;
}
</style>
  
@endsection