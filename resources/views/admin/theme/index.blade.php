@extends('app')

@section('title', 'お題')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <div class="row">
      <div class="col">
        @foreach($themes as $theme)
          <div class="border my-5 text-center">
            <div class="border text-right">
              <button form="deleteTheme" class="btn btn-sm btn-danger" type="submit">削除</button>
            </div>
            <p>{{ $theme->title }}</p>
            <img src="{{ $theme->image ?? '' }}" alt="">
          </div>
          <form action="{{ route('admin.themes.destroy', ['theme' => $theme]) }}" method="post" id="deleteTheme">
            @csrf
            @method('DELETE')
          </form>
        @endforeach
      </div>
    </div>
  </div>

@endsection