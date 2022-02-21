@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                

                <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="user_id"
                            value="{{ $user->id }}">

                    <div class="mb-3">
                        <label for="firstname" class="form-label">Name</label>
                        <input type="text" class="form-control" id="firstname" @error('firstname') is-invalid @enderror  name="firstname"
                            value="{{ $user->contact == null ? null : $user->contact->firstname}}">
                    </div>
                    <div class="mb-3">
                        <label for="middle" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle" @error('middle') is-invalid @enderror name="middle" 
                            value="{{ $user->contact == null ? null : $user->contact->middle }}">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" @error('lastname') is-invalid @enderror name="lastname" 
                            value="{{ $user->contact == null ? null : $user->contact->lastname }}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" @error('city') is-invalid @enderror name="city" 
                            value="{{ $user->contact == null ? null : $user->contact->city }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" @error('address') is-invalid @enderror name="address" 
                            value="{{ $user->contact == null ? null : $user->contact->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="housenumber" class="form-label">House number</label>
                        <input type="text" class="form-control" id="housenumber" @error('housenumber') is-invalid @enderror name="housenumber" 
                            value="{{ $user->contact == null ? null : $user->contact->housenumber }}">
                    </div>
                    <div class="mb-3">
                        <label for="postalcode" class="form-label">Postal code</label>
                        <input type="text" class="form-control" id="postalcode" @error('postalcode') is-invalid @enderror name="postalcode" 
                            value="{{ $user->contact == null ? null : $user->contact->postalcode }}">
                    </div>
                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="phonenumber" @error('phonenumber') is-invalid @enderror name="phonenumber" 
                            value="{{ $user->contact == null ? null : $user->contact->phonenumber }}">
                    </div>
                    <div class="mb-3">
                        <label for="dateofbirth" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="dateofbirth" @error('dateofbirth') is-invalid @enderror name="dateofbirth" 
                            value="{{ $user->contact == null ? null :  date("Y-m-d", strtotime($user->contact->dateofbirth)) }}">
                    </div>

                    <button type="submit" class="btn btn-primary"> ok </button>
                </form>

            </div>
        </div>
    </div>
    </div>

    <footer class="mt-auto">
        <div class="somefooterclass">footer</div>
     </footer>
@endsection
