<!-- Left Sidenav -->
<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li>
            <a href="{{route('dashboard')}}"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
		<li>
            <a href="javascript: void(0);"><i class="ti-image"></i><span>Blog Editor</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('blog.create')}}"><i class="ti-control-record"></i>Add Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('blog.list')}}"><i class="ti-control-record"></i>Blog List</a></li>
            </ul>
        </li>

        <li><a class="nav-link" href="{{route('user.list')}}"><i class="ti-user"></i>Users List</a></li>

        <li><a class="nav-link" href="{{route('products.list')}}"><i class="ti-bell"></i>Products List</a></li>
        <li>
            <a href="{{route('payments.list')}}"><i class="ti-bar-chart"></i><span>Payments</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>
    </ul>
</div>
<!-- end left-sidenav-->
