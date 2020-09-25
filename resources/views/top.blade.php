@guest
  <div class="container " style="max-width: 100%; ">
    <div class="row">
      <div class="col-12 d-flex justify-content-between">
        <form action="{{ route('articles.search') }}" method="GET">
          <div class="input-group form-sm form-1 pl-0 pt-2">
            <div class="input-group-prepend ">
              <span class="input-group-text young-passion-gradient lighten-3" id="basic-text1"><i class="fas fa-search text-white"
                  aria-hidden="true"></i></span>
            </div>
            <input class="form-control " type="text" name="keyword" placeholder="キーワードで検索" aria-label="Search" value="{{ $keyword ?? old('keyword') }}">
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

      <div class="col-8 offset-2 text-center">
        <img src="{{ asset('logo/manzai.png') }}" alt="" width="100" height="100" >
        <span>{{ $articles->total() }}件の募集</span>
      </div>
    </div>
  </div>

  <!-- <div class="text-center peach-gradient animated fadeIn slower" style="height: 200px;">
    <img src="https://s3.amazonaws.com/lg-vectors/bitmaps/206127/721602.png?logo_version=0" width="200"  border="0" class="horizontal animated fadeInRight slow">
    <a href="{{ route('register') }}">
      <h2 class="text-success mt-4 animated fadeIn delay-4s">始める</h2>
    </a>
  </div> -->
@endguest

@include('flash')

@auth
  <div class=" morpheus-den-gradient py-5">
    <div class="container border my-4">

      <nav class="nav nav-pills nav-fill mt-5">
        <a class="nav-item nav-link text-white bg young-passion-gradient" href="{{ route('users.edit', ['user' => $user]) }}">プロフィール編集</a>
        <a class="nav-item nav-link text-white bg young-passion-gradient" href="{{ route('users.articles', ['user' => $user]) }}">投稿済み</a>
        <a class="nav-item nav-link text-white bg young-passion-gradient" href="{{ route('articles.create') }}">募集をかける</a>
      </nav>
    </div>
  </div>
@endauth

