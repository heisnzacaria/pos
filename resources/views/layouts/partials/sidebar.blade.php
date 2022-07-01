<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->getAvatar() }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->getFullname() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a  class="nav-title ">
                        <i class="nav-icon fas fa-title"></i>

                        <p>POINT OF SALES</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products') }}">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>Products</p>
                    </a>
                </li>
                {{-- <li class="nav-item has-treeview">
                    <a href="{{ route('cart2.index') }}" class="nav-link {{ activeSegment('cart2') }}">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Invoince</p>
                    </a>
                </li> --}}
                <li class="nav-item has-treeview">
                    <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart') }}">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>Open POS</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('orders.index') }}" class="nav-link {{ activeSegment('orders') }}">
                        <i class="nav-icon fas fa-cart-plus"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                    <li class="nav-item has-treeview">
                        <a  class="nav-title ">
                            <i class="nav-icon fas fa-title"></i>

                            <p>DIGITAL CERTIFICATES</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item has-treeview">
                        <a href="{{ route('downloads.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-print"></i>

                            <p>Administrative Paperwork</p>
                        </a>
                    </li> --}}
                    <li class="nav-item has-treeview">
                        <a href="crudc" class="nav-link ">
                            <i class="nav-icon fas fa-handshake"></i>

                            <p>Formation Certificate</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="crudi" class="nav-link ">
                            <i class="nav-icon fas fa-envelope"></i>

                            <p>Internship Certificate</p>
                        </a>

                    <li class="nav-item has-treeview">
                        <a href="crud" class="nav-link ">
                            <i class="nav-icon fas fa-briefcase"></i>

                            <p>Work Certificate</p>
                        </a>
                    </li>
                </li>
                <li class="nav-item has-treeview">
                    <a  class="nav-title ">
                        <i class="nav-icon fas fa-title"></i>

                        <p>APPLICATION SETTING</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="crud_comp" class="nav-link ">
                        <i class="nav-icon fas fa-info"></i>

                        <p>Company Setting</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings') }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Settings</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>

.nav-title{


    font-family: "Lucida Console", "Courier New", monospace;
    font-style: italic;
    color: #4CAF50;
}

</style>
