@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div style="text-align:right; margin-bottom: 10px">
        @if (!Auth::guest())
            <a href="/posts/create" class="btn btn-primary">Create Post</a>
        @endif
    </div>

    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    {{--<div class="col-md-4 col-sm-4">
                        <img style="width:300px; height:180px;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->name}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div> --}}
                    <div class="col-md-4 col-sm-4">
                        {{--<img style="width:300px; height:180px;" src="/storage/cover_images/{{$post->cover_image}}">--}}
                        <div id="video-player">
                            <video width="100%" controls>
                                <source src="/storage/cover_images/Alan_Walker_Flares.mp4" type="video/mp4">
                           </video>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->name}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
            </div>   
        @endforeach        
    @else
            <p>No Posts found</p>
    @endif
@endsection