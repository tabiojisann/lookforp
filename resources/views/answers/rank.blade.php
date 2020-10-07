@extends('app')

@section('title', 'ランキング')

@section('content')
  @include('nav')

  <div class="container green lighten-2" style="max-width: 100%; height: 100vh;">
    <div class="row">
      <div class="col my-5">

        <table class="table">
          <tbody>

            <tr>
              <th scope="row"><h1>1 <i class="fas fa-crown yellow-text"></i></h1></th>
              <td>
                <a href="{{ route('users.show', ['user' => $answers[0]->user]) }}">
                  <img src="{{ $answers[0]->user->image ?: asset('logo/user.jpg') }}"  class="d-inline rounded-circle" height="60" width="60"  alt="">
                </a>
              </td>
              <td><h1>{{ $answers[0]->user->name }}</h1></td>
              <td><h1><i class="fas fa-star yellow-text"></i> {{ $answers[0]->count_likes }}</h1></td>
            </tr>

            <tr>
              <th scope="row"><h1>2 <i class="fas fa-crown blue-grey-text"></i></h1></th>
              <td>
                <a href="{{ route('users.show', ['user' => $answers[1]->user]) }}">
                  <img src="{{ $answers[1]->user->image ?: asset('logo/user.jpg') }}"  class="d-inline rounded-circle" height="60" width="60"  alt="">
                </a>
              </td>
              <td><h1 class="ml-1">{{ $answers[1]->user->name }}</h1></td>
              <td><h1><i class="fas fa-star yellow-text"></i> {{ $answers[1]->count_likes }}</h1></td>
            </tr>

            <tr>
              <th scope="row"><h1>3 <i class="fas fa-crown red-text"></i></h1></th>
              <td>
                <a href="{{ route('users.show', ['user' => $answers[2]->user]) }}">
                  <img src="{{ $answers[2]->user->image ?: asset('logo/user.jpg') }}"  class="d-inline rounded-circle" height="60" width="60"  alt="">
                </a>
              </td>
              <td><h1 class="ml-2">{{ $answers[2]->user->name }}</h1></td>
              <td><h1><i class="fas fa-star yellow-text"></i> {{ $answers[2]->count_likes }}</h1></td>
            </tr>

            <tr>
              <th scope="row"><h5>4</h5></th>
              <td>
                <a href="{{ route('users.show', ['user' => $answers[3]->user]) }}">
                  <img src="{{ $answers[3]->user->image ?: asset('logo/user.jpg') }}"  class="d-inline rounded-circle ml-2" height="30" width="30"  alt="">
                </a>
              </td>
              <td><h5 class="ml-2">{{ $answers[3]->user->name }}</h5></td>
              <td><h5><i class="fas fa-star yellow-text"></i> {{ $answers[3]->count_likes }}</h5></td>
            </tr>

            <tr>
              <th scope="row"><h5>5</h5></th>
              <td>
                <a href="{{ route('users.show', ['user' => $answers[4]->user]) }}">
                  <img src="{{ $answers[4]->user->image ?: asset('logo/user.jpg') }}"  class="d-inline rounded-circle ml-2" height="30" width="30"  alt="">
            </a>
              </td>
              <td><h5 class="ml-2">{{ $answers[4]->user->name }}</h5></td>
              <td><h5><i class="fas fa-star yellow-text"></i> {{ $answers[4]->count_likes }}</h5></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  @include('footer.sub')
@endsection