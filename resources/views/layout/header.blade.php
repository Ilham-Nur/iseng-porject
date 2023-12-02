@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <section id="sidebar">
        <a href="#" class="brand">
			<i class='bx bx-plus-medical'></i>
            <span class="text">E-Donor</span>
        </a>
		<ul class="side-menu top">
			<li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
				<a href="{{ route('dashboard') }}">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="{{ request()->routeIs('user') ? 'active' : '' }}">
				<a href="{{ route('user') }}">
					<i class='bx bxs-group'></i>
					<span class="text">User</span>
				</a>
			</li>
			<li class="{{ request()->routeIs('lokasidonor') ? 'active' : '' }}">
				<a href="{{ route('lokasidonor') }}">
					<i class='bx bxs-map-alt' ></i>
					<span class="text">Lokasi Donor</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-donate-blood'></i>
					<span class="text">Pendonor</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-bank'></i>
					<span class="text">Stok Darah</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu'></i>
            {{-- <a href="#" class="nav-link">Categories</a> --}}
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png" alt="Profile Image">
            </a>
        </nav>

        <main>
            @yield('main')
        </main>
    </section>
@endsection
