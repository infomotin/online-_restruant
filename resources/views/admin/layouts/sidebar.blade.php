<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>

            <li><a class="nav-link" href="{{route('admin.slider.index')}}"><i class="far fa-square"></i> <span>Slider</span></a></li>
            <li><a class="nav-link" href="{{route('admin.why-choose-us.index')}}"><i class="far fa-square"></i> <span>Why Choose Us</span></a></li>

            <li class="menu-header">Pages</li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Manage Restaurant</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.category.index') }}">Product Category </a></li>
                    <li><a href="{{ route('admin.product.index') }}">Product </a></li>
                    <li><a href="{{ route('admin.product-gallery.index') }}">Product Gallery </a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Admin Setting </span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.setting.index') }}">Setting </a></li>
                    
                </ul>
            </li>
            
        </ul>

        <div class="p-3 mt-4 mb-4 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
