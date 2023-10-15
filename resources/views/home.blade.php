@extends('layouts.app')

@section('title_block')
    Home
@endsection

@section('preview')
    <div class={{\Request::route()->getName()}}>
        @include('inc.header')
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
                            @if($links->count()>0)
                            @foreach($links as $link)
                                <div class="form-floating mb-3">
                                    <input type="text" name="name[{{$link->id}}]" class="form-control"
                                           id="floatingInputDisabled"
                                           placeholder="{{$link->name}}" value="{{$link->name}}">
                                    <label for="floatingInputDisabled">{{$link->name}}</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="link[{{$link->id}}]" class="form-control"
                                           id="floatingInputDisabled"
                                           value="{{$link->link}}" placeholder="{{$link->link}}">
                                    <label for="floatingInputDisabled">{{$link->link}}</label>
                                </div>
                            @endforeach
                            @endif
                            <div class="form-floating mb-3">
                                <input type="text" name="new_social" class="form-control" id="floatingInputDisabled"
                                       placeholder="Name new link" value="">
                                <label for="floatingInputDisabled">Name new link</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="new_url" class="form-control" id="floatingInputDisabled"
                                       value="" placeholder="new link">
                                <label for="floatingInputDisabled">new link</label>
                            </div>
                            <button type="submit" class="btn btn-light">жмяк</button>
                        </form>
                    </div>
                </div>
@endsection
@endif
