@extends('app')

@section('title', 'お題投稿')

@section('content')

@include('admin.nav')
  <div class="container  mt-5">
    <div class="row">
      <div class="col">
        <form action="{{ route('admin.themes.store') }}" method="post"  enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="">お題</label>
            <!-- <input type="text" name="title" col="2" class="form-control" value="{{ $theme->title ?? old('title') }}" required> -->
            <textarea name="title" cols="30" rows="2" class="form-control" require>{{ $theme->title ?? old('title') }}</textarea>
          </div>

          <div class="form-group my-5">
            <label for="">画像</label>
            <input type="file" name="image" value="{{ $theme->image ?? '' }}">
          </div>

          <input type="submit" value="送信">
        
        </form>
      </div>
    </div>
  </div>
@endsection
