@extends('app')

@section('title', $user->name . 'のプロフィール')

@section('content')
  @include('nav')

  @include('flash')
  
  @if( Auth::id() === $user->id )
    @include('users.tabs',['hasShow' => true, 'hasMyArticles' => false])
  @endif

    <div class="container cloudy-knoxville-gradient" style="max-width: 100%;">
      @include('errors')

      <div class="row">

        <div class="col-12 col-md-5 offset-md-1 mt-5 pb-5">
          
          <a type="button" class="text-white col-12 col-md-10" data-toggle="modal" data-target="#centralModalMd">
            <div class="view overlay">
              <img class="card-img-top" src="{{ $user->image ?: asset('logo/NoImage.jpg') }}" width="300" height="300" alt="photo">
              <div class="mask flex-center rgba-stylish-light">
                <i class="fas fa-image h3"></i>
                <p class="white-text">イメージ画像を変更する</p>
              </div>
            </div>
          </a>


 
          <div class="modal fade" id="centralModalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">

                <form action="{{ route('users.imageUpdate', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
                  @method('PATCH')
                  @csrf
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h5 class="modal-title w-100 " id="myModalLabel">イメージ画像</h5>
                    </div>

                    @include('errors')

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

        <div class="col-12 col-md-4 offset-md-1 mt-5">

          <div class="name d-flex justify-content-between">
            <h2 class="">{{ $user->name }}</h2>
            <a href="{{ route('users.profileEdit', ['user' => $user]) }}" class="h3 ml-3"><i class="fas fa-user-edit text-primary"></i></i></a>
          </div>
      
          <div class="pb-5">
            @if(!empty($user->youtube))
              <a type="button" href="{{ $user->youtube }}" class="btn-floating btn-lg"><i class="fab fa-youtube red-text h2"></i></a>
            @endif

            @if(!empty($user->twitter))
              <a type="button" href="{{ $user->twitter }}" class="btn-floating btn-lg "><i class="fab fa-twitter-square blue-text h2"></i></a>
            @endif

            @if(!empty($user->blog))
              <a type="button" href="{{ $user->blog }}" class="btn-floating btn-lg mb-2"><img src="{{ asset('logo/blog.jpg') }}" width="35"  alt=""></a>
            @endif
    
          </div>

          @include('users.profile')

        </div>
        

      </div>
    </div> 

 
 
    <div class="container mb-5 mt-3" style="max-width: 100%;">
 
      <div class="row">

        <div class="col-12 col-md-8 offset-md-2 mt-1">
 
          <div class="text border p-5">
          @if( Auth::id() === $user->id )
      <a href="{{ route('users.PRedit', ['user' => $user]) }}" class="float-right h3 ml-3"><i class="fas fa-user-edit text-primary"></i></i></a>
          @endif
            {!! nl2br(($user->mark_body)) !!}
          </div>
        </div>
      </div>
    </div>
  @include('footer')
@endsection





