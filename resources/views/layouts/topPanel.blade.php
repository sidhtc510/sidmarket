<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <div class="logRegbtn">

            @guest

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
