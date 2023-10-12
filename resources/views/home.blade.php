@extends('layouts.app')

@section('title_block')
    Home
@endsection

@section('preview')
    <div class="home">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center letter">
                <li><a href="{{route('home')}}" class="nav-link px-5 link-light letter">Home</a></li>
                <li><a href="{{route('photo')}}" class="nav-link px-5 link-light letter">Photo</a></li>
                <li><a href="{{route('video')}}" class="nav-link px-5 link-light letter">Video</a></li>
                <li><a href="{{route('concerts')}}" class="nav-link px-5 link-light letter">Concerts</a></li>
                <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Biography</a></li>
                <li><a href="{{route('reviews')}}" class="nav-link px-5 link-light letter">Reviews</a></li>
                <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>
                @if(session('auth'))
                    <li><a href="{{route('all_messages')}}" class="nav-link px-5 link-light letter">Messages</a></li>
                @endif
            </ul>
        </header>
        <div class="text_preview_home">
            <h1 style="font-size: 6vw">Evgene Baev</h1>
            <td>
                <h2 style="font-size: 2.5vw">Classical guitarist</h2>
                <h2 style="font-size: 2.5vw">Classical vocalist</h2>
        </div>
        <div class="div-logo" style="margin-top: 5%">
            <img src='/img/logo.svg' alt="" width="200px" height="200px">
        </div>
        @endsection
        @if(session('auth'))
            @section('content')
                <div class="form-biography" style="background-color: antiquewhite ">
                    <div class="text_preview">
                        @include('inc.messages')
                        <form action="{{route('add-links')}}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="youtube" type="text" placeholder="Leave your name"
                                       id="floatingTextareaDisabled" value="">
                                <label for="floatingTextareaDisabled">youtube</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInputDisabled"
                                       placeholder="name@example.com" value="">
                                <label for="floatingInputDisabled">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="instagram" class="form-control" id="floatingInputDisabled"
                                       placeholder="instagram" value="">
                                <label for="floatingInputDisabled">instagram</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="vk" class="form-control" id="floatingInputDisabled"
                                       placeholder="vk" value="">
                                <label for="floatingInputDisabled">vk</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="facebook" class="form-control" id="floatingInputDisabled"
                                       placeholder="facebook" value="">
                                <label for="floatingInputDisabled">facebook</label>
                            </div>
                            <button type="submit" class="btn btn-light">жмяк</button>
                        </form>
                    </div>
                </div>
@endsection
@endif
