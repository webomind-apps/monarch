<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html"
        style="background-color:#fff; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin/img/logo.png') }}" height="72px" style="margin-top: 2px">
        </div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->segment(1) == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    @if (Auth::user()->admin_type == '1')
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ request()->segment(2) == 'clinics' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.clinics.index') }}">
                <i class="fa fa-building"></i>
                <span>Clinics</span></a>
        </li>

        <li class="nav-item {{ request()->segment(2) == 'location' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.location.index') }}">
                <i class="fas fa fa-map-marker"></i>
                <span>Location</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cart-plus"></i> <span class="hidden-xs">Services</span>
            </a>
            <div class="dropdown-menu">
                <a class="nav-link" href="{{ route('admin.services.index') }}">
                    <i class="fa fa-cart-plus"></i>
                    <span>Services</span></a>
                <a class="nav-link" href="{{ route('admin.major-services.index') }}">
                    <i class="fa fa-cart-plus"></i>
                    <span>Major Services</span></a>
            </div>
        </li>

        <li class="nav-item {{ request()->segment(2) == 'plans' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.plans.index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Plans</span></a>
        </li>

        <li class="nav-item {{ request()->segment(2) == 'advantages' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.advantages.index') }}">
                <i class="fa fa-bars"></i>
                <span>Advantages</span></a>
        </li>

        <li class="nav-item {{ request()->segment(2) == 'enquiry' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.enquiry.index') }}">
                <i class="fa fa-question-circle"></i>
                <span>Appointments</span></a>
        </li>

        <li class="nav-item {{ request()->segment(2) == 'users' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="fa fa-user-plus"></i>
                <span>Add User</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-building"></i> <span class="hidden-xs">Contact Us</span>
            </a>
            <div class="dropdown-menu">
                <a class="nav-link" href="{{ route('admin.contact-us.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Contact Us/SEO content</span></a>
                <a class="nav-link" href="{{ route('admin.query.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Contact Us Queries</span></a>
                <a class="nav-link" href="{{ route('admin.careers.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Careers</span></a>
                {{-- <a class="nav-link" href="{{ route('admin.registration-forms.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Registration Forms</span></a> --}}
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-building"></i> <span class="hidden-xs">About</span>
            </a>
            <div class="dropdown-menu">
                <a class="nav-link" href="{{ route('admin.who-we-are.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Who We Are</span></a>
                <a class="nav-link" href="{{ route('admin.doctors.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Meet The Doctors</span></a>
                <a class="nav-link" href="{{ route('admin.photo-gallery.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Photo Gallery</span></a>
                <a class="nav-link" href="{{ route('admin.smile-gallery.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Smile Gallery</span></a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-building"></i> <span class="hidden-xs">Patients</span>
            </a>
            <div class="dropdown-menu">
                <a class="nav-link" href="{{ route('admin.financials.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Financials</span></a>
                <a class="nav-link" href="{{ route('admin.promotions.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Promotions</span></a>
                {{-- <a class="nav-link" href="{{ route('admin.careers.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Registration</span></a> --}}
                <a class="nav-link" href="{{ route('admin.registration-forms.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Registration Forms</span></a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-building"></i> <span class="hidden-xs">CMS</span>
            </a>
            <div class="dropdown-menu">
                <a class="nav-link" href="{{ route('admin.sliders.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Slider</span></a>
                <a class="nav-link" href="{{ route('admin.partners.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Partners</span></a>
            </div>
        </li>

        <li class="nav-item {{ request()->segment(2) == 'blog_category' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.blog-category.index') }}">
                <i class="fa fa-blog"></i>
                <span>Blog category</span></a>
        </li>
        <li class="nav-item {{ request()->segment(2) == 'blogs' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.blogs.index') }}">
                <i class="fa fa-blog"></i>
                <span>Blogs</span></a>
        </li>

    @else
        <li class="nav-item {{ request()->segment(2) == 'clinics' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.clinics.index') }}">
                <i class="fa fa-building"></i>
                <span>Clinics</span></a>
        </li>
        <li class="nav-item {{ request()->segment(2) == 'enquiry' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.enquiry.index') }}">
                <i class="fa fa-question-circle"></i>
                <span>Appointments</span></a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
