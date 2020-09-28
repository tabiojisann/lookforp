@extends('app')

@section('title', '問い合わせ一覧')

@section('content')

  @include('admin.nav')

  <div class="container border-top">
    <h3 class="text-center my-4">問い合わせ一覧</h3>
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
  </div>

  <div class="d-flex justify-content-center col">
    {{ $contacts->links() }}
  </div>


@endsection