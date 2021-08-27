@extends('layouts.app')


@section('title-block')
Оставить сообщение
@endsection



@section('content')

<main>

<div class="container">


  <div class="row justify-content-center"
    style="background-image: linear-gradient(rgba(255, 255, 255, 0.45), rgba(255, 255, 255, 0.45)),url({{asset('storage/images/contacts/contacts.jpg')}}); background-position: center;">

    <div class="col-sm-6 border bg-white" style="margin-top: 10%; margin-bottom: 10%; padding: 5%;">
      <form method="post" action="{{ route('sendinfo') }}">
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Имя</label>
          <input name="name" type="text" class="form-control" id="name"
            placeholder="Ваше имя">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="text" class="form-control" id="email"
            placeholder="name@example.com">
        </div>

        <div class="mb-3">
          <label for="message" class="form-label">Сообщение</label>
          <textarea name="message" class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-secondary" style="background-color: #929497;">Отправить</button>
      </form>
    </div>
  </div>
</div>
</main>

@endsection
