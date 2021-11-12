@extends('layouts.app')

@section('content')
<div class="container">
<div class="row col-6">
  <img src="/storage/{{ $post->image }}" class='w-100'/>
  <h3>{{ $post->caption}}</h3>

</div>
</div>
@endsection
