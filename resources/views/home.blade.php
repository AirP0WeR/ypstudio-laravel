@extends('layouts.app')


@section('title-block')
YPStudio
@endsection


@section('content')


<main>

<div class="album py-2">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 g-4">
      <a href="{{ route('logo') }}">
        <div class="col">
          <div class="card border-0">
            <img class="card-img-top" src="{{asset('storage/images/home/block-1-1.jpg')}}" alt="Logo">
            <div class="card-img-overlay">
              <h1 class="card-title">logo</h1>
            </div>
            <div class="overlay">
              <img class="card-img-top" src="{{asset('storage/images/home/block-1-2.jpg')}}" alt="Logo2">
            </div>
          </div>
        </div>
      </a>

      <a href="{{ route('brandbook') }}">
        <div class="col">
          <div class="card border-0">
            <img class="card-img-top" src="{{asset('storage/images/home/block-2-1.jpg')}}" alt="brand paper">
            <div class="card-img-overlay">
              <h1 class="card-title">brand paper</h1>
            </div>
            <div class="overlay">
              <img class="card-img-top" src="{{asset('storage/images/home/block-2-2.jpg')}}" alt="brand paper">
            </div>
          </div>
        </div>
      </a>

      <a href="{{ route('grafics') }}">
        <div class="col">
          <div class="card border-0">
            <img class="card-img-top" src="{{asset('storage/images/home/block-3-1.jpg')}}" alt="graphics">
            <div class="card-img-overlay">
              <h1 class="card-title">graphics</h1>
            </div>
            <div class="overlay">
              <img class="card-img-top" src="{{asset('storage/images/home/block-3-2.jpg')}}" alt="graphics">
            </div>
          </div>
        </div>
      </a>

      <a href="{{ route('painting') }}">
        <div class="col">
          <div class="card border-0">
            <img class="card-img-top" src="{{asset('storage/images/home/block-4-1.jpg')}}" alt="painting">
            <div class="card-img-overlay">
              <h1 class="card-title">painting</h1>
            </div>
            <div class="overlay">
              <img class="card-img-top" src="{{asset('storage/images/home/block-4-2.jpg')}}" alt="painting">
            </div>
          </div>
        </div>
      </a>

    </div>
  </div>
</div>

</main>

@endsection
