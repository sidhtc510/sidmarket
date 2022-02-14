<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <div class="logRegbtn">
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul> --}}

            <!-- Right Side Of Navbar -->



            <!-- Authentication Links -->
            @guest
                {{-- @if (Route::has('login'))
                    <a class="" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i>
                        {{ __('Вход') }}</a>
                @endif
                @if (Route::has('register'))
                    <a class="" href="{{ route('register') }}"><i class="bi bi-person-plus"></i>
                        {{ __('Регистрация') }}</a>
                @endif --}}

                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-person-fill"></i>
                </button>

            @else

                @if (Auth::user()->role === 'admin')
                    <a class="" href="{{ route('admin.index') }}"><i class="bi bi-card-list"></i>
                        {{ __('Панель администратора') }}</a>
                    <a class="" href="{{ route('dashboard.create') }}"><i class="bi bi-card-list"></i>
                        {{ __('Кабинет') }}</a>
                @else
                    <a class="" href="{{ route('dashboard.create') }}"><i class="bi bi-card-list"></i>
                        {{ __('Кабинет') }}</a>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-link btnLogout" type="submit"><i class="bi bi-box-arrow-left"></i>
                        {{ __('Выход') }}</button>
                </form>
            @endguest
        </div>
    </div>
</nav>
