@extends('layouts.app')

@section('content')
<div class="container pt-5" >
  <div class="row p-3" style="background:#cccccc; border:2px solid #fcb100;">
    <div class="col"><img class='w-100 p-2' src="../storage/{{$post->image}}"/>
        <a class='pl-3' href='#'><strong>10</strong> Likes</a>
    </div>



    <div class="col">
      <h1 class='pt-2'>{{ $post->caption }}</h1>
        <a href="/profile/1">Back to Profile</a>
        <div>
          <h3>Comments</h3>
          <div class="row">
            <p>hold comments in this section</p>

          </div>
        </div>


    <div class="pt-2">


    </div>

    </div>
  </div>
</div>
@endsection
