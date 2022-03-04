@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}



    <form action="{{ route('admin.importProductsExcelStore') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Products Excel file</label>
            <input type="file" name="importedFile" class="form-control-file" id="exampleFormControlFile1"> <br>
            <button type="submit" class="btn btn-primary">Import</button>
        </div>

    </form>
    <br><br>

    <form action="{{ route('admin.importCategoriesExcelStore') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Categories Excel file</label>
            <input type="file" name="importedFile" class="form-control-file" id="exampleFormControlFile1"> <br>
            <button type="submit" class="btn btn-primary">Import</button>
        </div>

    </form>
    <br><br>
    <a class="btn btn-primary" href="{{ route('admin.exportProductsExcel') }}" role="button">Export Products to *.xlsx</a>



    </div>
    </div>

    <footer class="mt-auto">
        <div class="somefooterclass">footer</div>
    </footer>
@endsection
