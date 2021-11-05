@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 pt-2">
      <img style="width:100%;"class="rounded-circle" src="../images/MyGramLogo.jpg"/>
    </div>
    <div class="col-9 pl-5">
      <div class=""><h2>{{ $user->name }}</h2></div>

      <div class="pt-1">{{ $user->profile->title }}</div>
      <div class="">{{ $user->profile->description }}</div>
      <div class="pt-4"><strong>3</strong> posts</div>
      <a href='#'>Add Post</a>
        <!-- <div class="pl-3"><strong>0</strong> following</div>
        <div class="pl-3"><strong>0</strong> followers</div> -->


    </div>
  </div>
  <div class="row pt-5">
    <div class="col-4"><img src="" class="w-100"/></div>
    <div class="col-4"><img src="" class="w-100"/></div>
    <div class="col-4"><img src="" class="w-100"/></div>
  </div>
</div>
@endsection
