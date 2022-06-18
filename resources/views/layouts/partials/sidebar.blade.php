
 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">

    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="admin_dashboard.php">
        <img src="/img/brand/blue.png" class="navbar-brand-img" alt="..." height="60">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="/img/theme/C:\Users\Ordinateur\Desktop\Plato\assets\img\1.png">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bienvenue! NADOH</h6>
            </div>
            <a href="admin_profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Mon Profil</span>
            </a>

            <a href="admin_change_pwd.php" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Changer Mon mot de passe</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="admin_logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Déconnecter</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="admin_dashboard.php">
                <img src="/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item   ">
            <a class="nav-link  " href="{{route('dashboard')}}">
              <i class="ni ni-tv-2 text-primary"></i>  Dashboard
            </a>
          </li>
          <br>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('client.index') }}">
              <i class="fa fa-user-cog text-blue"></i>Service Clients
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('l2.index') }}">
            <i class="fa fa-gift text-blue"></i>Niveau L2
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('l3.index') }}">
                <i class="fas fa-money-check-alt text-blue"></i>Niveau L3 (Interfaces)
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('utilisateur.index') }}">
              <i class="fa fa-users text-blue"></i>Utilisateurs
            </a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
