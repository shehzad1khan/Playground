@extends('layouts.main')

@push('title')
    <title>Register form</title>
@endpush

@section('main-section')
    <div class="container">
        <form method='post' action='{{ route('register') }}'>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="name" name='name' value="{{ old('name') }}">
                @error('name')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fname" class="form-label">Father Name</label>
                <input type="text" class="form-control" id="fname" name='fname' value="{{ old('fname') }}">
                @error('fname')
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
                <label for="gender" class="form-label">Select Gender</label>
                <select class="form-select form-select-lg" name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender')
                    <span class='text-danger'>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
