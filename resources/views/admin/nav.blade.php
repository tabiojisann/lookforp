<div class="container">
    <div class="d-flex justify-content-between">
        <a class="pt-3" href="/admin/home">  
            <img src="{{ asset('logo/lookforp.png') }}" width="180" border="0" class="horizontal">
        </a>  
        <button type="submit" form="logout-button" class="btn btn-sm btn-outline-danger waves-effect">ログアウト</button>
    </div>
    <form action="{{ route('admin.logout') }}" method="POST" id="logout-button">
        @csrf
    </form>
</div>