@extends('layouts.app')

@section('title_block')
    Update review
@endsection

@section('preview')
    <div class="reviews">
        @include('inc.header')
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
