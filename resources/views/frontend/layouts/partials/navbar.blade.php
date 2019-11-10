<nav class="navbar navbar-expand-md navbar-dark bg-themes">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item"> <a href="{{ route('frontend.home.index') }}" class="nav-link">Beranda</a> </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu0">
                <li> <a class="dropdown-item" href="{{ route('frontend.pages.strukturOrganisasi') }}">Struktur Organisasi</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>