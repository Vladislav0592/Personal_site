@extends('layouts.app')

@section('title_block')
    Contacts
@endsection

@section('preview')
    <div class="contacts">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 letter">
                <li><a href="{{route('home')}}" class="nav-link px-5 text-light letter">Home</a></li>
                <li><a href="{{route('photo')}}" class="nav-link px-5 text-light letter">Photo</a></li>
                <li><a href="{{route('video')}}" class="nav-link px-5 text-light letter">Video</a></li>
                <li><a href="{{route('concerts')}}" class="nav-link px-5 text-light letter">Concerts</a></li>
                <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Biography</a></li>
                <li><a href="{{route('reviews')}}" class="nav-link px-5 text-light letter">Reviews</a></li>
                <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>
                @if(session('auth'))
                    <li><a href="{{route('all_messages')}}" class="nav-link px-5 text-light light ">Messages</a></li>
                @endif
            </ul>
        </header>
        <div class="text_preview">
            <div class="form-contacts">
                @include('inc.messages')
                <form action="" method="get">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" name="name" type="text" placeholder="Leave your name"
                               id="floatingTextareaDisabled">
                        <label for="floatingTextareaDisabled">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInputDisabled"
                               placeholder="name@example.com">
                        <label for="floatingInputDisabled">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here"
                              id="floatingTextarea2Disabled"
                              style="height: 100px"></textarea>
                        <label for="floatingTextarea2Disabled">Comments</label>
                    </div>
                    <button type="submit" class="btn btn-light">send</button>
                </form>
            </div>
        </div>
        <div class="div-logo">
            <img src='/img/logo.svg' alt="" width="200px" height="200px">
        </div>
    </div>


@endsection

@section('content')

@endsection
