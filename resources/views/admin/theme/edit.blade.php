@extends('app')

@section('title', 'お題の適用')

@section('content')

  @include('admin.nav')

  <div class="container">
    <div class="row">
      <div class="col">
        <form action="{{ route('admin.themes.update', ['theme' => $theme]) }}" method="post">
          @csrf
          @method('PATCH')

          <div class="border text-center p-5 mt-5">
            <div class="col-10 offset-1 col-md-6 offset-md-3 my-5">
              <div class="card text-center orange">
              <h3 class="font-weight-bold">{!! nl2br(e($theme->title)) !!}</h3>
                @if(isset($theme->image))
                  <div class="text-center">
                    <img src="{{ $theme->image }}" alt=""  class="imgAuto my-4">
                  </div>
                @endif
              </div>
            </div>
            <h2>このお題を適用しますか？</h2>

            <button type="submit" class="btn btn-primary my-5">はい</button>
            <a href="{{ route('admin.themes.index') }}" class="btn btn-light">いいえ</a>
          </div>

        </form>
      </div>
    </div>
  </div>


@endsection