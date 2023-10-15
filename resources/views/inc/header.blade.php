<header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4">
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center letter">
        <li><a href="{{route('home')}}" class="nav-link px-5 link-light letter">Home</a></li>
        <li><a href="{{route('photo')}}" class="nav-link px-5 link-light letter">Photo</a></li>
        <li><a href="{{route('video')}}" class="nav-link px-5 link-light letter">Video</a></li>
        <li><a href="{{route('concerts')}}" class="nav-link px-5 link-light letter">Concerts</a></li>
{{--        <li><a href="{{route('biography')}}" class="nav-link px-5 link-light letter">Biography</a></li>--}}
        <li><a href="{{route('reviews')}}" class="nav-link px-5 link-light letter">Reviews</a></li>
{{--        <li><a href="{{route('contacts')}}" class="nav-link px-5 text-light letter">Contacts</a></li>--}}
        @if(session('auth'))
            <li><a href="{{route('all_messages')}}" class="nav-link px-5 link-light letter">Messages</a></li>
        @endif
    </ul>
</header>
