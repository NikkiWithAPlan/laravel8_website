<nav class="navbar sticky-top navbar-expand-xl navbar-dark shadow-sm" style="background-color: #414141;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/storage/images/logoSmall00.png" alt="" class="d-inline-block align-text-center">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto">
                    <li class="m-2">
                        <a class="nav-link" href="{{ route('bands') }}">
                            <h2>{{ __('BAND') }}</h2>
                        </a>
                    </li>
                    <li class="m-2"><a class="nav-link" href="{{ route('albums.index') }}">
                            <h2>{{ __('PHOTOS') }}</h2>
                        </a></li>
                    <li class="m-2">
                        <a class="nav-link" href="{{ route('videosPage') }}">
                            <h2>{{ __('VIDEOS') }}</h2>
                        </a>
                    </li>
                    <li class="m-2"><a class="nav-link" href="{{ route('shows.index') }}">
                            <h2>{{ __('SHOWS') }}</h2>
                        </a></li>
                    <li class="m-2"><a class="nav-link" href="{{ route('contacts.index') }}">
                            <h2>{{ __('CONTACT') }}</h2>
                        </a></li>
                    <li class="m-2"><a class="nav-link" href="{{ route('sponsors.index') }}">
                            <h2>{{ __('SPONSORS') }}</h2>
                        </a></li>
                    <li class="m-2"><a class="nav-link" href="{{ route('signatures.index') }}">
                            <h2>{{ __('GUEST BOOK') }}</h2>
                        </a></li>
                </ul>
            @endguest
        </div>
    </div>
</nav>

<style>
    @font-face {
        font-family: Squealer;
        src: url('storage/fonts/squealer.woff') format("woff");
    }

    h2 {
        font-family: "Squealer";
        color: #c60018;
        font-size: 30px;
    }

    /* Style the active class, and buttons on mouse-over */
    h2.active-item,
    h2:hover {
        font-weight: 900;
        text-shadow: 0 0 15px #f5db47;
    }

</style>

<script>
    $('.navbar .navbar-nav a').on('click', function() {
        $('.navbar .navbar-nav').find('li.active').removeClass('active');
        $(this).parent('li').addClass('active');
    });
</script>
