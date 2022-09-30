@extends('layouts.master')

@section('head')

  <title> {{$post->title}}</title>

@endsection

@section('content')

<h3 class="text-center mx-auto">{{$post->title}}</h3>
<hr>
<div class="row">
  <div class="col-md-5">
    <img src="{{asset($post->image)}}" alt="{{$post->title}}" class="img-fluid">
  </div>
  <div class="col-md-7">
    <p>{{$post->description}}</p>
  </div>
</div>


@endsection
