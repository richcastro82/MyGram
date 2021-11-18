@extends('layouts.app')

@section('content')
<div class="container pt-5" >
  <div class="row">
    <div class="col"><img class='w-100 p-2' src="../storage/{{$post->image}}"/><a href="/">Back to Profile</a></div>


    <div class="col"><h1 class='pt-2'>{{ $post->caption }}</h1>
    <div class="pt-2">
      <a href="/profile/{{$post->user->id}}">
        <h4>{{ $post->user->name}}</h4>
        <h5>{{ $post->description}}</h5>

      </a>
    </div>

    </div>
  </div>
</div>
@endsection
