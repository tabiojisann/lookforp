@extends('app')

@section('title', '投稿画面')

@section('content')
  @include('nav')
    <div class="container p-1 my-5 grey lighten-4" style="max-width: 100%;">
      <div class="row">
        <div class="col-12">
          <div class="text-center mt-3">
            @include('errors.all')
          </div>
          <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @include('articles.form')
            <button type="submit" class="btn blue text-white btn-block ">投稿する</button>
          </form>
        </div>
      </div>
    </div>

  @include('footer.sub')

   
@endsection