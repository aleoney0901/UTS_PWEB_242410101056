<nav class="navbar navbar-expand-lg" style="background-color: #1a1a1a;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <span style="color: #5a3e36; font-size: 1.3rem; letter-spacing: 2px;"> MOFUSAND MINI CATALOGUE</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}" style="color: #ffffff;">New Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}" style="color: #ffffff;">Restocked</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan') }}" style="color: #ffffff;">By Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}" style="color: #ffffff;">Profile</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link" style="color: #f4a7b9;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
