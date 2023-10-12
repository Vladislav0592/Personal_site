@extends('layouts.app')

@section('title_block')
    Concerts
@endsection

@section('preview')
    <div style="">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0  letter">
                <li><a href="/" class=" nav-link px-5  text-dark letter">Home</a></li>
                <li><a href="/photo" class="nav-link px-5 link-secondary  text-dark letter ">Photo</a></li>
                <li><a href="/video" class="nav-link px-5 link-secondary text-dark letter ">Video</a></li>
                <li><a href="/concerts" class="nav-link px-5 link-secondary text-dark letter ">Concerts</a></li>
                <li><a href="{{route('biography')}}" class="nav-link px-5 link-dark letter">Biography</a></li>
                <li><a href="{{route('reviews')}}" class="nav-link px-5 link-secondary text-dark letter">Reviews</a>
                </li>
                <li><a href="{{route('contacts')}}" class="nav-link px-5 text-dark letter">Contacts</a></li>
                @if(session('auth'))
                    <li><a href="{{route('all_messages')}}" class="nav-link px-5 text-dark letter">Messages</a></li>
                @endif
            </ul>
        </header>
        <div>
            <img class="video" src='/img/bg/concerts_bg.png' alt="img_video">
        </div>
    </div>
@endsection

@section('content')
    <div class="content">
        <div style="width:100%; height:1px; clear:both;"></div>
        <div>
            @foreach($concerts as $concert)
                <div class="div-concert">
                    <div class="container">
                        <h2 class="event-h2">{{$concert->date}}</h2>
                        <h5>{{$concert->time}}</h5>
                        <span >--------------------------------------</span>
                        <h2 class="event-h2">{{$concert->address}}</h2>
                        <sapn>{{$concert->description}}</sapn>
                    </div>
                    @if(session('auth'))
                        <div class="div-video">
                            <a href="{{route('event-one-form', $concert->id)}}">
                                <button type="submit" class="power-button btn btn-info">Update</button>
                            </a>
                            <a href="{{route('delete-event', $concert->id)}}">
                                <button class="power-button btn btn-danger" name="delete">Delete</button>
                            </a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        @if(session('auth'))
            <div class="div-form border border-0">
                <form action="{{route('create-event')}}" method="post">
                    @csrf
                    <div class="mb4">
                        <input class="form-control px-5 " type="text" name="date" placeholder="date"/>
                        <br>
                        <input class="form-control px-5 " type="text" name="time" placeholder="time"/>
                        <br>
                        <input class="form-control px-5 " type="text" name="address" placeholder="address"/>
                        <br>
                        <textarea class="form-control px-5 " name="description"
                                  placeholder="description"></textarea>
                        <br>
                        <button type="submit" class="btn btn-success">Жмяк</button>
                    </div>
                </form>
            </div>
        @endif
        <div style="width:100%; height:1px; clear:both;"></div>
    </div>
@endsection
