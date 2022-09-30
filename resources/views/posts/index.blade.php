@extends('layouts.master')

@section('head')
<title>view all post</title>
@endsection

@section('content')
<table class="table table-warning table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col" colspan="3">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $key => $post)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$post->title}}</td>
      <td>{{short($post->description)}}</td>
      <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-sm">Show</a></td>
      <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-success btn-sm">Edit</a></td>
      <td>
        <form action="{{route('posts.destroy',$post->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
