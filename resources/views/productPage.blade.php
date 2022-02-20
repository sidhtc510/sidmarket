@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">category (rel)</th>
                            <th scope="col">images (rel)</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{ $product->id_postavschika }}</th>
                            <td>{{ $product->title }}</td>
                           
                            <td> <a
                                href="{{ route('categories.single', ['slug' => $product->category->slug]) }}">{{ $product->category->title }}</a></td>
                            <td>
                                @foreach ($product->gallery as $image)
                                    <a href="#">{{ $image->image_from_gallery }}</a>
                                @endforeach
                            </td>


                        </tr>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
@endsection
