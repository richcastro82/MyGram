@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 pt-2">
      <img style="width:100%;"class="rounded-circle" src="../images/MyGramLogo.jpg"/>
    </div>
    <div class="col-9 pl-5">
      <div class=""><h2>Richard Castro</h2></div>
      <!-- <a href='/profile/{{ $user->id }}/edit'>Edit Profile</a> -->

      <div class="pt-1"><h5>IT Specialist ~  Programmer</h5></div>
      <div class="pt-4">This is my personal version of Instagram. I do not have a social media account but that doesn't mean I can't have all the same features. Built on Laravel 8 + SQLite and side loaded on LAMP server hosting all my other websites.</div>
      <div class="pt-5"><strong>{{ $user -> posts -> count() }}</strong> posts</div>
      

        <!-- <div class="pl-3"><strong>0</strong> following</div>
        <div class="pl-3"><strong>0</strong> followers</div> -->


    </div>
  </div>
  <div class="row pt-5">
    @foreach($user->posts as $post)
    <div class="col-4">
      <a href="../gram/{{$post->id}}">
        <img src="../storage/{{ $post -> image }}" class="w-100"/>
        <p>{{ $post-> caption }}</p>
      </a>
    </div>
    @endforeach

  </div>
</div>
@endsection
