@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

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
@endsection
