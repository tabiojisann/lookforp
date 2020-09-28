@extends('app')

@section('title', '問い合わせ詳細')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <div class="border my-5">

      <a href="{{ route('admin.contacts.index') }}" class="btn-sm btn-indigo text-white">戻る</a>

      <div class="d-flex justify-content-around mt-3">
        <h5>名前 : </h5>
        <h5>{{ $contact->name }}</h5>
      </div>

      <br>

      <div class="d-flex justify-content-around">
        <h5>メールアドレス : </h5>
        <h5>{{ $contact->email }}</h5>
      </div>

      <br>

    </div>  
  </div>

  <div class="container my-5">
    <div class="p-5">
      <h5>問い合わせ内容:</h5>
        <p class="border p-4">{!! nl2br(e($contact->text)) !!}</p>
      </div>

    </div>
  </div>

@endsection