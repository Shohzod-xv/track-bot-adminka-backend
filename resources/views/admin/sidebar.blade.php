<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}"> <img alt="image" src=" {{ asset('admin/assets/img/logo.png')}}" class="header-logo" /> <span
                        class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.users.index') }}" class="menu-toggle nav-link">
                    <span>Users</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.phones.index') }}" class="menu-toggle nav-link">
                    <span>Phones</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.categories.index') }}" class="menu-toggle nav-link">
                    <span>Categories</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.posts.index') }}" class="menu-toggle nav-link">
                    <span>Posts</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.language.index') }}" class="menu-toggle nav-link">
                    <span>Language</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.amaliyot.index') }}" class="menu-toggle nav-link">
                    <span>Amaliyot</span></a>
            </li>
        </ul>
    </aside>
</div>


{{--Quyidagi maydonlardan tashkil topgan, PRICE nomi bilan tuzilmani shakllantirilsin:--}}
{{--Molning nomi;--}}
{{--Bunday turdagi mollar sotuvchi do’kon nomi;--}}
{{--Sumdagi molning narxi.--}}
{{--Navbatdagi amallarni bajaruvchi dasturni tuzing:--}}
{{--8 ta PRICE toifasidan tashkil topgan tuzilmani klaviatura orqali massiv ma'lumotlari kiritilsin;--}}
{{--ro’yxatdagi mollar nomi buyicha alfavit asosida tartiblansin;--}}
{{--Klaviatura orqali nomi kiritilgan mol xaqidagi to’lik ma'lumot ekranga chiqarsin;--}}
{{--Agar bunday nomdagi mol bulmasa, u xolda ekranga mos xabar matni chiqarilsin.--}}

