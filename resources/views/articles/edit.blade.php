@extends('app')

@section('title', '更新画面')

@section('content')
@include('nav')
  <div class="container p-1 my-5">
    <div class="row">
      <div class="col-12">
        <div class="text-center mt-3">
            @include('errors.all')
        </div>
        <div class="card-text">
          <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}" enctype="multipart/form-data">
            @method('PATCH')
            @include('articles.form')
            <button type="submit" class="btn btn-light-green btn-block">更新する</button>
          </form>
        </div>
      </div>
    </div>
  </div>


<footer>
  <div class="border-top text-center">
    <div class="my-3">
      <a class="" href="/">  
        <img src="{{ asset('logo/lookforp.png') }}" width="200" border="0" class=" horizontal">
      </a>
    </div>
    <div class="footer-copyright bg-light text-center py-3">Copyright:
      <a href="http://www.lookforp.com/" class="text-white"> © 2020 lookforp inc.</a>
    </div>
  </div>
</footer>
@endsection