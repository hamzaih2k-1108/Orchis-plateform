@extends('master')
@section('content')

<center>
    <div class="custom-formation">
            <div class="trending-wrapper">
                <h2 style="color: #533278;font-style:italic"><b>Results of formations</b></h2>
                <hr>
                @foreach ($formations as $item)
                <div class="searched-item">
                    <a href="detail/ {{ $item['id_formation'] }} " style="text-decoration:none">
                    <img class="trending-image" src="{{ $item ['image_formations'] }}" style="width: 400px">
                    <div class="">
                    <h3 style="color: #533278">{{ $item['titre'] }}</h3>
                    <h5 style="color: #533278">{{ $item['description'] }}</h5>
                    </div>
                    </a>
                </div>
                <hr>
                @endforeach
            </div>
    </div>
</center>


@endsection
