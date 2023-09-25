<!-- Sidebar for Desktop -->
<nav id="desktop-sidebar" class="col-md-3 col-lg-2 d-md-block sidebar bg-dark">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('user.dashboard') ? 'active': ''}}" href="{{route('user.dashboard')}}"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('user.products') ? 'active': ''}}" href="{{route('user.products')}}" ><i class="fas fa-box me-2"></i> Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-cogs me-2"></i> Settings</a>
        </li>
        <!-- Add more links as needed -->
    </ul>
</nav>

<!-- Sidebar for Mobile -->
<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="mobile-sidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel"><a class="navbar-brand" href="{{route('user.dashboard')}}"><img src="{{asset('assets/imgs/logos/site_icon_128x128.png')}}"></a></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column sidebar">
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('user.dashboard') ? 'active': ''}}" href="{{route('user.dashboard')}}"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('user.products') ? 'active': ''}}" href="{{route('user.products')}}" ><i class="fas fa-box me-2"></i> Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cogs me-2"></i> Settings</a>
            </li>
            <!-- Add more links as needed -->
        </ul>
    </div>
</div>