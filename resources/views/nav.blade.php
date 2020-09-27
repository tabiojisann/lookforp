  @guest
    <nav class="navbar navbar-dark light-color">
      <a class="navbar-brand" href="/">  
        <img src="{{ asset('logo/lookforp.png') }}" width="150" border="0" class="horizontal">
      </a>
      <div>
        <a href="{{ route('login') }}" class="btn btn-outline-danger waves-effect p-1 ">
          <span class="text-primary">ログイン</span></a>
        <a href="{{ route('register') }}" class="btn blue text-white p-2 ">会員登録</a>
      </div>  
    </nav>
  @endguest

  @auth

  <!-- モバイル -->

    <nav class="navbar navbar-expand-lg navbar-light mb-4 Desk navnav">

      <a class="navbar-brand" href="/">  
        <img src="{{ asset('logo/lookforp.png') }}" width="120" border="0" class="horizontal">
      </a>  

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse">
      <!-- <p class="mb-0 pr-3 text-right h2"><i class="fas fa-times red-text collapse-close"></i></p> -->
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          
          <li>
            <button form="logout-button-mobile" class="dropdown-item text-danger" type="submit">
              ログアウト
            </button>
            <form id="logout-button-mobile" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </li>

        </ul>
        <!-- Links -->
     
      </div>
      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->


    <!-- デスクトップ -->

    <nav class="navbar navbar-dark light-color Mobile">
      <a class="navbar-brand" href="/">  
      <img src="{{ asset('logo/lookforp.png') }}" width="150" border="0" class="horizontal">
      </a>  
      <ul class="navbar-nav ml-auto">
        <button type="submit" form="logout-button-desk" class="btn btn-outline-danger waves-effect">ログアウト</button>
      </ul>
      <form action="{{ route('logout') }}" method="POST" id="logout-button-desk">
        @csrf
      </form>
    </nav>

  @endauth

