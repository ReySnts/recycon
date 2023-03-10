<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{ route('home_route') }}>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('show_product_route') }}>Show Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('login_route') }}>Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('register_route') }}>Register</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
</header>