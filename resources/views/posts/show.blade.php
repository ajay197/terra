@extends('layouts.app')

@section('content')
    <hr>
    <a href="/posts" class="btn btn-warning">Go Back</a>
    <hr>
    <h1>{{$post->name}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <div class="well">
        {{$post->body}}
    </div> 
    
    <small>Written on {{$post->created_at}}</small>
    <hr>

    @if (!Auth::guest())
        <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
        <hr>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif

@endsection