@extends('app')

@section('title', '管理者画面')

@section('content')

@include('admin.nav')

<div class="container border-top" style="max-width: 100%; height: 100vh;">
    <div class="row">
        <div class="col text-center my-5">
            <a href="{{ route('admin.contacts.index') }}">
                <h2 class="my-5">問い合わせ一覧</h2>
            </a>
            <a href="{{ route('admin.users.index') }}">
                <h2 class="my-5">ユーザーデータ一覧</h2>
            </a>
            <a href="{{ route('admin.themes.create') }}">
                <h2 class="my-5">お題投稿</h2>
            </a>
            <a href="{{ route('admin.themes.index') }}">
                <h2 class="my-5">お題一覧</h2>
            </a>
        </div>
    </div>
</div>

@endsection