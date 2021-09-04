@extends('layout.master')

@section('content')

    <div class="col-md-6 offset-md-3">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            @if(count($errors->all()))
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="mb-3 mt-4">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName1" required value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputRepeatPassword" class="form-label">Repeat Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputRepeatPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

@endsection
