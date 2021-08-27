@extends('layouts.app')


@section('title-block')
Brand Book
@endsection


@section('content')
<main>
    <div class="container-fluid" style="background-color: rgb(0, 0, 0);">
      <div class="container">
        <div class="row row-cols-1 justify-content-center">
          <div class="col g-4" style="margin-top: 0px;"><img class="img-fluid" src="{{asset('storage/images/brandbook/ecolifter.jpg')}}">
          </div>
          <div class="col g-4"><img class="img-fluid" src="{{asset('storage/images/brandbook/ecolifter2.jpg')}}"></div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2">
          <div class="col g-4"><img class="img-fluid" src="{{asset('storage/images/brandbook/ecolifter3.jpg')}}"></div>
          <div class="col g-4"><img class="img-fluid" src="{{asset('storage/images/brandbook/ecolifter4.jpg')}}"></div>
        </div>
      </div>
    </div>
  </main>

@endsection
