@extends('layouts.app')

@section('title_block')
    Video
@endsection

@section('preview')
 @include('inc.header2')
    <div  >
        <img class="video" src='/img/bg/video_bg.webp' alt="img_video">
    </div>

@endsection

@section('content')

        <div class="video_block">
            @foreach($videos as $video)
                <div class="thumb-wrap ">
                    <iframe width="560" height="315" src="{{$video->link}}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    <div class="text-video-about">{{$video->description}} </div>
                </div>
                @if(session('auth'))
                    <div class="div-video-btn">
                        <a href="{{route('video-one-form', $video->id)}}">
                            <button type="submit" class="power-button btn btn-info">Update</button>
                        </a>
                        <a href="{{route('delete-video-form', $video->id)}}">
                            <button class="power-button btn btn-danger" name="delete">Delete</button>
                        </a>
                    </div>
                @endif
            @endforeach
            @if(session('auth'))
                <div class="div-form">
                    <form action="{{route('video-form')}}" method="post">
                        @include('inc.messages')
                        @csrf
                        <div class="mb-4">
                            <textarea class="form-control" name="link" placeholder="enter link"></textarea>
                            <textarea name="description" class="form-control" placeholder="Enter text"></textarea>
                            <br>
                            <button type="submit" class="btn btn-success ">жмяк</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>

@endsection
