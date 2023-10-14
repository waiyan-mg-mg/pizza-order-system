@extends('layouts/master')
@section('title', 'Register')

@section('content')
    <div class="login-form">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
            </div>
            @error('name')
            <small class='text-danger'>{{$message}}</small>
            @enderror
            <div class="form-group">
                <label>Email Address</label>
                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
            </div>
            @error('email')
            <small class='text-danger'>{{$message}}</small>
            @enderror
            <div class="form-group">
                <label>Address</label>
                <input class="au-input au-input--full" type="text" name="address" placeholder="address">
            </div>
             @error('address')
            <small class='text-danger'>{{$message}}</small>
            @enderror
            <div class="form-group">
                <label>Phone </label>
                <input class="au-input au-input--full" type="number" name="phone" placeholder="09XXXX">
            </div>
             @error('phone')
            <small class='text-danger'>{{$message}}</small>
            @enderror
            <div class="form-group">
                <label>Password</label>
                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
            </div>
             @error('password')
            <small class='text-danger'>{{$message}}</small>
            @enderror
            <div class="form-group">
                <label>Password</label>
                <input class="au-input au-input--full" type="password" name="password_confirmation"
                    placeholder="Confirm Password">
            </div>

            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

        </form>
        <div class="register-link">
            <p>
                Already have account?
                <a href="{{ route('#login') }}">Sign In</a>
            </p>
        </div>
    </div>
@endsection
