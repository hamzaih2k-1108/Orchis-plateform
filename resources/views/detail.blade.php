@extends('master')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-5">
          <img src="{{ url($formation['image_formations']) }}" alt="erreur" style="width: 80%;heigh: 100%">
      </div>
      <div class="col-md-7">
        
        <h2 style="color: #533278">{{ $formation['titre'] }}</h2>
        <h3><span style="text-decoration:underline">price :</span> {{ $formation['prix'] }} $</h3>
        <h5><span style="text-decoration:underline">Details : </span>{{ $formation['description'] }}</h5>
        <h5><span style="text-decoration:underline">Start date of formation : </span>{{ $formation['date_debut_formation'] }}</h5>
        <h5><span style="text-decoration:underline">duration of formation : </span>{{ $formation['duree_formation'] }} Months</h5>
        <br>
        <h5><a href="{{ $formation['course'] }}">download course</a></h5><br>
        <br>
       <form action="/add_to_cart" method="POST">
         @csrf
         <input type="hidden" name="formation_id" value="{{ $formation['id_formation'] }}">
         <button class="btn btn-primary">Add to cart</button>
       </form>
        <br><br>
        <button class="btn btn-success">Buy now</button>
      </div>
    </div>
    <br>
    <center><a href="/" style="color: #533278"><h4><b>Return</b></h4></a></center>
  </div>

@endsection
