@extends('layouts.app')

@section('title_block')
    Contacts
@endsection

@section('preview')
    <div class={{\Request::route()->getName()}}>
        @include('inc.header')
        <div class="div-logo m-div-logo">
            <img src='/img/logo.svg' alt="" id="logo-m">
        </div>
        <div class="text_preview">
            <div class="form-contacts">
                <form id="formContacts">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" name="name" type="text" placeholder="Leave your name"
                               id="name">
                        <label for="floatingTextareaDisabled">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="contacts" class="form-control" id="contacts"
                               placeholder="email or phone">
                        <label for="floatingInputDisabled">Email or phone</label>
                    </div>
                    <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" placeholder="Leave a message here"
                              id="message"
                              style="height: 100px"></textarea>
                        <label for="floatingTextarea2Disabled">Message</label>
                    </div>
                    <button type="submit" class="btn btn-light" id="sendContact">send</button>
                </form>
            </div>

        </div>
    </div>


@endsection

@section('content')
    @if(Auth::user())
        <div class="content">
            <div class="container mb4">
                @foreach($emails as $email)
                    <div style="padding: 15px">
                        <div class="alert alert-info">
                            <h4>{{ $email -> created_at }}</h4>
                            <h4>{{ $email -> name }}</h4>
                            <h4>{{$email->contacts}}</h4>
                            <span>{{ $email -> text }}</span>
                        </div>
                        <a href="{{route('delete-email', $email->id)}}">
                            <button class="power-button btn btn-danger" name="delete">Delete</button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

@endsection
