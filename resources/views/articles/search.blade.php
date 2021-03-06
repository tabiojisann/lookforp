@extends('app')
@section('title', '検索結果')

@section('content')
  @include('nav')

  <!-- body -->
  @auth
    @include('articles.tabs', ['hasNew' => false, 'hasPopular' => false])
  @endauth
  
  <div class="row heavy-rain-gradient">


      @include('articles.searchForm') 

    <!-- 検索結果 -->
 
    <div class="col px-5">
      @if(!empty($keyword || $style || $position))
        @if($articles->count())
          <h5 class="my-4"><span class="red-text font-weight-bold">{{ $articles->count() }}</span>件ヒットしました</h5>
          @foreach($articles as $article)
            @include('articles.card')
          @endforeach
        @else
          <p class="mt-5 text-center animated fadeInRight">条件に合致する募集要綱が見つかりませんでした</p>
        @endif
      @else
        <p class="mt-5 text-center animated fadeInRight">条件を最低1項目入力してください</p>
      @endif
    </div>
  </div>  

  @include('footer.sub')

@endsection
