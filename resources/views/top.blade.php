@guest
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

    <div class="col-12 col-md-8 offset-md-2 my-4 d-flex justify-content-between">
      <img class="animated fadeInRight fast" src="{{ asset('logo/manzai.png') }}" alt="" width="90" height="90" >
      <img class="animated fadeInUp fast delay-2s" src="{{ asset('logo/monomane.png') }}" alt="" width="90" height="90">
      <img class="animated fadeInLeft delay-1s fast" src="{{ asset('logo/conte.png') }}" alt="" width="90" height="90">
    </div> 

    <div class="text-center my-5">
      <p>これからお笑いを始めようと思ったら</p>
      <p>まずは
        <span class="pink-text">理想の相方</span>
        探しから!!
      </p>
    </div>

    <div class="container col-12 col-md-6 offset-md-3 ">
      <div class="d-flex justify-content-around">
        <a href="{{ route('articles.search') }}" class="border-bottom border-warning h6 text-muted">求人を探す</a>
        <a href="{{ route('users.search') }}" class="border-bottom border-warning h6 text-muted">人を探す</a>
        <a href="{{ route('articles.create') }}" class="border-bottom border-success h6 text-muted">募集かける</a>
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
  <!-- <div class=" morpheus-den-gradient py-5">
    <div class="container border my-4">

      <nav class="nav nav-pills nav-fill mt-5">
        <a class="nav-item nav-link text-white bg young-passion-gradient" href="{{ route('users.edit', ['user' => $user]) }}">プロフィール編集</a>
        <a class="nav-item nav-link text-white bg young-passion-gradient" href="{{ route('users.articles', ['user' => $user]) }}">投稿済み</a>
        <a class="nav-item nav-link text-white bg young-passion-gradient" href="{{ route('articles.create') }}">募集をかける</a>
      </nav>
    </div>
  </div> -->

  <div class="container col-12 col-md-6 offset-md-3 ">
    <div class="d-flex justify-content-around">
      <a href="{{ route('articles.index') }}" class="border-bottom border-warning h6 text-muted">募集一覧</a>
      <a href="{{ route('articles.create') }}" class="border-bottom border-success h6 text-muted">募集かける</a>
      <a href="{{ route('users.keep', ['user' => $user]) }}" class="border-bottom border-success h6 text-muted">気になるリスト</a>
    </div>
  </div>
  <div class="container col-12 col-md-6 offset-md-3 ">
    <div class="d-flex justify-content-around">
      <a href="{{ route('articles.search') }}" class="border-bottom border-warning h6 text-muted">求人を探す</a>
      <a href="{{ route('users.search') }}" class="border-bottom border-warning h6 text-muted">人を探す</a>
      <a href="{{ route('users.edit', ['user' => $user]) }}" class="border-bottom border-warning h6 text-muted">プロフィール編集</a>
    </div>
  </div>


  
@endauth

