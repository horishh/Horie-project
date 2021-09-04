@extends('layout.master')

@section('content')

    <div class="col-md-6 offset-md-3 mt-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if(count($errors))
                @foreach($errors as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" required value="{{ isset($email) ? $email : '' }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('translate.login_form.buttons.login') }}</button>
        </form>
    </div>

@endsection
