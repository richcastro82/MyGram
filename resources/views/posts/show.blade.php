@extends('layouts.app')

@section('content')
<div class="container" style='background:#d5d5d5;border:2px solid #973333;'>
  <div class="row">
    <div class="col"><img class='w-100 p-2' src="/storage/{{$post->image}}"/></div>


    <div class="col"><h1 class='pt-2'>{{ $post->caption }}</h1>
    <div class="pt-2">
      <a href="/profile/{{$post->user->id}}">
        <h4>{{ $post->user->username}}</h4>
      </a>
    </div>

    </div>
  </div>
</div>
@endsection
