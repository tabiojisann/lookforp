@extends('app')

@section('title', 'お問い合わせ確認画面')

@section('content')
  
    <form action="{{ route('contact.send', ['contact' => $contact]) }}" method="POST">
      @csrf
      <div class="container">
        <div class="row">
          <div class="col">
          
            <h4 class="text-center mt-5">この内容で送信しますか？</h4>

            <div class="container col p-5 my-4">
    
              <div>
                <b>お名前:</b>
                <b>{{ $contact->name }}</b>
              </div>

              <input type="hidden" name="name" value="{{ $contact->name }}">

              <br>

              <div>
                <b>メールアドレス:</b>
                <b>{{ $contact->email }}</b>
              </div>

              <input type="hidden" name="email" value="{{ $contact->email }}">
              
              <br>

              <div>
                <b>お問い合わせ内容</b>
                <p>{{ $contact->text }}</p>
              </div>

              <input type="hidden" name="text" value="{{ $contact->text }}">

              <br>

              <div class="text-center">
                <input type="submit"  class="btn btn-primary" value="送信">
                <input type="reset" value="キャンセル" class="btn btn-dark text-white" onclick='window.history.back(-1);'>
              </div>

            </div>

          </div>
        </div>
      </div>
    </form>

  
@endsection