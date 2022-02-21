@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session('status'))
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="leftbar">

                @include('layouts.categoriesMenu')

            </div>




            {{-- @foreach ($category->childrenCategories as $item)
    {{$item->slug}} <br>
@endforeach --}}


            <h3>Страница категории Id <strong>{{ $category->id }}</strong> назв: <strong>{{ $category->title }}</strong>
            </h3>


            <div class="productGrid">
                @foreach ($products as $product)
                    @include('layouts.productCard')
                @endforeach
            </div>

        </div>
    </div>
    </div>
    </div>

    <footer class="mt-auto">
        {{ $products->links() }}
    </footer>
@endsection
