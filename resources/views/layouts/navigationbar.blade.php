<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'DC79') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @auth
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Band') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="nav-link" href="{{ route('band.index') }}">
                            {{ __('Band members') }}
                        </a></li>
                        <li><a class="nav-link" href="{{ route('band_details.index') }}">
                            {{ __('Band text') }}
                        </a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ route('albums.index') }}">
                    {{ __('Albums and photos') }}
                </a></li>
                <li><a class="nav-link" href="{{ route('shows.index') }}">
                    {{ __('Shows') }}
                </a></li>
                <li><a class="nav-link" href="{{ route('contacts.index') }}">
                    {{ __('Contacts') }}
                </a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>