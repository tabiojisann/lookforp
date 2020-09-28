@extends('app')

@section('title', 'ユーザー詳細')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <div class="border my-5">

      <a href="{{ route('admin.users.index') }}" class="btn-sm btn-indigo text-white">戻る</a>

      <div class="row">
        <div class="col-10 offset-1">
          <div class="text-center my-3">
            <img src="{{ $user->image ?: asset('logo/user.jpg') }}" class="rounded-circle" width="50" height="50" alt="">
          </div>
          <table class="table">
            <thead>
              <tr>
                <th class="th-sm">id</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->id }}</th>
              </tr>
              <tr>
                <th class="th-sm">名前</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->name }}</th>
              </tr>
              <tr>
                <th class="th-sm">メールアドレス</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->email }}</th>
              </tr>
              <tr>
                <th class="th-sm">性別</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->sex }}</th>
              </tr>
              <tr>
                <th class="th-sm">生年月日</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->birthday }}</th>
              </tr>
              <tr>
                <th class="th-sm">年齢</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->age }}</th>
              </tr>

              <tr>
                <th class="th-sm">出身地</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->birthplace }}</th>
              </tr>
              <tr>
                <th class="th-sm">身長</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->height }}</th>
              </tr>
              <tr>
                <th class="th-sm">体重</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->weight }}</th>
              </tr>
              <tr>
                <th class="th-sm">学歴</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->background }}</th>
              </tr>
              <tr>
                <th class="th-sm">趣味</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->hobby }}</th>
              </tr>
              <tr>
                <th class="th-sm">youtube</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->youtube }}</th>
              </tr>
              <tr>
                <th class="th-sm">twitter</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->twitter }}</th>
              </tr>
              <tr>
                <th class="th-sm">ブログ</th>
                <th class="th-sm">:</th>
                <th class="th-sm">{{ $user->blog }}</th>
              </tr>
            </thead>
          </table>
          <br>
          <div class="border my-4">
            <h5>PR</h5>
            <p class="p-4">{{ $user->PR }}</p>
          </div>
        </div>
      </div>
    </div>  
  </div>

@endsection