@extends('layouts.app')

@section('title_block')
    Reviews
@endsection

@section('preview')
    <div class={{\Request::route()->getName()}}>
        @include('inc.header')
        <div class="col-md-8">
            <div class="div-form-review">
                <form id="form">
                    @csrf
                    <div class="mb-4">
                        <div class="">
                            <label id="labelReview" class="label-reviews"
                                   style="margin-right: 15%">You can leave your
                                review</label>
                            <textarea name="review" class="text-area-review form-control"
                                      id="review"
                                      placeholder="Enter text" minlength="4" maxlength="500" required></textarea>
                            <button  id="sendReview" type="submit" class="btn btn-light" style="margin-top: 5px" >send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="div-logo" style="margin-top: 3%">
            <img src='/img/logo.svg' alt="" id="logo-m">
        </div>

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

