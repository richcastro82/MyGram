@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 pt-2">
      <img style="width:100%;"class="rounded-circle" src="images/MyGramLogo.jpg"/>
    </div>
    <div class="col-9 pl-5">
      <div class=""><h2>{{ $user->username }}</h2></div>
      <div class="d-flex">
        <div class=""><strong>120</strong> posts</div>
        <div class="pl-3"><strong>12</strong> following</div>
        <div class="pl-3"><strong>500</strong> followers</div>
      </div>
      <div class="pt-5">kingcastro.com</div>
      <div class="">This is my bio section for My Gram</div>
    </div>
  </div>
  <div class="row pt-5">
    <div class="col-4"><img src="images/mygramlogo.jpg" class="w-100"/></div>
    <div class="col-4"><img src="images/mygramlogo.jpg" class="w-100"/></div>
    <div class="col-4"><img src="images/mygramlogo.jpg" class="w-100"/></div>
  </div>
</div>
@endsection
