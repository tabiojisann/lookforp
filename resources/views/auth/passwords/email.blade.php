
@extends('app')

@section('title', 'パスワード再設定')

@section('content')
  <div class="container">
    <div class="row">
      <a class="col-12 text-center my-5" href="/">  
        <img src="{{ asset('logo/lookforp.png') }}" height="80" width="300" border="0" class="horizontal">
      </a>  
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">パスワード再設定</h2>
            <small class="pink-text">お使いのメールアドレスを入力してください</small>

            @include('errors.all')

            @if (session('status'))
              <div class="card-text alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <div class="card-text">
              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="text" id="email" name="email" required>
                </div>

                <button class="btn btn-block blue text-white mt-2 mb-2" type="submit">メール送信</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection