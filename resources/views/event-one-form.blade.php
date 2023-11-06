@extends('layouts.app')

@section('title_block')
    update concert form
@endsection

@section('preview')
    <div class="concerts">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"
                style="font-size: 18px; margin-left: 25%">
                <li><a href="{{route('home')}}" class="nav-link px-5 link-light letter">Home</a></li>
                <li><a href="{{route('photo')}}" class="nav-link px-5 link-light letter">Photo</a></li>
                <li><a href="{{route('video')}}" class="nav-link px-5 link-light letter">Video</a></li>
                <li><a href="{{route('concerts')}}" class="nav-link px-5 link-light letter">Concerts</a></li>
                <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Biography</a></li>
                <li><a href="{{route('reviews')}}" class="nav-link px-5 link-light letter">Reviews</a></li>
                <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>
                <li><a href="{{route('all_messages')}}" class="nav-link px-5 link-light letter">Messages</a></li>
            </ul>
        </header>
        <div class="text_preview">
        </div>
        @endsection
        @section('content')
            <div class="div-form border border-0">
                <form action="{{route('update-event', $concert->id)}}" method="post">
                    @csrf
                    <div class="mb4">
                        <input class="form-control px-5 " type="date" name="date" placeholder="date" value="{{$concert->date}}"/>
                        <br>
                        <input class="form-control px-5 " type="time" name="time" placeholder="time" value="{{$concert->time}}"/>
                        <br>
                        <input class="form-control px-5" type="text" name="address" placeholder="address" value="{{$concert->address}}"/>
                        <br>
                        <textarea class="form-control px-5 " name="description"
                                  placeholder="description">{{$concert->description}}</textarea>
                        <br>
                        <input class="form-control px-5 " type="text" name="contacts"
                               placeholder="Телефон для справок" value="{{$concert->contacts}}"/>
                        <br>
                        <button type="submit" class="btn btn-success">update</button>
                    </div>
                </form>
            </div>
@endsection
