<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">PENILAIAN HARIAN</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PT</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">DASHBOARD</li>
            <li>
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">PENILAIAN HARIAN</li>

            @foreach (config('other.kelas') as $class)
                <li class="dropdown {{ request()->query('code') == $class['code'] ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown "><i class="far fa-file-alt"></i> <span>Kelas
                            {{ $class['name'] }}</span></a>
                    <ul class="dropdown-menu">
                        @foreach (config('other.mapel') as $mapel)
                            <li class="{{ request()->query('mapel') == $mapel['code'] ? 'active' : '' }}"><a
                                    class="nav-link "
                                    href="{{ route('penilaian.index') }}?code={{ $class['code'] }}&mapel={{ $mapel['code'] }}">{{ $mapel['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach


            <li class="menu-header">TENTANG KAMI</li>
            <li>
                <a href="/visi" class="nav-link"><i class="far fa-user"></i><span>Visi&Misi</span></a>
            </li>

        </ul>
    </aside>

</div>
