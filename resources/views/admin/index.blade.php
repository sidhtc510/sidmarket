@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}
        <a class="btn btn-primary" href="{{route('admin.importExportExcel')}}" role="button">Импорт/Экспорт Excel</a>
    </div>
    </div>

    <footer class="mt-auto">
        <div class="somefooterclass">footer</div>
     </footer>
@endsection
