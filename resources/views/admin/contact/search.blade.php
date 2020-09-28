@extends('app')

@section('title', '問い合わせ検索結果')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <h4 class="text-center my-4">検索結果</h4>
    <form action="{{ route('admin.contacts.search') }}" method="GET">
      <div class="d-flex justify-content-around">
        <input type="text" class="form-control w-50" name="keyword_name" placeholder="名前" value="{{ $keyword_name ?? old('keyword_name') }}">
        <h3>✖️</h3>
        <input type="text" class="form-control w-50" name="keyword_email" placeholder="メールアドレス" value="{{ $keyword_email ?? old('keyword_email') }}">
      </div>
      <div class="d-flex justify-content-center p-2">
        <button type="submit" class="btn btn-default white-text">検索</button>
      </div>
    </form>

    <a href="{{ route('admin.contacts.index') }}" class="btn-sm btn-indigo text-white">戻る</a>

    @if(!empty($keyword_name || $keyword_email))
      @if($contacts->count())
        <h5 class="my-4"><span class="red-text font-weight-bold">{{ $contacts->count() }}</span>件</h5>
        @foreach($contacts as $contact)
        <table class="table table-sm table-striped table-bordered my-3">
            <thead>
              <tr>
                <th class="th-sm"></th>
                <th class="th-sm">名前</th>
                <th class="th-sm">メールアドレス</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <a href="{{ route('admin.contacts.show', ['contact' => $contact]) }}" class="text-primary">
                    詳細
                  </a>
                </td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
              </tr>
            </tbody>
          </table>
        @endforeach
      @else
        <p class="mt-5 text-center animated fadeInRight">条件に合致する募集要綱が見つかりませんでした</p>
      @endif
    @else
      <p class="mt-5 text-center animated fadeInRight">条件を最低1項目入力してください</p>
    @endif
  </div>

@endsection