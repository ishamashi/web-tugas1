<nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">ISHAMASHI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link {{ ($title == 'Home') ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($title == 'About') ? 'active' : '' }}" href="/about">About</a>
            <a class="nav-link {{ ($title == 'Blog') ? 'active' : '' }}" href="/blog">Blog</a>
            <a class="nav-link {{ ($title == 'Materi') ? 'active' : '' }}" href="/materis">Materi</a>
            </div>
        </div>
    </div>
</nav>
