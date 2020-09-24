@extends('app')

@section('title', '人気順')

@section('content')
  @include('nav')
  @include('top')



  <div class="row blue lighten-4">

  @guest
  <!-- 記事一覧 -->
  <div class="col-10 offset-1 col-md-8 offset-md-2 p-3">

      <div class="d-flex justify-content-between">
        <div class="">
          <span class="font-weight-bold">{{ $articles->lastItem() }}</span>
          <span>/</span>
          <span>{{ $articles->total() }}件の募集</span>
        </div>

        @include('articles.tabs', ['hasNew' => false, 'hasPopular' => true])
      </div>
      @foreach($articles as $article)
        @include('articles.card')
      @endforeach

      @include('paginate')
    </div>

  @endguest

  @auth

      
    @include('firstMessage')

    <div class="card border-light col-md-4 col-lg-3 offset-md-1 my-5  Mobile search">
      @include('articles.searchForm')
    </div>

  <!-- 記事一覧 -->
    <div class="col-12 col-md-6 offset-md-1 pb-5">
      <div class="mt-5">
          @include('paginate')
      </div>
      <div class="d-flex justify-content-between mr-5">
        <div class="">
          <span class="font-weight-bold">{{ $articles->lastItem() }}</span>
          <span>/</span>
          <span>{{ $articles->total() }}件の募集</span>
        </div>
        @auth
          @include('articles.tabs', ['hasNew' => false, 'hasPopular' => true])
        @endauth

      </div>

      @foreach($articles as $article)
        @include('articles.card')
      @endforeach
      @include('paginate')
    </div>
    
  @endauth


  </div>

  @include('footer.main')


@endsection


