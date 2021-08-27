@extends('layouts.app')


@section('title-block')
Grafics
@endsection


@section('content')

<main>
    <div class="container">
      <div class="row justify-content-center g-4">
        <img class="img-fluid" src="{{asset('storage/images/grafics/apolon.jpg')}}" alt="apolon">
        <img class="img-fluid" src="{{asset('storage/images/grafics/Stelvio.jpg')}}" alt="Stelvio">
        <img class="img-fluid" src="{{asset('storage/images/grafics/khokhloma.jpg')}}" alt="khokhloma" style="max-width: 860px;">

      </div>
    </div>
  </main>

@endsection
