@extends('app')

@section('title', 'Lookforp')

@section('content')
  @include('nav')

  @include('top')

  <!-- body -->


  <div class="row blue lighten-5">

    @guest
    <!-- 記事一覧 -->
      <div class="col-12 col-md-8 offset-md-2 p-3">

        <div class="col d-flex justify-content-between">
          <div class="col-3 pt-4">
            <span class="font-weight-bold">{{ $articles->lastItem() }}</span>
            <span>/</span>
            <span>{{ $articles->total() }}</span>
          </div>
          <div class="col-9 col-md-6">
            @include('articles.tabs', ['hasNew' => true, 'hasPopular' => false])
          </div>
        </div>

        @foreach($articles as $article)
          @include('articles.card')
        @endforeach
      </div>

      <div class="col-12">
        @include('paginate')
      </div>

    @endguest

    @auth
    
      @include('articles.searchForm')

    <!-- 記事一覧 -->
      <div class="col-12 col-md-6 offset-md-1">      
        <div class="d-flex justify-content-between">
          <div class="col-3 col-md-3 pt-4">
            <span class="font-weight-bold">{{ $articles->lastItem() }}</span>
            <span>/</span>
            <span>{{ $articles->total() }}</span>
          </div>
          <div class="col-9 col-md-7">
            @include('articles.tabs', ['hasNew' => true, 'hasPopular' => false])
          </div>
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







