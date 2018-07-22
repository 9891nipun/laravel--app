@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="http://localhost/max/public/posts/create" class="btn btn-primary">create posts</a>
                    <h3>your blog posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                              <th>Title</th>
                              <th></th>
                              <th></th>
                        </tr>
                        @foreach($posts as $post)
                          <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="http://localhost/max/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}



                                </td>
                          </tr
                        @endforeach
                    </table>
                    @else
                        <p><br><b>YOU   HAVE  NO  POSTS  IN YOUR ACCOUNT </b></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
