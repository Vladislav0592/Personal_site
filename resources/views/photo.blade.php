@extends('layouts.app')

@section('title_block')
    Photo
@endsection

@section('preview')
    <div class="photo">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 letter">
                <li><a href="{{route('home')}}" class="nav-link px-5 link-light letter">Home</a></li>
                <li><a href="{{route('photo')}}" class="nav-link px-5 link-light letter">Photo</a></li>
                <li><a href="{{route('video')}}" class="nav-link px-5 link-light letter">Video</a></li>
                <li><a href="{{route('concerts')}}" class="nav-link px-5 link-light letter">Concerts</a></li>
                <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Biography</a></li>
                <li><a href="{{route('reviews')}}" class="nav-link px-5 link-light letter">Reviews</a></li>
                <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>
                @if(session('auth'))
                    <li><a href="{{route('all_messages')}}" class="nav-link px-5 text-light letter">Messages</a></li>
                @endif
            </ul>
        </header>
        <div class="div-logo" style="margin-top: 40%">
            <img src='/img/logo.svg' alt="" width="200px" height="200px">
        </div>
    </div>
@endsection

@section('content')
    <div style="width:100%; height:1px; clear:both;"></div>
    <div class="col-12">
        <div class="div-photo">
            <img class="photo-galereya-hor" src="/img/photo/4.png" alt="we">
            <img class="photo-galereya-vert" src="/img/photo/1.png" alt="we">
            <img class="photo-galereya-vert-2" src="/img/photo/2.png" alt="we">
            <img class="photo-galereya-hor-2" src="/img/photo/5.png" alt="we">
            <img class="photo-galereya-hor-3" src="/img/photo/6.png" alt="we">
            <img class="photo-galereya-vert-3" src="/img/photo/3.png" alt="we">
            <img class="photo-galereya-hor-4" src="/img/photo/7.png" alt="we">
        </div>
    </div>
    <div style="width:100%; height:1px; clear:both;"></div>
@endsection
