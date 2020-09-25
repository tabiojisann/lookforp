
@extends('app')

@section('title', 'ユーザー登録')

@section('content')

    <!-- <img src="https://s3.amazonaws.com/lg-vectors/bitmaps/206127/721602.png?logo_version=0" width="100" border="0" class="horizontal"> -->
 
  <div class="container pb-5" style="max-width: 100%;">
  
    <div class="row">

      <a class="col-12 text-center my-5" href="/">  
        <img src="{{ asset('logo/lookforp.png') }}" height="80" width="300" border="0" class="horizontal">
      </a>  

      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mx-xl-5 grey lighten-5">
          <div class="card-body">

            <p class="h4 text-center border-bottom py-4">新規登録</p>

            <form method="POST" class="" action="{{ route('register') }}">
              @csrf
            
              
              <!-- <div class="form-group">
                <label for="userName" class="font-weight-light" >ユーザー名(12文字以内)</label>
                <input type="text" id="name" name="name" v-model="name" class="form-control" value="{{ old('name') }}" required/>
              </div> -->

              @error('name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              <name-validate>
              </name-validate> 
             
              @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              <email-validate>
              </email-validate>
             
              @error('password')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              <password-validate>
              </password-validate>
             

              <div class="form-group">
                <label for="password_confirmation" class="font-weight-light">パスワード(確認)</label>
                @error('password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
              </div>
              

       
              <!-- <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" id="email" name="email" class="form-control" required value="{{ old('email') }}">
              </div>  -->

              <!-- <div class="form-group">
                <label for="password" class="font-weight-light">パスワード(8文字以上の英数字)</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>

              <div class="form-group">

                <label for="password_confirmation" class="font-weight-light">パスワード(確認)</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>

              </div> -->
              <div class="text-center">
                <small>
                  <i class="fas fa-exclamation-triangle yellow-text"></i>
                  <a href="{{ route('footer.terms') }}">利用規約</a>
                  をご確認の上で登録してください
                </small>

                <br>

                <small>登録が完了した時点で
                  <a href="{{ route('footer.terms') }}">利用規約</a>
                  に同意したものとみなします
                </small>
              </div>

              
              <div class="text-center py-4 mt-3">
                <button class="btn  btn-info" type="submit">登録</button>
              </div>

            </form>

            <div class="mt-0 text-center">
                <a href="{{ route('login') }}" class="text-success">ログインはこちら</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@include('footer.sub')
@endsection