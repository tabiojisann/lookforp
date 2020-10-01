@extends('app')

@section('title', 'ヘルプ')

@section('content')
  @include('nav')

  <div class="cantainer" style="max-width: 100%; height: 100vh;">
    <div class="row">
      <div class="text-center col-8 offset-2 bg-white border p-5 mt-5" style="height: 80vh;">
        <h5>質問等あればこちらまでお願いします</h5>
        <a href="{{ route('contact.index') }}">問い合わせ</a>
      </div>
    </div>
  </div>

  @include('footer.sub')
@endsection