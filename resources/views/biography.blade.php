@extends('layouts.app')

@section('title_block')
    Biography
@endsection

@section('preview')
    <div class={{\Request::route()->getName()}}>
        @include('inc.header')

        <div class="div-logo" style="margin-top: 35%; margin-left: 5%;">
            <img src='/img/logo.svg' alt="" >
        </div>


    </div>
@endsection

@section('content')
    <div style="width:100%; height:1px; clear:both;"></div>
    <div class="biography-form-1">
        <p>
            Evgene Baev was born in Barnaul (Russia) in 1992.
            His first ever performance was at the age of five.
            Prize winner of many international competitions as a classical guitarist.
            Performing Bard Songs since 2005. Laureate of numerous bard festivals, participated as a jury member,
            and mentor of summer schools for young performers of Bard Songs.
            Since 2007 received professional musical education in Moscow and Novosibirsk from advanced Guitar
            teachers. Laureate of All-Russian and International competitions. Took lessons from A. Dervoed, H.
            Käppel, S. Hackl, M. Kläger, G. Sollima, A. York.
            In 2007 gave his first solo concert.</p>
        <div style="margin-top: 2%" id="photo-bio-1">
            <img id="bio-img" src="/img/bio.png" alt="" height="350px" width="500px"
                 style="margin-left: 4%; margin-top: 3%">
        </div>

    </div>
    <div style="margin-left: 60%; margin-top: -25%" id="photo-bio-2">
        <img src='/img/logo.svg' alt="" width="700w" height="700w" style="opacity: .2; margin-top: 13%">
    </div>

    <div class="biography-form-2">
        <p>
            Winner of the Russian President's Prize.
            Graduated from the Novosibirsk Conservatory as a classical guitarist (2017).
            Graduated from the Mozarteum University (Salzburg) as a classical vocalist (tenor) in 2023.
            Is the soloist of Operettenbühne Vaduz.
            He is actively performing in Austria, Germany, Switzerland, Liechtenstein, Spain, Kazakhstan, and
            Russia.
            Participant in several opera productions at the Bregenzer Festspiele as Guitarist and as Singer (2019,
            2021).
            Evgene has worked with conductors such as Kirill Petrenko, Enrique Mazzola, Jonathan Brandani, Daniel
            Cohen, Wayne Marshall, and vocalists: Vesselina Kasarova, Anna Goryachova, Brigitte Fassbaender, and
            Maria Barakova.
            Developed his own method of teaching guitar to children from the age of four.
            Since 2023 is a mentor of pedagogical practice for students of Stella Vorarlberg Privathochschule für
            Musik (Feldkirch, Austria).</p>
    </div>

    {{--    @if(session('auth'))--}}
    {{--        <div class="form-biography">--}}
    {{--            @include('inc.messages')--}}
    {{--            <div class="">--}}
    {{--                <form action="{{route('add-biography')}}" method="post">--}}
    {{--                    @csrf--}}
    {{--                    <label for="floatingTextareaDisabled">text biography</label>--}}
    {{--                    <textarea class="form-control" name="text" placeholder="text biography"--}}
    {{--                              id="floatingTextareaDisabled"></textarea>--}}

    {{--                    <button type="submit" class="btn btn-light">жмяк</button>--}}
    {{--                </form>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    <div style="width:100%; height:1px; clear:both;"></div>
@endsection


