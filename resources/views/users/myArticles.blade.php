@extends('app')

@section('title', $user->name . 'さんが募集した記事')

@section('content')
  @include('nav')

  @include('users.tabs', ['hasShow' => false, 'hasMyArticles' => true])
  
  @foreach($articles as $article)
    <div class="container blue lighten-5" style="max-width: 100%;">
      <div class="row">
        <div class="col-12 col-md-8 offset-md-2 my-3">
          @include('articles.card')
        </div>
      </div>
    </div>
  @endforeach

  @include('footer')

@endsection




