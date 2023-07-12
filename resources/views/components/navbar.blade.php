<nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="/">
            Course Junction
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#course">Course</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Dashboard</a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
