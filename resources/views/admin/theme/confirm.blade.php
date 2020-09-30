@extends('app')

@section('title', 'お題削除確認')

@section('content')

  @include('admin.nav')

  <div class="container">
    <div class="row">
      <div class="col">
        <form action="{{ route('admin.themes.destroy',['theme' => $theme]) }}" method="post">
          @csrf
          @method('DELETE')
          <h4 class="text-center my-5">この内容を削除しますか？</h4>
          <div class="border my-5">

            <div class="container my-5">
              <b class="h4">お題 : </b>
              <b class="h4">{{ $theme->title }}</b>
            </div>
            <div class="container my-5">
              <b class="h4">画像 : </b>
              <img src="{{ $theme->image ?? '' }}" alt="">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-danger my-5">はい</button>
              <a href="{{ route('admin.themes.index') }}" class="btn btn-light">いいえ</a>
            </div>

          </div>
          
        </form>
      </div>
    </div>
  </div>


@endsection