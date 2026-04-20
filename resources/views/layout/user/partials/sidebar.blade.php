<!-- Sidebar -->
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
                <li class="nav-item active">
                    <a class="nav-link" href="main-dashboard.php">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.pets.create') }}">
                        <i class="fa-solid fa-dog"></i>
                        <p>Register Pet</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="search_clinic.php">
                        <i class="fa-solid fa-house-chimney-medical"></i>
                        <p>Pets Clinic</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_appointment.php">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>Your Appoinments</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
