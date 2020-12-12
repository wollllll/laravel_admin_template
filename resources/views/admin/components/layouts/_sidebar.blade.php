<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- ロゴ画像 --}}
    <a href="{{ route('admin.dashboard.index') }}" class="brand-link text-center">
        <span class="brand-text">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2 text-sm">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.index') }}"
                       class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>ダッシュボード</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
