@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">
                        Импорт товаров
                    </div>
                    <div class="card-body p-2">
                        <form action="{{ route('admin.importProductsExcelStore') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <p><a href="{{asset('excelExemple/products.xlsx')}}">Скачать образец файла товаров</a> </p>
                                <label for="formFile" class="form-label">Choose File</label>
                                <input class="form-control" type="file" id="formFile" name="importedFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Import products</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Импорт категорий
                    </div>
                    <div class="card-body p-2">
                        <form action="{{ route('admin.importCategoriesExcelStore') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <p><a href="{{asset('excelExemple/category.ods')}}">Скачать образец файла категорий</a> </p>
                                <label for="formFile" class="form-label">Choose File</label>
                                <input class="form-control" type="file" id="formFile" name="importedFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Import categories</button>
                        </form>
                    </div>
                </div>
            </div>




            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Экспорт товаров в xlsx
                    </div>
                    <div class="card-body p-2">
                        <a class="btn btn-primary" href="{{ route('admin.exportProductsExcel') }}" role="button">Export
                            Products to
                            *.xlsx</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
    </div>
    </div>

    <footer class="mt-auto">
        <div class="somefooterclass">footer</div>
    </footer>
@endsection
