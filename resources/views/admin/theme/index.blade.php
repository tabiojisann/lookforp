@extends('app')

@section('title', 'お題')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <div class="row">
      <div class="col">
        
        <div class="col-10 offset-1 col-md-6 offset-md-3 my-5">
          <label >現在適用中のお題</label>
          <div class="card text-center yellow">
            <h3 class="font-weight-bold">{{ $applyTheme->title }}</h3>
          </div>
        </div>

        @foreach($themes as $theme)
          <div class="border my-5 text-center">
            @if($theme->apply === 0)
            <div class="border text-right">
              <a href="{{ route('admin.themes.edit', ['theme' => $theme,  'applyTheme'  => $applyTheme] )}}">適用する</a>
              <button form="deleteTheme" class="btn btn-sm btn-danger" type="submit">削除</button>
            </div>
            @endif

            <p>タイトル : {{ $theme->title }}</p>
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