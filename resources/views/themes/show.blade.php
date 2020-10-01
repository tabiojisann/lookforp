@extends('app')

@section('title', '大喜利回答欄')

@section('content')
  @include('nav')

  <div class="container my-5 lighten-5">
    <div class="row">

      <div class="card text-center col-10 offset-1 col-md-6 offset-md-3 yellow">
        <h2 class="font-weight-bold">{{ $theme->title }}</h2>
        <img src="{{ $theme->image ?? asset('logo/NoImage.jpg') }}" alt="" width=200 height=200 class="my-4">
      </div>

      <br>

      <div class="border text-center col-10 offset-1 col-md-8 offset-md-2 my-5">
        <form action="{{ route('answers.store') }}" method="post">
          @csrf
          <div class="form-group">
            <p>回答欄(100文字以内)</p>
            <textarea name="text" class="form-control" cols="30" rows="2" required></textarea>
          </div>
          <button type="submit" class="btn btn-sm btn-indigo">回答する</button>
        </form>
      </div>

      <br>

      <div class="container text-center col-10 offset-1 col-md-8 offset-md-2">
        <h5><span class="col red-text">{{ $answers->total() }}</span>件の回答</h5>
      </div>
      @foreach($answers as $answer)
        <div class="container border col-10 offset-1 col-md-8 offset-md-2 mb-5">

          <div class="border-bottom">
            <img src="{{ $answer->user->image ?: asset('logo/user.jpg') }}"  height="20" width="20" class="rounded-circle"  alt="">
            <b>{{ $answer->user->name }}</b>
          </div>

          <div class="text-right">
            @if(Auth::id() === $answer->user_id)
              <form action="{{ route('answers.destroy',['answer' => $answer]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-sm btn-danger" value="削除">
              </form>
            @endif
          </div>

          <div class="container">
            <p>{{ $answer->text }}</p>
          </div>

        </div>
      @endforeach
      <div class="container">
        <p>{{ $answers->links() }}</p>
      </div>
   
    </div>
  </div>

  @include('footer.sub')
@endsection