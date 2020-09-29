@extends('app')

@section('title', '大喜利回答欄')

@section('content')
  @include('nav')

  <div class="container yellow lighten-5" style="height: 100vh;">
    <div class="row">
      <div class="card text-center col-10 offset-1 col-md-6 offset-md-3 yellow">
        <h2 class="font-weight-bold">{{ $theme->title }}</h2>
        <img src="{{ $theme->image ?? '' }}" alt="">
      </div>
    </div>
  </div>

  @include('footer.sub')
@endsection