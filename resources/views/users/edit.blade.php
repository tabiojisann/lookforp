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

          <div class=" col-md-10 mt-2">
            <a href="{{ route('users.show', ['user' => $user]) }}" class="btn btn-block blue text-white">
              結果を表示
            </a>
          </div>
        
          <!-- modal -->

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

        <!-- modal -->

        <div class="col-12 col-md-5  mt-5">

          <form action="{{ route('users.profileUpdate', ['user' => $user]) }}" method="POST">
            @method('PATCH')
            @csrf

            <div class="name border">
              <small class="d-block border-bottom text-primary pl-3">ニックネーム<span class="text-danger">(必須)</span></small>
              <div class="form-grouppt p-3">
                <input type="text" name="name" placeholder="12文字以内" class="form-control w-75" value="{{ $user->name ?? old('name') }}" required>
              </div>
            </div>

            <div class="my-4 border">
              <small class="d-block border-bottom text-primary pl-3">関連リンク</small>

              <div class="form-group col">
                <label class="text-muted"><i class="fab fa-youtube red-text"></i>Youtubeチャンネル</label class="text-muted">
                <input type="url" name="youtube" class="form-control" value="{{ $user->youtube ?? old('youtube') }}">
              </div>
              @error('youtube')
                <small class="text-danger">{{ $message }}</small>
              @enderror

              <div class="form-group  col">
                <label class="text-muted"><i class="fab fa-twitter-square blue-text"></i>Twitterアカウント</label>
                <input type="url" name="twitter" class="form-control" value="{{ $user->twitter ?? old('twitter') }}">
              </div>
              @error('twitter')
                <small class="text-danger">{{ $message }}</small>
              @enderror

              <div class="form-group col ">
                <label class="text-muted"><img src="{{ asset('logo/blog.jpg') }}" width="17"  alt="">ブログURL</label>
                <input type="url" name="blog" class="form-control" value="{{ $user->blog ?? old('blog') }}">
              </div>
              @error('blog')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div> 

            <!-- <div class="form-group col-10 col-md-7 col-lg-5 mt-5">
              <strong class="text-muted">生年月日</strong class="text-muted">
              <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
            </div>
    
              @error('birthday')
                <span class="text-danger">{{ $message }}</span>
              @enderror -->
            
            <div class="my-4 border">
              <small class="d-block border-bottom text-primary mb-4 pl-3">プロフィール</small>
              <div class="form-group col border-bottom">
                <label class="">性別</label>
                <div class="custom-control custom-radio custom-control-inline ml-5">
                  <input type="radio" class="custom-control-input" id="男性" name="sex" value="男性"  
                    <?php 
                      if( !empty($user->sex)){
                        if($user->sex === "男性") {
                          echo 'checked';
                        }
                      }
                    ?>
                  >
                  <label class="custom-control-label" for="男性">男性</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="女性" name="sex" value="女性"  
                    <?php 
                      if( !empty($user->sex)){
                        if($user->sex === "女性") {
                          echo 'checked';
                        }
                      }
                    ?>
                  >
                  <label class="custom-control-label" for="女性">女性</label>
                </div>
              </div>
              @error('sex')
                <small class="text-danger">{{ $message }}</small>
              @enderror

              <div class="form-group col-12 border-bottom d-flex justify-content-between mt-4">
                <label class="">出身地</label>
                <select type="text" name="birthplace" class="form-control w-50 ">
                    @foreach(config('prefecture') as $key => $name)
                      <option value="{{ $name }}"
                      <?php
                        if(!empty($user->birthplace)) {
                          if($user->birthplace == $name) {
                            echo 'selected';
                          }
                        }
                      ?>
                      >
                      {{ $name }}
                      </option>
                    @endforeach
                </select>
              </div>
              @error('birthplace')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              
              <div class="form-group border-bottom">
                @error('height')
                  <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="col-12 d-flex  justify-content-between mt-4">
                  <label>身長</label>
                  <div>
                    <input type="number" name="height" id="height" class="col-7" value="{{ $user->height ?? old('height') }}">cm
                  </div>
                </div>
              </div>
            
            
              <div class="form-group border-bottom">
                @error('weight')
                  <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="col-12 d-flex  justify-content-between mt-4">
                  <label>体重</label>
                  <div>
                    <input type="number" name="weight" id="weight" class="col-7" value="{{ $user->weight ?? old('weight') }}">kg
                  </div>
                </div>
              </div>
              
              
              <div class="form-group border-bottom">
                @error('hobby')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="col-12 d-flex justify-content-between mt-4">
                  <label>趣味</label>
                  <input type="text" name="hobby" class="form-control col-6" value="{{ $user->hobby ?? old('hobby') }}">
                </div>
              </div>

              <div class="form-group border-bottom">
                @error('skill')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="col-12 d-flex justify-content-between mt-4">
                  <label>特技、資格</label>
                  <input type="text" name="skill" class="form-control col-6" value="{{ $user->skill ?? old('skill') }}">
                </div>
              </div>
            
            
              <div class="form-grup border-bottom">
                @error('background')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="col-12 d-flex justify-content-between mt-4">
                  <label>学歴</label>
                  <input type="text" name="background" class="form-control col-6" value="{{ $user->background ?? old('background') }}">
                </div>
              </div>
            
              <div class="form-group border-bottom">
                @error('infuluence')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="col-12 d-flex justify-content-between mt-4">
                  <label class="">影響を受けたもの</label>
                  <input type="text" name="influence" class="form-control col-6" value="{{ $user->influence ?? old('influence') }}">
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-center my-3">
              <input type="submit" class="btn btn-default mt-5 px-5" value="更新">
            </div>
          </form> 
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





