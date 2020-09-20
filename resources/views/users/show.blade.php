@extends('app')

@section('title', $user->name . 'のプロフィール')

@section('content')
  @include('nav')

  @include('flash')
  
  
    @include('users.tabs',['hasShow' => true, 'hasMyArticles' => false])


    <div class="container cloudy-knoxville-gradient" style="max-width: 100%;">

      <div class="row">

        <div class="col-12 col-md-5 offset-md-1 mt-5 pb-5">
          

            <div class="view overlay">
              <img class="card-img-top" src="{{ $user->image ?: asset('logo/NoImage.jpg') }}"  alt="photo">
            </div>

        </div>

        <div class="col-12 col-md-4 offset-md-1 mt-5">

          <div class="name d-flex justify-content-between">
            <h2 class="">{{ $user->name }}</h2>

            @if( Auth::id() !== $user->id )
              <follow-button
               class="ml-auto"
               :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
               :authorized='@json(Auth::check())'
               endpoint="{{ route('users.follow', ['user' => $user]) }}"
               >
               </follow-button>
            @else 
              <a href="{{ route('users.edit', ['user' => $user] ) }}"　class="">
                <div class="border p-2">
                  <i class="fas fa-user-edit pink-text">
                    <span class="text-muted ml-1">編集</span>
                  </i>
                </div>
              </a>
            @endif
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

          <table class="table">

            <thead>

              @if(!empty($user->birthday))
              <tr>
                <th style="width:30%" >生年月日</th>
                <th >{{  $user->birthday->format('Y年 n月 j日') }}</th>
              </tr>
              @endif

              @if(!empty($user->sex))
              <tr>
              <th style="width:30%" >性別</th>
              <th >{{ $user->sex }}</th>
              </tr>
              @endif

              @if(!empty($user->birthplace))
              <tr>
              <th style="width:30%" >出身地</th>
              <th >{{ $user->birthplace }}</th>
              </tr>
              @endif


              @if(!empty($user->height))
              <tr>
              <th style="width:30%" >身長</th>
              <th>
              <?php 
              echo  $user->height . ' ' . 'cm';
              ?>
              </th>
              </tr>
              @endif

              @if(!empty($user->weight)) 
              <tr>
              <th style="width:30%" >体重</th>
              <th>
              <?php 
              echo  $user->weight . ' ' . 'kg';
              ?>
              </th>
              </tr>
              @endif

              @if(!empty($user->hobby))
              <tr>
              <th style="width:30%" >趣味</th>
              <th >{{ $user->hobby }}</th>
              </tr>
              @endif


              @if(!empty($user->skill))
              <tr>
              <th style="width:30%" >特技、資格</th>
              <th >{{ $user->skill }}</th>
              </tr>
              @endif

              @if(!empty($user->background))
              <tr>
              <th style="width:30%" >学歴</th>
              <th >{{ $user->background }}</th>
              </tr>
              @endif

              @if(!empty($user->influence))
              <tr>
              <th style="width:35%" >影響を受けた人物</th>
              <th >{{ $user->influence }}</th>
              </tr>
              @endif

            </thead>
          </table>
          
        </div>
      </div>
    </div> 

 
 
    <div class="container mb-5 mt-3" style="max-width: 100%;">
 
      <div class="row">

        <div class="col-12 col-md-10 offset-md-1 mt-1">
 
          <div class="text border p-5">
            {!! nl2br(($user->mark_body)) !!}
          </div>
        </div>
      </div>
    </div>
  @include('footer')
@endsection








