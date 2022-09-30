@extends('layouts.master')

@section('head')
@if ($post->id)
  <title>edit post {{$post->title}}</title>
@else
  <title>create post</title>
@endif
@endsection

@section('content')
<div class="form-content">
    <div class="form-items">
        <h3>Content management with Laravel 8</h3>
        <div class="page-links">
          @if ($post->id)
            <h5>edit post</h5>
          @else
            <h5>Insert post</h5>
          @endif

        </div>
        <form action="{{$post->id ? route('posts.update',$post->id) : route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($post->id)
                @method('PUT')
            @endif
            <label>title : </label>
            <input class="form-control" type="text" name="title" value="{{$post->title ?? old('title')}}" required>
            <label>description : </label>
            <textarea class="form-control" rows="5" name="description" required>{{$post->description ?? old('description')}}
            </textarea>
            @if ($post->image)
              <label>replace picture : </label>
              <img src="{{asset($post->image)}}" alt="{{$post->title}}" class="img-fluid">
            @else
              <label>upload picture : </label>
            @endif

            <input class="form-control" type="file" name="image">
            <div class="form-button">
                <button id="submit" type="submit" class="ibtn">Submit Text</button>
            </div>
        </form>
        <div class="other-links">
            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
        </div>
    </div>
</div>

@endsection
