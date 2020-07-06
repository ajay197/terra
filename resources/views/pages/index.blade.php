@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Terra Home</h1>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-primary" href="{{ url('/home') }}">Goto Create Post</a>
                    @else
                        <a class="btn btn-info" href="{{ route('login') }}">Login</a>
    
                        @if (Route::has('register'))
                            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    
    <img style="width:250px; height:250px; margin-left: auto; margin-right: auto; display: block;" src="/storage/cover_images/terra_logo_1.png">
    

@endsection 