<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Uhuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Dashboard'? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Mahasiswa'? 'active' : '' }}" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav>