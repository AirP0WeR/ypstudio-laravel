@extends('layouts.app')


@section('title-block')
Painting
@endsection


@section('content')

<main>

<div class="container">
  <div class="row row-cols-1 g-4">
    <div class="col-sm-7 mh-100">
      <img src="{{asset('storage/images/painting/Dolomiti_1.jpg')}}" class="img-fluid mh-100">
    </div>
    <div class="col-sm-5" style=" max-height: 730px; ">
      <div class="row h-75" style="color: aquamarine;">
        <img src="{{asset('storage/images/painting/Dolomiti_2.jpg')}}" class="img-fluid mh-100">
      </div>
      <div class="row h-25" style="padding-left: 3%; padding-top: 5%; padding-right: 3%;">
        <div class="d-flex align-items-center justify-content-center" style="background-color: #F3F5F0;">
          <p class="card-text" style="text-align: center;">картина<br>"Доломиты", материал: холст/ масло, размер:
            диаметр 40см, 2020 год.<br><a href="{{ route('contacts') }}" class="link-secondary">узнать цену</a></p>
        </div>
      </div>
    </div>

    <div class="col-sm-7 mh-100">
      <img src="{{asset('storage/images/painting/mak1.jpg')}}" class="img-fluid mh-100">
    </div>
    <div class="col-sm-5" style=" max-height: 730px; ">
      <div class="row h-75" style="color: aquamarine;">
        <img src="{{asset('storage/images/painting/mak2.jpg')}}" class="img-fluid mh-100">
      </div>
      <div class="row h-25" style="padding-left: 3%; padding-top: 5%; padding-right: 3%;">
        <div class="d-flex align-items-center justify-content-center" style="background-color: #F3F5F0;">
          <p class="card-text" style="text-align: center;">картина<br>"Мак", материал: холст/ масло, размер: 80х70
            см, 2005 год.<br><a href="{{ route('contacts') }}" class="link-secondary">узнать цену</a></p>
        </div>
      </div>
    </div>


    <div class="col-sm-7 mh-100">
      <img src="{{asset('storage/images/painting/flower1.jpg')}}" class="img-fluid mh-100">
    </div>
    <div class="col-sm-5" style=" max-height: 730px; ">
      <div class="row h-75" style="color: aquamarine;">
        <img src="{{asset('storage/images/painting/flower2.jpg')}}" class="img-fluid mh-100">
      </div>
      <div class="row h-25" style="padding-left: 3%; padding-top: 5%; padding-right: 3%;">
        <div class="d-flex align-items-center justify-content-center" style="background-color: #F3F5F0;">
          <p class="card-text" style="text-align: center;">картина<br>"Цветы" , материал: холст/ масло, размер:
            25х35 см, 2004 год.<br>
            <a href="{{ route('contacts') }}" class="link-secondary">узнать цену</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

</main>

@endsection
