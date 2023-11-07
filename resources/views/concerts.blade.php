@extends('layouts.app')

@section('title_block')
    Concerts
@endsection

@section('preview')
    @include('inc.header2')
    <div class="concerts">
        <img class="" src='/img/bg/concerts_bg.webp' alt="img_video">
    </div>
@endsection

@section('content')
    <div class="content">
        <div style="width:100%; height:1px; clear:both;"></div>
        @foreach($concerts as $concert)
            <div class="div-concert">
                <div class="container">
                    <h2 class="event-h2">{{$concert->date->toFormattedDateString()}}</h2>
                    <h5 class="time">{{$concert->time}}</h5>
                    <span>--------------------------------------</span>
                    <h2 class="event-h2">{{$concert->address}}</h2>
                    <sapn class="description-concert">{{$concert->description}}</sapn>
                    @if($concert->contacts)
                        <p>--------------------------------------</p>
                        <h3>Контакты для справок</h3>
                        <span class="time" >{{$concert->contacts}}</span>
                    @endif
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


        @if('auth')
            <div class="div-form border border-0">
                <form action="{{route('create-event')}}" method="post">
                    @csrf
                    <div class="mb4">
                        <input class="form-control px-5 " type="date" name="date" placeholder="date"/>
                        <br>
                        <input class="form-control px-5 " type="time" name="time" placeholder="time"/>
                        <br>
                        <input class="form-control px-5 " type="text" name="address" placeholder="address"/>
                        <br>
                        <textarea class="form-control px-5 " name="description"
                                  placeholder="description"></textarea>
                        <br>
                        <input class="form-control px-5 " type="text" name="contacts"
                               placeholder="Телефон для справок"/>
                        <br>
                        <button type="submit" class="btn btn-success">Жмяк</button>
                    </div>
                </form>
            </div>
        @endif
        <div style="width:100%; height:1px; clear:both;"></div>
    </div>
@endsection
