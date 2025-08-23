<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="/">MySite</a>
        {{-- Links --}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link {{ request()->is('/') ? 'text-danger' : 'text-primary' }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="about" class="nav-link {{ request()->is('about') ? 'text-danger' : 'text-primary' }}">About</a>
            </li>
            <li class="nav-item">
                <a href="porfolio" class="nav-link {{ request()->is('porfolio') ? 'text-danger' : 'text-primary' }}">Porfolio</a>
            </li>
            <li class="nav-item">
                <a href="contact" class="nav-link {{ request()->is('contact') ? 'text-danger' : 'text-primary' }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
