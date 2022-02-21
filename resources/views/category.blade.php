@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex flex-wrap">
        <div class="container">
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


<p>Страница категории Id <strong>{{$category->id}}</strong> назв: <strong>{{$category->title}}</strong></p>
{{-- @foreach ($category->childrenCategories as $item)
    {{$item->slug}} <br>
@endforeach --}}


<p>Вывод товаров определенной категории</p>


                    <div class="productGrid">


                        @foreach ($products as $product)


                            <div class="card productCard">
                  

                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of
                                        the card's content.</p>
                                    <a href="{{ route('product.show', $product->slug)}}"
                                        class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="mt-auto">
        {{-- {{ $products->links() }} --}}
    </footer>





@endsection
