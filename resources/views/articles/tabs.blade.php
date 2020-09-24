<!-- PC -->

  <ul class="nav nav-tabs nav-justified mt-3" id="top" role="tablist">
    <li class="nav-item">
      <a   href="{{ route('articles.index') }}"  class="nav-link 
                {{ $hasNew ? 'active blue
                                  text-white animated fadeIn' 
                                : 'text-muted' }}" >
        新着順
      </a> 
    </li>

    <li class="nav-item">
      <a   href="{{ route('articles.popular') }}"  class="nav-link 
                {{ $hasPopular ? 'active blue
                                  text-white animated fadeIn' 
                                : 'text-muted' }}" >
        人気順
      </a> 
    </li>
  </ul>

<!-- PC -->

<!-- Mobile -->

<!-- Mobile -->





