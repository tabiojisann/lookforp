@extends('app')

@section('title', 'お問い合わせ')

@section('content')
  @include('nav')

  <div class="container bg blue lighten-5" style="max-width: 100%;">
    <div class="row">
      <div class="col">

        <div class="container col text-center mt-5">
          <h3>お問い合わせはこちら</h3>
        </div>

        <div class="container bg-light p-4 my-4">

          <form action="{{ route('contact.confirm') }}" method="POST">
            @csrf

            <div class="form-group">
              <label>お名前</label>
              <label class="red text-white px-2">必須</label>
              @error('name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
           

            <div class="form-group">
              <label>メールアドレス</label>
              <label class="red text-white px-2">必須</label>
              @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
           
          
            <div class="form-group">
              <label>お問い合わせ内容</label>
              <label class="red text-white px-2">必須</label>
              @error('text')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              <textarea name="text" id="" class="form-control" cols="30" rows="10" required>{{ old('text') }}</textarea>
            </div>
            

            <div class="text-center">
              <button type="submit" class="btn blue text-white">送信</button>
            </div>

          </form>

        </div>
        
      </div>
    </div>
  </div>

  @include('footer.sub')
  
@endsection