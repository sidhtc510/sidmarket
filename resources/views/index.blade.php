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


                    <div class="row justify-content-left">


                        @foreach ($products as $product)


                            <div class="card m-2" style="width: 18rem;">
                                {{-- <img src="..." class="card-img-top" alt="..."> --}}

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


                    {{-- @foreach ($products as $product)
                    {{ $product->title }} принадлежит {{ $product->category->title }}<br>
                    @foreach ($product->gallery as $gallery)
                        картинки {{ $gallery->image_from_gallery }} <br>
                    @endforeach
                    -------------------------------<br>
                @endforeach --}}


                    {{-- @foreach ($users as $user)
                    <b>{{ $user->email }} контакты:<br></b>
                    Имя: {{ $user->contact->firstname }}<br>
                    Отчество: {{ $user->contact->middle }}<br>
                    Фамилия: {{ $user->contact->lastname }}<br>
                    <b>Адрессные данные: </b>   <br>
                    индекс: {{ $user->contact->postalcode }}<br>
                    Город: {{ $user->contact->city }}<br>
                    Адрес: {{ $user->contact->address }} {{ $user->contact->housenumber }}<br>
                    Телефон: {{$user->contact->phonenumber}} <br>
                    -------------------------------<br>
                @endforeach --}}

                </div>
            </div>
        </div>
    </div>

    <footer class="mt-auto">
        {{ $products->links() }}
    </footer>





@endsection
