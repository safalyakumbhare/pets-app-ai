  <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
              <a href="/main-dashboard.php" class="logo">
                  <h1 class="text-white">Pets Portal</h1>
              </a>
              <div class="nav-toggle">
                  <button class="btn btn-toggle toggle-sidebar">
                      <i class="gg-menu-right"></i>
                  </button>
                  <button class="btn btn-toggle sidenav-toggler">
                      <i class="gg-menu-left"></i>
                  </button>
              </div>
              <button class="topbar-toggler more">
                  <i class="gg-more-vertical-alt"></i>
              </button>
          </div>
          <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
              <ul class="nav nav-secondary">
                  <li class="nav-item">
                      <a href="{{ route('admin.dashboard') }}" class="nav-link" aria-expanded="false">
                          <i class="fas fa-home"></i>
                          <p>Dashboard</p>
                          <!-- <span class="caret"></span> -->
                      </a>
                  </li>
                  <li class="nav-item ">
                      <a href="{{ route('admin.users.list') }}" class="nav-link" aria-expanded="false">
                          <i class="fa-solid fa-users"></i>
                          <p>Users</p>
                          <!-- <span class="caret"></span> -->
                      </a>
                  </li>

                  <li class="nav-item ">
                      <a href="{{ route('admin.pet.list') }}" class="nav-link" aria-expanded="false">
                          <i class="fa-solid fa-dog"></i>
                          <p>Pets</p>
                          <!-- <span class="caret"></span> -->
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="/pets_and_petsowner.php" class="nav-link" aria-expanded="false">
                          <i class="fa-solid fa-person"></i>
                          <p>Pets and Pet's Owner</p>
                          <!-- <span class="caret"></span> -->
                      </a>
                  </li>


                  <li class="nav-item">
                      <a href="/doctor_table.php" class="nav-link" aria-expanded="false">
                          <i class="fa-solid fa-user-doctor"></i>
                          <p>Doctors</p>
                          <!-- <span class="caret"></span> -->
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/clinic_table.php" class="nav-link" aria-expanded="false">
                          <i class="fa-solid fa-house-chimney-medical"></i>
                          <p>Clinic</p>
                          <!-- <span class="caret"></span> -->
                      </a>
                  </li>

              </ul>
          </div>
      </div>
  </div>
