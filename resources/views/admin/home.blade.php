@extends('app')

@section('title', '管理者画面')

@section('content')

@include('admin.nav')

<div class="container border-top" style="max-width: 100%; height: 100vh;">
    <div class="row">
        <div class="col my-5">

            <div class="border">
                <label for="">データ一覧</label>
                <div class="text-center">
                    <a href="{{ route('admin.contacts.index') }}">
                        <h2 class="my-5">問い合わせ一覧</h2>
                    </a>
                    <a href="{{ route('admin.users.index') }}">
                        <h2 class="my-5">ユーザーデータ一覧</h2>
                    </a>
                </div>
            </div>

            <div class="border">
                <label for="">大喜利のお題</label>
                <div class="text-center">
                    <a href="{{ route('admin.themes.create') }}">
                        <h2 class="my-5">お題投稿</h2>
                    </a>
                    <a href="{{ route('admin.themes.index') }}">
                        <h2 class="my-5">お題一覧</h2>
                    </a>
                </div>
            </div>

            <div class="border">
                <label for="">いいねランキング</label>
                <div class="text-center">
                    <a href="">
                        <h2 class="my-5">ユーザーのいいね数</h2>
                    </a>
                    <a href="">
                        <h2 class="my-5">MVP取得回数</h2>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection