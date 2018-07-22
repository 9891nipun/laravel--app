@extends('layouts.app')

@section('content')
<br><br><a href="http://localhost/max/public/posts" class="btn btn-default">go back</a>
<h1><br><br>{{$post->title}}</h1>
<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
<br><br><br>

<div>
    <h2>{{$post->body}}</h2>
</div>
<br><br><br>
<hr>
<small><br><b>written on {{$post ->created_at}}</b></small>
<hr>
@if(!Auth::guest())
<a href="http://localhost/max/public/posts/{{$post->id}}/edit" class="btn btn-default">edit</a>
<br><br><br><br>
   {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right'])!!}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
   {!!Form::close()!!}
   @endif
 @endsection