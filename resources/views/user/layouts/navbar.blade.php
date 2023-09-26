<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('user.dashboard')}}"><img src="{{asset('assets/imgs/logos/site_icon_128x128.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-sidebar" aria-controls="mobile-sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <div class="d-flex ml-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-dark dropdown-toggle user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle me-2"></i> Username
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{route('user.profile')}}"><i class="fas fa-user me-2"></i> Profile Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('user.create.cards')}}"><i class="fas fa-credit-card"></i> Payment methods </a></li>
                    
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="/logout">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt me-2"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</nav>