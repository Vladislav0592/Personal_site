@extends('layouts.app')

@section('title_block')
    Reviews
@endsection

@section('preview')
    <div class="review">
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
        <div class="review-page" > </div>
        <div class="content">
            <div class="">
                <div class="container">
                    <form action="{{route('review-form')}}" method="post">
                        @csrf
                        <div class="mb-4">
                            <div class="col-75">
                                @include('inc.messages')
                                <label for="exampleFormControlTextarea1" id="review" class="label-reviews"
                                       style="margin-right: 15%">You can leave your
                                    review</label>
                                <textarea name="review-form" class="form-control" id="exampleFormControlTextarea1"
                                          placeholder="Enter text" style="width: 100%;"></textarea>
                                <button type="submit" class="btn btn-light" style="margin-top: 5px">send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <img src='/img/logo.svg' alt="" width="200px" height="300px" style="margin-top: -15%">
    </div>
@endsection
@section('content')
    <div class="content">
        <div style="width:100%; height:1px; clear:both;"></div>
        <div>
            @foreach($reviews as $review)
                <div class="div-review">
                    <div class="container">
                        <h2 class="event-h2">{{$review->date}}</h2>
                        <sapn>{{$review->text}}</sapn>
                    </div>
                    @if(session('auth'))
                        <div class="div-video">
                            <a href="{{route('review-one-form', $review->id)}}">
                                <button type="submit" class="power-button btn btn-info">Update</button>
                            </a>
                            <a href="{{route('delete-review', $review->id)}}">
                                <button class="power-button btn btn-danger" name="delete">Delete</button>
                            </a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>


        @if(session('auth'))
            <div class="div-form border border-0">
                <form action="{{route('add-review')}}" method="post">
                    @csrf
                    <div class="mb4">
                        <input class="form-control px-5 " type="text" name="date" placeholder="date"/>
                        <br>
                        <textarea class="form-control px-5 " name="text"
                                  placeholder="text"></textarea>
                        <br>
                        <button type="submit" class="btn btn-success">Жмяк</button>
                    </div>
                </form>
            </div>
        @endif
        <div style="width:100%; height:1px; clear:both;"></div>
    </div>
@endsection
