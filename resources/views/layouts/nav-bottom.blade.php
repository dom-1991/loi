<nav class="nav-bottom bg-white shadow d-flex">
    <div class="__item">
        <a href="" class="text-center d-flex flex-column {{ request()->routeIs('homepage') ? 'active' : '' }} h-100 justify-center">
            <i class="fa-solid fa-house"></i>
            <span>Trang chủ</span>
        </a>
    </div>
    <div class="__item">
        <a href="{{ route('reports.out') }}"
           class="text-center d-flex flex-column h-100 justify-center {{ request()->routeIs('reports.out') ? 'active' : '' }}">
            <i class="fa-solid fa-money-bill-transfer"></i>
            <span>Chi tiêu</span>
        </a>
    </div>
    <div class="__item">
        <a href="{{ route('reports.in') }}"
           class="text-center d-flex flex-column h-100 justify-center {{ request()->routeIs('reports.in') ? 'active' : '' }}">
            <i class="fa-solid fa-coins"></i>
            <span>Thu nhập</span>
        </a>
    </div>
    <div class="__item">
        <a href="{{ route('reports.index') }}"
           class="text-center d-flex flex-column h-100 justify-center {{ request()->routeIs('reports.index') ? 'active' : '' }}">
            <i class="fa-solid fa-chart-simple"></i>
            <span>Thống kê</span>
        </a>
    </div>
    <div class="__item">
        <a href="{{ route('users.index') }}"
           class="text-center d-flex flex-column h-100 justify-center {{ request()->routeIs('users.index') ? 'active' : '' }}">
            <i class="fa-solid fa-users"></i>
            <span>Nhân viên</span>
        </a>
    </div>
    <div class="__item">
        <a href="{{ route('profile.edit') }}"
           class="text-center d-flex flex-column h-100 justify-center {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
            <i class="fa-solid fa-user"></i>
            <span>Tài khoản</span>
        </a>
    </div>
</nav>
