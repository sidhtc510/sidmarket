<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->



            <!-- Authentication Links -->
            <div class="container_dropdown">
                <ul class="navbar-nav ms-auto">

                    @guest
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="bi bi-person"></i></a>
                            <ul class="dropdown-menu">
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        
                                        <a class="nav-link"
                                            href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> {{ __('Вход') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}"><i class="bi bi-person-plus"></i> {{ __('Регистрация') }}</a>
                                    </li>
                                @endif
                            @else

                                <li class="dropdown"><a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown"><i class="bi bi-person-check-fill"></i></a>
                                    <ul class="dropdown-menu">



                                        @if (Auth::user()->role === 'admin')
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('admin.index') }}"><i class="bi bi-card-list"></i> {{ __('Панель администратора') }}</a>
                                            </li>
                                        @else

                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('dashboard') }}"><i class="bi bi-card-list"></i> {{ __('Кабинет') }}</a>
                                            </li>
                                        @endif
                                        <li class="nav-item">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button class="btn btn-link nav-link btnLogout"
                                                    type="submit"><i class="bi bi-box-arrow-left"></i> {{ __('Выход') }}</button>
                                            </form>
                                        </li>
                                    @endguest
                                </ul>
                            </li>

                        </ul>
            </div>
        </div>
    </div>
</nav>