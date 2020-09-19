@extends('app')

@section('title', $user->name . 'のプロフィール')

@section('content')
  @include('nav')

  @include('flash')
  
  @if( Auth::id() === $user->id )
    @include('users.tabs',['hasShow' => true, 'hasMyArticles' => false])
  @endif

    <div class="container cloudy-knoxville-gradient" style="max-width: 100%;">
      <!-- @include('errors.all') -->

      <div class="row">

        <div class="col-12 col-md-5 offset-md-1 mt-5 pb-5">
          

          @error('image')
            <span class="text-danger">{{ $message }}</span>
          @enderror
          <a type="button" class="text-white col-12 col-md-10" data-toggle="modal" data-target="#centralModalMd">
            <div class="view overlay">
              <img class="card-img-top" src="{{ $user->image ?: asset('logo/NoImage.jpg') }}" width="300" height="300" alt="photo">
              <div class="mask flex-center rgba-stylish-light">
                <i class="fas fa-image h3"></i>
                <p class="white-text">イメージ画像を変更する</p>
              </div>
            </div>
          </a>

          <div class="Mobile col-md-10 mt-5">
            <a href="{{ route('users.show', ['user' => $user]) }}" class="btn btn-block blue text-white">
              結果を表示
            </a>
          </div>
        

          <div class="modal fade" id="centralModalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">

                <form action="{{ route('users.imageUpdate', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
                  @method('PATCH')
                  @csrf
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h5 class="modal-title w-100 " id="myModalLabel">イメージ画像</h5>
                    </div>

                    <div class="container mt-3">
                      <div class="row">
                        <div class="col-12">
                            <user-image-upload
                            :user="{{ $user ?? ''}}">
                            </user-image-upload>
                        </div>
                      </div>
                      
                      <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-info waves-effect text-black btn-sm" data-dismiss="modal">キャンセル</button>
                        <button type="submit" class="btn btn-default text-white btn-md float-right">更新</button>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-5  mt-5">

          <div class="name border">
            <small class="d-block border-bottom text-primary">ニックネーム</small>
            <h2 class="d-inline">{{ $user->name }}</h2>
            <!-- <a href="{{ route('users.profileEdit', ['user' => $user]) }}" class="h4 ml-3"><i class="fas fa-user-edit text-primary"></i></i></a> -->
            <!-- <a href="{{ route('users.profileEdit', ['user' => $user]) }}">
              <i class="fas fa-user-edit border p-2 bg-white text-muted">編集</i>    
            </a> -->

            <a type="button" class="float-right" data-toggle="modal" data-target="#centralModalMd">
              <i class="fas fa-user-edit border p-2 bg-white text-muted">編集</i> 
            </a>
          </div>
      
          <div class="my-4 border">
            <small class="d-block border-bottom text-primary">関連リンク</small>
            <a type="button" href="" class="btn-floating btn-lg "><i class="fab fa-youtube red-text h2"></i>
            <a type="button" href="" class="btn-floating btn-lg"><i class="fab fa-twitter-square blue-text h2"></i>
            <a type="button" href="" class="btn-floating btn-lg mb-2"><img src="{{ asset('logo/blog.jpg') }}" width="33"  alt="">

            <a type="button" class="float-right" data-toggle="modal" data-target="#centralModalMd">
              <i class="fas fa-user-edit border p-2 bg-white text-muted float-right">編集</i> 
            </a>
          </div>

          <div class="my-4 border">
            <small class="d-block border-bottom text-primary">年齢、生年月日</small>
            <tr>
              <th style="width:30%" >生年月日</th>
              <th >{{  $user->birthday->format('Y年 n月 j日') }}</th>
            </tr>

            <a type="button" class="float-right" data-toggle="modal" data-target="#centralModalMd">
              <i class="fas fa-user-edit border p-2 bg-white text-muted float-right">編集</i> 
            </a>
          </div>

          @include('users.profile')

        </div>

        <div class="Desk col-md-10 my-2">
          <a href="{{ route('users.show', ['user' => $user]) }}" class="btn btn-block blue text-white">
            結果を表示
          </a>
        </div>

      </div>
    </div> 

 
 
    <div class="container mb-5 mt-3" style="max-width: 100%;">
 
      <div class="row">

        <div class="col-12 col-md-10 offset-md-1 mt-1">
          @if( Auth::id() === $user->id )
            <a href="{{ route('users.PRedit', ['user' => $user]) }}" class="float-right">
              <i class="far fa-edit p-2 border text-muted">編集</i>
            </a>
          @endif
          <div class="text border p-5">
            {!! nl2br(($user->mark_body)) !!}
          </div>
        </div>
      </div>
    </div>
  @include('footer')
@endsection





