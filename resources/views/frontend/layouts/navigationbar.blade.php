<nav class="navbar navbar-expand-md navbar-dark  shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'DC79') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('Band') }}
                        </a></li>
                    <li><a class="nav-link" href="{{ route('albums.index') }}">
                            {{ __('Photos') }}
                        </a></li>
                    <li><a class="nav-link" href="{{ route('videos.index') }}">
                            {{ __('Videos') }}
                        </a></li>
                    <li><a class="nav-link" href="{{ route('shows.index') }}">
                            {{ __('Shows') }}
                        </a></li>
                    <li><a class="nav-link" href="{{ route('contacts.index') }}">
                            {{ __('Contacts') }}
                        </a></li>
                    <li><a class="nav-link" href="{{ route('sponsors.index') }}">
                            {{ __('Sponsors') }}
                        </a></li>
                    <li><a class="nav-link" href="{{ route('signatures.index') }}">
                            {{ __('Guestbook') }}
                        </a></li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
