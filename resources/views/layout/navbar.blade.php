<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('mahasiswa.index') }}">Home</a>
            </li>
        </ul>
    </div>
    <div class="float-right">
        {{ Auth::user()->name }}
        <a href="{{ route('auth.logout') }}" class="btn btn-warning ml-2">Logout</a>
    </div>
</nav>
