@guest

  @if(!empty($theme))
    <div class="container col col-md-6 my-2">
      <div class="card text-center">

        <div class="card-header">
          <h4>今週のお題</h4>
        </div>

        <div class="card-body bg orange">
          <h3 class="font-weight-bold">{!! nl2br(e($theme->title)) !!}</h3>
        </div>
        @if(isset($theme->image))
          <div class="text-center">
            <img src="{{ $theme->image ?? '' }}" alt="" class="imgAuto my-4">
          </div>
        @endif

      </div>
    </div>

    
    <!-- swiper -->
    <div class="swiper-container my-4">
      <div class="swiper-wrapper">


        <!-- slide-content -->
        <div class="swiper-slide">
          <div class="card border">


            <!-- slide-header -->
            <div class="container text-center">
              <b class="h2"><i class="fas fa-crown yellow-text"></i></b>
              <b class="h2">1位</b>
            </div>

            <div class="card-header d-flex justify-content-between">

  
                <div class="Desk">
                  <img src="{{ $answers[0]->user->image ?? asset('logo/user.jpg') }}" alt="" height="20" width="20" class="rounded-circle">
                  <small>{{ $answers[0]->user->name }}</small>
                </div>
                <div class="Mobile">
                  <img src="{{ $answers[0]->user->image ?? asset('logo/user.jpg') }}" alt="" height="30" width="30" class="rounded-circle">
                  <h4 class="d-inline">{{ $answers[0]->user->name }}</h4>
                </div>

                <div class="Desk">
                  <small><i class="fas fa-star yellow-text"></i></small>
                  <small>{{ $answers[0]->count_likes }}</small>
                </div>
                <div class="Mobile">
                  <h4 class="d-inline"><i class="fas fa-star yellow-text"></i></h4>
                  <h4 class="d-inline">{{ $answers[0]->count_likes }}</h4>
                </div>

            </div>

            <!-- slide-header -->


            <!-- slide-body -->

            <div class="card-body Mobile">
              <h2>{!! nl2br(e($answers[0]->text)) !!}</h2>
            </div>

            <div class="card-body Desk">
              <p>{!! nl2br(e($answers[0]->text)) !!}</p>
            </div>

            <!-- slide-body -->

          </div>
        </div>

        <div class="swiper-slide">
          <div class="card border">

            <!-- slide-header -->
            <div class="container text-center">
              <b class="h2"><i class="fas fa-crown grey-text"></i></b>
              <b class="h2">2位</b>
            </div>

            <div class="card-header d-flex justify-content-between">

  
                <div class="Desk">
                  <img src="{{ $answers[1]->user->image ?? asset('logo/user.jpg') }}" alt="" height="20" width="20" class="rounded-circle">
                  <small>{{ $answers[1]->user->name }}</small>
                </div>
                <div class="Mobile">
                  <img src="{{ $answers[1]->user->image ?? asset('logo/user.jpg') }}" alt="" height="30" width="30" class="rounded-circle">
                  <h4 class="d-inline">{{ $answers[1]->user->name }}</h4>
                </div>

                <div class="Desk">
                  <small><i class="fas fa-star yellow-text"></i></small>
                  <small>{{ $answers[1]->count_likes }}</small>
                </div>
                <div class="Mobile">
                  <h4 class="d-inline"><i class="fas fa-star yellow-text"></i></h4>
                  <h4 class="d-inline">{{ $answers[1]->count_likes }}</h4>
                </div>

            </div>

            <!-- slide-header -->


            <!-- slide-body -->

            <div class="card-body Mobile">
              <h2>{!! nl2br(e($answers[1]->text)) !!}</h2>
            </div>

            <div class="card-body Desk">
              <p>{!! nl2br(e($answers[1]->text)) !!}</p>
            </div>

            <!-- slide-body -->

          </div>
        </div>

        <div class="swiper-slide">
          <div class="card border">


            <!-- slide-header -->
            <div class="container text-center">
              <b class="h2"><i class="fas fa-crown red-text"></i></b>
              <b class="h2">3位</b>
            </div>

            <div class="card-header d-flex justify-content-between">

  
                <div class="Desk">
                  <img src="{{ $answers[2]->user->image ?? asset('logo/user.jpg') }}" alt="" height="20" width="20" class="rounded-circle">
                  <small>{{ $answers[2]->user->name }}</small>
                </div>
                <div class="Mobile">
                  <img src="{{ $answers[2]->user->image ?? asset('logo/user.jpg') }}" alt="" height="30" width="30" class="rounded-circle">
                  <h4 class="d-inline">{{ $answers[2]->user->name }}</h4>
                </div>

                <div class="Desk">
                  <small><i class="fas fa-star yellow-text"></i></small>
                  <small>{{ $answers[2]->count_likes }}</small>
                </div>
                <div class="Mobile">
                  <h4 class="d-inline"><i class="fas fa-star yellow-text"></i></h4>
                  <h4 class="d-inline">{{ $answers[2]->count_likes }}</h4>
                </div>

            </div>

            <!-- slide-header -->


            <!-- slide-body -->

            <div class="card-body Mobile">
              <h2>{!! nl2br(e($answers[2]->text)) !!}</h2>
            </div>

            <div class="card-body Desk">
              <p>{!! nl2br(e($answers[2]->text)) !!}</p>
            </div>

            <!-- slide-body -->

          </div>
        </div>
        <!-- slide-content -->

      </div>
    </div>
    <!-- swiper -->
  @else
    <div class="containerr">
      <div class="text-center py-5">
        <div class="card col-10 offset-1 col-md-6 offset-md-3 ">
          <h3 class="my-5">調整中</h3>
          <p>しばらくお待ちください</p>
        </div>
      </div>
    </div>
  @endif

  <div class="container orange lighten-5" style="max-width: 100%;">
    <div class="row Mobile">
      <div class="col-12">
        <div class="container d-flex justify-content-end">
          <form action="{{ route('articles.search') }}" method="GET">
            <div class="input-group form-sm form-1 pl-0 pt-2">
              <div class="input-group-prepend ">
                <span class="input-group-text young-passion-gradient lighten-3" id="basic-text1"><i class="fas fa-search text-white"
                    aria-hidden="true"></i></span>
              </div>
              <input class="form-control mr-3" type="text" name="keyword" placeholder="キーワードで検索" aria-label="Search" value="{{ $keyword ?? old('keyword') }}">
            </div>
          </form>
          <ul class="list-unstyled pt-3 pr-3">
            <li class="d-inline">
              <a href="{{ route('contact.index') }}">
                <small class="text-muted">お問い合わせ</small>
              </a>
            </li>
            <small>|</small>
            <li class="d-inline">
              <a href="{{ route('footer.help') }}">
                <small class="text-muted">ヘルプ</small>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row Desk">
      <div class="col-12">
        <div class="container mt-3">
          <form action="{{ route('articles.search') }}" method="GET">
            <div class="input-group form-sm form-1 pl-0">
              <div class="input-group-prepend ">
                <span class="input-group-text young-passion-gradient lighten-3" id="keySearch"><i class="fas fa-search text-white"
                    aria-hidden="true"></i></span>
              </div>
              <input class="form-control keySearch" type="text" name="keyword" placeholder="キーワードで検索" aria-label="Search" value="{{ $keyword ?? old('keyword') }}">
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- <div class="col-12 col-md-8 offset-md-2 my-4 d-flex justify-content-between">
      <img class="animated fadeInRight fast" src="{{ asset('logo/manzai.png') }}" alt="" width="90" height="90" >
      <img class="animated fadeInUp fast delay-2s" src="{{ asset('logo/monomane.png') }}" alt="" width="90" height="90">
      <img class="animated fadeInLeft delay-1s fast" src="{{ asset('logo/conte.png') }}" alt="" width="90" height="90">
    </div>  -->

    <div class="text-center my-5">
      <p>これからお笑いを始めようと思ったら</p>
      <p>まずは
        <span class="pink-text">理想の相方</span>
        探しから!!
      </p>
    </div>

    <div class="container col-12 col-md-6 offset-md-3 ">
      <div class="d-flex justify-content-around">
        <a href="{{ route('articles.search') }}" class="border  young-passion-gradient p-2 text-white">求人を探す</a>
        <a href="{{ route('users.search') }}" class="border  green p-2 text-white">人を探す</a>
      </div>

    </div>
  </div>
  <h5>現在
    <span class="h4 orange-text">{{ $articles->total() }}</span>
    件の求人があります
  </h5>
@endguest

@include('flash')

@auth

  @if(!empty($theme))
    <div class="container">

      <div class="border bg blue lighten-5 text-center">
        <a href="{{ route('articles.create') }}" class="btn btn-sm btn-outline-grey  text-muted">募集かける</a>
        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-sm btn-outline-grey  text-muted">プロフィール編集</a>
        <a href="{{ route('users.keep', ['user' => $user]) }}" class="btn btn-sm btn-outline-grey  text-muted">気になるリスト</a>
      </div>

      <div class="text-center py-5">
        <h2 class="col-12">今週のお題</h2>

        <div class="card col-10 offset-1 col-md-6 offset-md-3 orange">
          <h3 class="font-weight-bold mt-3">{!! nl2br(e($theme->title)) !!}</h3>
          @if(isset($theme->image))
            <div class="text-center">
              <img src="{{ $theme->image ?? '' }}" alt="" class="imgAuto my-4">
            </div>
          @endif
        </div>

        <div class="border col-10 offset-1 col-md-6 offset-md-3">
          <a href="{{ route('answers.index', ['theme' => $theme]) }}">
            <button class="btn btn-outline-indigo waves-effect my-2">回答一覧</button>
          </a>
        </div>

      </div>
    </div>
  @else
    <div class="containerr">
      <div class="text-center py-5">
        <div class="card col-10 offset-1 col-md-6 offset-md-3 ">
          <h3 class="my-5">調整中</h3>
          <p>しばらくお待ちください</p>
        </div>
      </div>
    </div>
  @endif

  <div class="container col-12 col-md-6 offset-md-3 mb-3">
    <div class="d-flex justify-content-around">
      <a href="{{ route('articles.search') }}" class="border young-passion-gradient p-2 text-white">求人を探す</a>
      <a href="{{ route('users.search') }}" class="border green p-2 text-white">人を探す</a>
    </div>
  </div>
  
@endauth
