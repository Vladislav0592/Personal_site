@extends('layouts.app')

@section('title_block')
    Update review
@endsection

@section('preview')
    <div class="review">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 letter">
                <li><a href="{{route('home')}}" class="nav-link px-5 link-light letter">Home</a></li>
                <li><a href="{{route('photo')}}" class="nav-link px-5 link-light letter">Photo</a></li>
                <li><a href="{{route('video')}}" class="nav-link px-5 link-light letter">Video</a></li>
                <li><a href="{{route('reviews')}}" class="nav-link px-5 link-light letter">Reviews</a></li>
                <li><a href="{{route('concerts')}}" class="nav-link px-5 link-light letter">Concerts</a></li>
                <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Biography</a></li>
                <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>
                @if(session('auth'))
                    <li><a href="{{route('all_messages')}}" class="nav-link px-5 text-dark light ">Messages</a></li>
                @endif
            </ul>
        </header>
        <div class="form-reviews">
            <div class="text_preview">
                @include('inc.messages')
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">
        <div style="width:100%; height:1px; clear:both;"></div>
        <div class="div-form border border-0">
            <form action="{{route('update-review', $reviews->id)}}" method="post">
                @csrf
                <div class="mb4">
                    <input class="form-control px-5 " type="text" name="date" placeholder="date"
                           value="{{$reviews->date}}"/>
                    <br>
                    <textarea class="form-control px-5 " name="text"
                              placeholder="text">{{$reviews->text}}</textarea>
                    <br>
                    <button type="submit" class="btn btn-success">Жмяк</button>
                </div>
            </form>
            <div style="width:100%; height:1px; clear:both;"></div>
        </div>
@endsection
