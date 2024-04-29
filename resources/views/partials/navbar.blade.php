
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/about">Sistem Pendukung Keputusan Pemilihan Smartphone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse">
            </i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 bg-dark border-0">
                <i class="bi bi-box-arrow-in-right"></i> 
                Logout</button>
            </form>
            </li>
          </ul>
        </li>
            @else
          <li class="nav-item">
            <a href="login" class="nav-link"><i class="bi bi-save"></i>Login</a>
          </li>
          @endauth
        </ul>
      </div>

      
    </div>
  </nav>
  