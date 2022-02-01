@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('dashboard') }}">DashBoard</a> <br>
                <a href="{{ route('admin.index') }}">AdminPanel</a>
            </div>
        </div>
    </div>
@endsection
