@extends('layouts.app')

@section('title_block')
    Photo
@endsection

@section('preview')
    <div class={{\Request::route()->getName()}}>
        @include('inc.header')
        <div style="margin-left: 70%; margin-top: -35%">
            @include('inc.logo')
        </div>

        <div class="div-logo" id="logo-m"  style="margin-top: 72%; margin-left: 5%;">
            <img src='/img/logo.svg' alt="">
        </div>
    </div>
@endsection

@section('content')
    <div style="width:100%; height:1px; clear:both;"></div>
    <div class="col-12">
        <div class="div-photo">
            <a href="/img/photo/4.webp" data-fancybox="gallery" data-caption="Caption #1">
            <img class="photo-galereya-hor photos" src="/img/photo/4.webp" alt="we">
            </a>
            <a href="/img/photo/1.webp" data-fancybox="gallery" data-caption="Caption #2">
                <img class="photo-galereya-vert photos" src="/img/photo/1.webp" alt="we">
            </a>
            <a href="/img/photo/2.webp" data-fancybox="gallery" data-caption="Caption #3">
                <img class="photo-galereya-vert-2 photos" src="/img/photo/2.webp" alt="we">
            </a>
            <a href="/img/photo/5.webp" data-fancybox="gallery" data-caption="Caption #4">
                <img class="photo-galereya-hor-2 photos" src="/img/photo/5.webp" alt="we">
            </a>
            <a href="/img/photo/6.webp" data-fancybox="gallery" data-caption="Caption #5">
                <img class="photo-galereya-hor-3 photos" src="/img/photo/6.webp" alt="we">
            </a>
            <a href="/img/photo/3.webp" data-fancybox="gallery" data-caption="Caption #6">
                <img class="photo-galereya-vert-3 photos" src="/img/photo/3.webp" alt="we">
            </a>
            <a href="/img/photo/7.webp" data-fancybox="gallery" data-caption="Caption #7">
                <img class="photo-galereya-hor-4 photos" src="/img/photo/7.webp" alt="we">
            </a>
        </div>
    </div>
    <div style="width:100%; height:1px; clear:both;"></div>
@endsection
