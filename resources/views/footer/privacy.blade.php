@extends('app')

@section('title', 'ヘルプ')

@section('content')
  @include('nav')



  <div class="cantainer blue-gradient" style="max-width: 100%; height: 100vh;">
    <div class="row">
      <div class="help col-8 offset-2 bg-white border border-white p-5 mt-5" style="height: 80vh;">
        <p>プライバシー</p>
      </div>
    </div>
  </div>

  <style>
     .help {
       overflow: scroll;
     }
  </style>


  
@endsection