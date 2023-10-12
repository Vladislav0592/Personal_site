@extends('layouts.app')

@section('title_block')
    Video update
@endsection

@section('preview')
    <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0  letter">
            <li><a href="/" class=" nav-link px-5  text-dark letter">Home</a></li>
            <li><a href="/photo" class="nav-link px-5 link-secondary  text-dark letter ">Photo</a></li>
            <li><a href="/video" class="nav-link px-5 link-secondary text-dark letter ">Video</a></li>
            <li><a href="/concerts" class="nav-link px-5 link-secondary text-dark letter ">Concerts</a></li>
            <li><a href="{{route('biography')}}" class="nav-link px-5 link-dark letter">Biography</a></li>
            <li><a href="{{route('reviews')}}" class="nav-link px-5 link-secondary text-dark letter">Reviews</a></li>
            <li><a href="{{route('contacts')}}" class="nav-link px-5 text-dark letter">Contacts</a></li>
            @if(session('auth'))
                <li><a href="{{route('all_messages')}}" class="nav-link px-5 link-light letter">Messages</a></li>
            @endif
        </ul>
    </header>
    <div>
        <img class="video" src='/img/bg/video_bg.png' alt="img_video">
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="video_block">
            <div class="thumb-wrap ">
                <iframe width="560" height="315" src="{{$video->link}}" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                <div class="text-video-about">{{$video->description}} </div>
            </div>
            <div class="div-form">
                <form action="{{route('update-video-form', $video->id)}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <textarea class="form-control" name="link" placeholder="enter link">{{$video->link}}</textarea>
                        <br>
                        <textarea name="description" class="form-control"
                                  placeholder="Enter text">{{$video->description}}</textarea>
                        <br>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
