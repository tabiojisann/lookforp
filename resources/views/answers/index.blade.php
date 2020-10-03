@extends('app')

@section('title', '大喜利回答欄')

@section('content')
  @include('nav')


  <div class="container my-5 orange lighten-5" style="max-width: 100%;">
    <div class="row">

      <div class="card text-center col-10 offset-1 col-md-6 offset-md-3 orange mt-5">
        <h3 class="font-weight-bold">{!! nl2br(e($theme->title)) !!}</h3>
        @if(isset($theme->image))
          <div class="text-center">
            <img src="{{ $theme->image ?? '' }}" alt="" class="imgAuto my-4">
          </div>
        @endif
      </div>

      <div class="border text-center col-10 offset-1 col-md-8 offset-md-2 my-5">
        <form action="{{ route('answers.store') }}" method="post">
          @csrf
          <div class="form-group">
            <p>回答欄(100文字以内)</p>
            @error('text')
              <small class="text-danger">{{ $message }}</small>
            @enderror
            @include('flash')
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
        <div class="container border bg-white col-10 offset-1 col-md-8 offset-md-2 mb-5">

          <div class="border-bottom d-flex justify-content-between">
            <div class="py-2">
              <img src="{{ $answer->user->image ?: asset('logo/user.jpg') }}"  height="20" width="20" class="rounded-circle"  alt="">
              @if(Auth::id() === $answer->user_id)
                <a href="{{ route('users.edit', ['user' => $answer->user_id]) }}">
                  <b class="text-danger">{{ $answer->user->name }}</b>
                </a>
              @else
                <a href="{{ route('users.show', ['user' => $answer->user_id]) }}">
                  <b class="text-muted">{{ $answer->user->name }}</b>
                </a>
              @endif

            </div>

            <div class="text-right">
              @if(Auth::id() === $answer->user_id)
                <div class="dropdown">

                  <!--Trigger-->
                  <i class="fas fa-ellipsis-h pt-2" type="button" data-toggle="dropdown"></i>
          
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-primary">
                    <button class="dropdown-item text-danger" form="deleteAnswer" type="submit">
                      削除
                    </button>
                  </div>
                </div>

                <form action="{{ route('answers.destroy',['answer' => $answer]) }}" method="post" id="deleteAnswer">
                  @csrf
                  @method('DELETE')
                </form>
              @endif
            </div>
            
          </div>

          <div class="container">
            <p class="pt-2">{{ $answer->text }}</p>
            <small class="text-muted">{{ $answer->created_at }}</small>
          </div>

          <div class="dropdown-divider"></div>

          
          
          <answer-like
            :initial-is-liked-by='@json($answer->islikedBy(Auth::user()))'
            :initial-count-likes='@json($answer->count_likes)'
            :authorized='@json(Auth::check())'
            :auth-user="@json(Auth::user()->id)"
            :answer-user-id="@json($answer->user_id)"
            endpoint="{{ route('answers.like', ['answer' => $answer]) }}"
          >
          </answer-like>

          <div class="dropdown-divider danger"></div>

        </div>
      @endforeach
      <div class="container">
        <p>{{ $answers->links() }}</p>
      </div>
   
    </div>
  </div>

  @include('footer.sub')
@endsection