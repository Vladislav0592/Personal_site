@extends('layouts.app')

@section('title_block')
    Video update
@endsection

@section('preview')
    @include('inc.header2')
    <div>
        <img class="video" src='/img/bg/video_bg.webp' alt="img_video">
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
                    @include('inc.messages')
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
