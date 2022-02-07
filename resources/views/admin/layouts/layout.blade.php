@include('generalLayout.head')

<body>
    <div id="app">
        @include('generalLayout.topPanel')

        <main class="py-4">
            @yield('content')


           @include('generalLayout.notification')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/script.js" defer></script>
</body>

</html>
