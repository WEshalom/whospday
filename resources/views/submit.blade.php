@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a Birthday</h1>
        </div>
        <div class="row">
            <form action="/submit" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control
                        @error('firstName') is-invalid
                        @enderror" id="firstName" name="firstName" placeholder="First Name" value="{{ old('firstName') }}">
                    @error('firstName')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control
                        @error('lastName') is-invalid
                        @enderror" id="lastName" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}">
                        @error('lastName')
                        <div class="invalid-feedback">{{ $message}}</div>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control
                        @error('birthday')is-invalid
                        @enderror" id="birthday" name="birthday" placeholder="birthday" value="{{old('birthday') }}">
                        @error('birthday')
                        <div class="invalid-feedback">{{ $message}}</div>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control
                        @error('age')
                        is-invalid
                        @enderror" id="age" name="age" placeholder="Age" value="{{ old('age') }}">
                        @error('age')
                        <div class="invalid-feedback">{{ $message}}</div>
                        @enderror
                </div>

                <button type="submit" class="btn btnprimary">Submit</button>
            </form>
        </div>
    </div>
@endsection
