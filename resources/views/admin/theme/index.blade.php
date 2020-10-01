@extends('app')

@section('title', 'お題')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <div class="row">
      <div class="col">
        
        <div class="col-10 offset-1 col-md-6 offset-md-3 my-5">
          <h3 class="text-center">現在適用中のお題</h3>
          <p>回答数 <span class="orange-text font-weight-bold">{{ $applyTheme->answer->count() }}</span>件</p>
          <div class="card text-center orange">
            <h3 class="font-weight-bold">{{ $applyTheme->title }}</h3>
            <img src="{{ $applyTheme->image ?? asset('logo/NoImage.jpg') }}" alt="" width=200 height=200 class="my-4">
          </div>
        </div>


        @foreach($themes as $theme)
          <div class="border my-5 text-center">

            @if($theme->apply === 0)
              <div class="border text-right">
                <a href="{{ route('admin.themes.edit', ['theme' => $theme,  'applyTheme'  => $applyTheme] )}}">適用する</a>
                <a href="{{ route('admin.themes.confirm', ['theme' => $theme]) }}" class="red-text">削除</a>
              </div>
            @endif
            <p>タイトル : {{ $theme->title }}</p>
            <img src="{{ $theme->image ?? asset('logo/NoImage.jpg') }}" alt="" width=200 height=200 class="my-4">
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection