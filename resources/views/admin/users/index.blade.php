@extends('app')

@section('title', '登録ユーザー一覧')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <h3 class="text-center my-4">登録ユーザー 一覧</h3>
    <form action="{{ route('admin.users.search') }}" method="GET">

    <div class="d-flex justify-content-around">
      <input type="text" class="form-control w-50" name="keyword_name" placeholder="名前" value="{{ $keyword_name ?? old('keyword_name') }}">
      <h3>✖️</h3>
      <input type="text" class="form-control w-50" name="keyword_email" placeholder="メールアドレス" value="{{ $keyword_email ?? old('keyword_email') }}">
    </div>
      
      <div class="d-flex justify-content-center p-2">
        <button type="submit" class="btn btn-sm btn-default white-text">検索</button>
      </div>
    </form>
      @foreach($users as $user)
        <table class="table table-sm table-striped table-bordered my-3">
          <thead class="text-center">
            <tr>
              <th class="th-sm">名前</th>
              <th class="th-sm">メールアドレス</th>
              <th class="th-sm"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <a href="{{ route('admin.users.show', ['user' => $user]) }}" class="text-primary">
                  詳細
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      @endforeach
  </div>

  <div class="d-flex justify-content-center col">
    {{ $users->links() }}
  </div>


@endsection