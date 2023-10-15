@extends('layouts.app')

@section('title_block')
    Photo
@endsection

@section('preview')
        <div class={{\Request::route()->getName()}}>
            @include('inc.header')
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
