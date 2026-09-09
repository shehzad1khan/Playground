@extends('layouts.main')

@push('title')
    <title>Register form</title>
@endpush

@section('main-section')
    <div class="container">
        <form method='post' action='{{ route('register') }}'>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Enter Name</label>
                <input type="text" class="form-control" id="name" name='name' value="{{ old('name') }}">
                @error('name')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name='email'>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
                @error('password')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name='confirm_password'>
                @error('confirm_password')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
