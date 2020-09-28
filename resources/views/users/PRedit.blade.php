@extends('app')

@section('title', 'PR編集')

@section('content')
  @include('nav')

  <form method="POST" action="{{ route('users.PRupdate', ['user' => $user]) }}">
    @method('PATCH')
    @csrf

    @include('errors.all')
    <div class="container blue lighten-4" style="max-width: 100%; height: 100vh;">
      <user-textarea
      :user="{{json_encode($user->PR)}}"
      :mark-body="{{json_encode($user->mark_body)}}">
      </user-textarea>
      <button type="submit" class="btn btn-success btn-block">更新する</button>
    </div>
  </form>   
 
@endsection