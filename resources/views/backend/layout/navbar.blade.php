<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">My Parts Database</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item @isset($menu_dashboard_active) active @endisset">
                <a class="nav-link" href="{{ route('backend.dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @isset($menu_categories_active) active @endisset">
                <a class="nav-link" href="{{ route('backend.categories') }}">Categories</a>
            </li>
            <li class="nav-item @isset($menu_locations_active) active @endisset">
                <a class="nav-link" href="{{ route('locations.index') }}">Locations</a>
            </li>
            <li class="nav-item dropdown @isset($menu_parts_active) active @endisset">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Parts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('parts.index') }}">Parts Index</a>
                    <a class="dropdown-item" href="{{ route('parts.create') }}">Create New Part</a>
                </div>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>