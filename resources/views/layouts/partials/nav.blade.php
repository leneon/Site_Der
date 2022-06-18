
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="admin_dashboard.php"> <i class=" icon icon- text-blue"></i> NADOH Dashboard</a>
          <!-- Form -->

          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="/img/user2.png">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">NADOH</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Bienvenue! NADOH</h6>
                </div>
                  <a href="admin_profile.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                <span>Mon Profil</span>

                <a href="client_profile_update.php" class="dropdown-item">
                  <i class="fas fa-user-cog"></i>
                  <span>Modifier mon profil</span>
                  </a>

                <a href="admin_change_pwd.php" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Changer mon mot de passe</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="admin_logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Se déconnecter</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
  </nav>
