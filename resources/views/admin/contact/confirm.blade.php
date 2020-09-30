@extends('app')

@section('title', '削除確認問い合わせ')

@section('content')

  @include('admin.nav')

  <div class="container">
    <div class="row">
      <div class="col">
        <form action="{{ route('admin.contacts.destroy',['contact' => $contact]) }}" method="post">
          @csrf
          @method('DELETE')
          <h4 class="text-center my-5">この内容を削除しますか？</h4>
          <div class="border my-5">

            <div class="container my-5">
              <b class="h4">名前 : </b>
              <b class="h4">{{ $contact->name }}</b>
            </div>
            <div class="container my-5">
              <b class="h4">メールアドレス : </b>
              <b class="h4">{{ $contact->email }}</b>
            </div>
            <div class="container">
              <b class="h4">問い合わせ内容</b>
              <p class="">{{ $contact->text }}</p>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-danger my-5">はい</button>
              <a href="{{ route('admin.contacts.index') }}" class="btn btn-light">いいえ</a>
            </div>

          </div>
          
        </form>
      </div>
    </div>
  </div>


@endsection