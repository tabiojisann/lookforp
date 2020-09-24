@extends('app')

@section('title', '更新画面')

@section('content')
@include('nav')
  <div class="container p-1 my-5 grey lighten-5" style="max-width: 100%;">
    <div class="row">
      <div class="col-12">
        <div class="text-center mt-3">
            @include('errors.all')
        </div>
        <div class="card-text">
          <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}" enctype="multipart/form-data">
            @method('PATCH')
            @include('articles.form')
            <button type="submit" class="btn btn-success btn-block">更新する</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@include('footer.sub')
@endsection