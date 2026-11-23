
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'POS Management System')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="app-container">

        <!-- Sidebar Navigation -->
        <aside class="sidebar">

            <div class="brand">
                <div class="brand-icon">P</div>
                <div class="brand-name">
                    POS<span> System</span>
                </div>
            </div>

            <nav class="sidebar-nav">

                <a href="{{ route('home') }}"
                   class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <span class="nav-icon">⌂</span>
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    <span class="nav-icon">ⓘ</span>
                    About
                </a>

                <a href="{{ route('customers') }}"
                   class="nav-link {{ request()->routeIs('customers*') ? 'active' : '' }}">
                    <span class="nav-icon">♡</span>
                    Customer Accounts
                </a>

                <a href="{{ route('users') }}"
                   class="nav-link {{ request()->routeIs('users*') ? 'active' : '' }}">
                    <span class="nav-icon">♙</span>
                    User Accounts
                </a>

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="nav-link"
                                style="width:100%; text-align:left; border:0; cursor:pointer;">
                            <span class="nav-icon">↪</span>
                            Log Out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link">
                        <span class="nav-icon">♙</span>
                        Log In
                    </a>
                @endauth

            </nav>

        </aside>

        <!-- Page Content -->
        <div class="main-content">

            <header class="topbar">
                <h1 class="topbar-title">
                    @yield('page-title', 'Home')
                </h1>
            </header>

            <main>
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>
