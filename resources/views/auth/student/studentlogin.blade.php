@extends('layouts.masterauth')
@section('title', 'Student Login')  
@section('content')
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                        <div class="logo">
                            <a href="/">
                            <img style="margin-top:-10px;" src="{{asset('images/fav.png')}}" alt="">
                            </a>
                          
                        </div> Student Login
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">LOGIN TO CONTINUE</p>
                    <form id="login-form" action="{{route('student-login')}}" method="post" novalidate="">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="text" class="form-control underlined" name="roll" id="roll"
                                placeholder="Your Roll " value="{{old('roll')}}"> 
                                <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                                </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control underlined" name="password" id="password"
                                placeholder="Your password" value="{{old('password')}}"> 
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                        <div class="form-group">
                            <label for="remember">
                                <input class="checkbox" name="remember" id="remember" value="1" type="checkbox">
                                <span>Remember me</span>
                            </label>
                            <a href="/reset-password-student" class="forgot-btn pull-right">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Do not have an account?
                                <a style="color:#000;" href="/student-registration">Sign Up!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@stop
