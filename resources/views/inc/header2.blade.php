<header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
    <div id="firstHeader" class="hidden">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0  letter">
            <li><a href="/" class=" nav-link px-5  text-dark letter">Home</a></li>
            <li><a href="/photo" class="nav-link px-5 link-secondary  text-dark letter ">Photo</a></li>
            <li><a href="/video" class="nav-link px-5 link-secondary text-dark letter ">Video</a></li>
            <li><a href="/concerts" class="nav-link px-5 link-secondary text-dark letter ">Concerts</a></li>
            <li><a href="{{route('biography')}}" class="nav-link px-5 link-dark letter">Bio</a></li>
            <li><a href="{{route('reviews')}}" class="nav-link px-5 link-secondary text-dark letter">Reviews</a>
            </li>
            <li><a href="{{route('contacts')}}" class="nav-link px-5 text-dark letter">Contacts</a></li>
            @if(session('auth'))
                <li><a href="{{route('all_messages')}}" class="nav-link px-5 text-dark letter">Messages</a></li>
            @endif
        </ul>
    </div>
    <div id="div-header-2" class=" div-header-2">
        <nav class="hidden navbar navbar-dark bg-dark" aria-label="First navbar example" id="secondHeader"
             style="width: 100%">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Evgene Baev</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample01">
                    <ul class="navbar-nav me-auto mb-2">
                        <li><a href="{{route('home')}}" class="nav-link px-5 link-light letter">Home</a></li>
                        <li><a href="{{route('photo')}}" class="nav-link px-5 link-light letter">Photo</a></li>
                        <li><a href="{{route('video')}}" class="nav-link px-5 link-light letter">Video</a></li>
                        <li><a href="{{route('concerts')}}" class="nav-link px-5 link-light letter">Concerts</a></li>
                        <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Bio</a></li>
                        <li><a href="{{route('reviews')}}" class="nav-link px-5 link-light letter">Reviews</a></li>
                        <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>
                        @if(session('auth'))
                            <li><a href="{{route('all_messages')}}" class="nav-link px-5 link-light letter">Messages</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>


