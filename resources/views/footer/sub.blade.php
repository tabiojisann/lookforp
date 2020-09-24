<footer>
  <div class="border-top text-center">

    <div class="container my-4">
      <a href="{{ route('footer.privacy') }}">
        <small class="text-muted">プライバシー</small>
      </a>
      <a href="{{ route('footer.terms') }}">
        <small class="text-muted px-4">利用規約</small>
      </a>
      <a href="{{ route('contact.index') }}">
        <small class="text-muted">お問い合わせ</small>
      </a>
    </div>
   
  
    <div class="my-3">
      <a class="" href="/">  
        <img src="{{ asset('logo/lookforp.png') }}" width="200" border="0" class=" horizontal">
      </a>
    </div>
    <div class="footer-copyright bg-light text-center text-white py-3">Copyright:
      <a href="http://www.lookforp.com/" class="text-white"> © 2020 lookforp inc.</a>
    </div>
  </div>
</footer>