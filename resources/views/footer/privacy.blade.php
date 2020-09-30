@extends('app')

@section('title', 'ヘルプ')

@section('content')
  @include('nav')

  <div class="cantainer" style="max-width: 100%;">
    <div class="row">

      <div class="container my-5">
        <h2 class="border-bottom">プライバシーポリシー</h2>
        <small>LookForp（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</small>
      </div>
    </div>
  </div>

  <style>
     .help {
       overflow: scroll;
     }
  </style>


  @include('footer.sub')
@endsection