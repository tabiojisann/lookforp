@extends('app')

@section('title', $user->name . 'の気になるリスト')


@section('content')
  @include('nav')

  @include('top')
  
    @foreach($articles as $article)
      <div class="container green lighten-5" style="max-width: 100%;">
        <div class="row">
          <div class="col-12 col-md-8 offset-md-2 my-4">
            @include('articles.card')
          </div>
        </div>
      </div>
    @endforeach
  @include('footer.sub')

@endsection