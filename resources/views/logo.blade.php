@extends('layouts.app')


@section('title-block')
Logo
@endsection


@section('content')


<main>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 g-4">

        
        @foreach ($files as $file)
          <div class="col"><img class="img-fluid" src="{{asset($file)}}"></div>
          
        @endforeach
      </div>
    </div>

  </main>

@endsection
